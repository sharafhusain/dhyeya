<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ExamLinks;
use App\Models\Post;
use App\Models\PostAttachment;
use App\Models\Seofield;
use Astrotomic\Translatable\Validation\RuleFactory;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ExamController extends Controller
{
    use HasImageUploading;

    public function index()
    {
        $exams = Post::where("post_type", "exam")->orderBy("id", "desc")->paginate(16);
        return view('exam.index', compact("exams"));
    }

    public function create($hiEn = "en")
    {
        $categories = Category::all()->where("category_type", "exam");
        $postlinks = Post::where("post_type", "exam")->get();
        return view('exam.create', compact("categories", "hiEn", "postlinks"));
    }

    public function store(Request $request, $hiEn = "en"): RedirectResponse
    {
        makeRequestSlug("slug");
        $rules = RuleFactory::make([
            $hiEn . '.title' => 'required',
            $hiEn . '.description' => 'required',
            'slug' => 'required|unique:posts,slug',
            $hiEn . '.excerpt' => 'required',
            'keywords' => 'required',
            'status' => 'required',
            'post_links' => 'nullable',
            'category_links' => 'nullable',
            'image' => 'nullable|image',
            'filename' => 'nullable',
            'category_ids' => 'required'
        ]);
        $validated = $request->validate($rules);

        $validated['post_type'] = "exam";
        $validated['type'] = "pdf";
        $validated['user_id'] = auth()->user()->id;

        if ($request->hasFile('image')) {
            $validated[$hiEn]['image'] = $this->uploadImage($request->file('image'));
        }
        unset($validated['image']);

        $exam = Post::create($validated);

        foreach ($validated['post_links'] as $link) {
            $ExamLinks = new ExamLinks();
            $ExamLinks->fill(["owner_post_id" => $exam->id, "post_id" => $link, "type" => "post"]);
            $ExamLinks->save();
        }

        foreach ($validated['category_links'] as $link) {
            $ExamLinks = new ExamLinks();
            $ExamLinks->fill(["owner_post_id" => $exam->id, "post_id" => $link, "type" => "category"]);
            $ExamLinks->save();
        }

        if ($request->hasFile('filename')) {
            $validated['filename'] = $this->uploadImage($request->file('filename'));
            $attachment = new PostAttachment();
            $attachment->fill($validated);
            $exam->attachments()->save($attachment);
        }

        $exam->catagories()->sync($validated["category_ids"]);

        $seofield = new Seofield();
        $seofield->fill($validated);
        $exam->seofield()->save($seofield);

        return redirect()->route('exam')->with('status', 'Exam has been created successfully');
    }

    public function edit(Post $exam, $hiEn = "en"): View
    {
        $categories = Category::all()->where("category_type", "exam");
        $postlinks = Post::where("post_type", "exam")->get()->except([$exam->id]);
        $selected_post_ids = $exam->links()->where("type","post")->get()->pluck("post_id")->toArray();
        $selected_category_ids = $exam->catagories()->get()->pluck("id")->toArray();
        $selected_category_links = $exam->links()->where("type","category")->get()->pluck("post_id")->toArray();
//        dd($exam->links()->where("type","category")->get());

        return view('exam.edit', compact("exam", "categories", 'hiEn', "postlinks", "selected_post_ids", "selected_category_ids", "selected_category_links"));
    }

    public function update(Request $request, Post $exam, $hiEn = "en"): RedirectResponse
    {
        makeRequestSlug("slug");
        $rules = RuleFactory::make([
            $hiEn . '.title' => 'required',
            $hiEn . '.description' => 'required',
            $hiEn . '.excerpt' => 'required',
            'slug' => 'required|unique:posts,slug,' . $exam->id,
            'keywords' => 'required',
            'status' => 'required',
            'image' => 'nullable|image',
            'filename`' => 'nullable',
            'category_ids' => 'required'
        ]);
        $validated = $request->validate($rules);
//########################################## Only to handle links #######################################################################

        $oldids = $exam->links()->where("type","post")->get()->pluck("post_id")->toArray();
        $newids = $request->toArray()["post_links"] ?? [];
        $toremove = array_diff($oldids, $newids);
        $newtoAdd = array_diff($newids, $oldids);

//      remove selected links from the table
        if ($toremove != null) {
            ExamLinks::query()->whereIn("post_id", $toremove)->where(["type" => "post", "owner_post_id" => $exam->id])->delete();
        }

//        Add new links to the table
        if ($newtoAdd != null) {
            foreach ($newtoAdd as $newlink) {
                $ExamLinks = new ExamLinks();
                $ExamLinks->fill(["owner_post_id" => $exam->id, "post_id" => $newlink, "link" => "post"]);
                $ExamLinks->save();
            }
        }
//        dd("id", $exam->id, "old", $oldids, "new", $newids, "to remove", $toremove, "new to add", $newtoAdd);

//#################################################################################################################
////########################################## Only to handle links Category ######################################

        $old_category_links = $exam->links()->where("type","category")->get()->pluck("post_id")->toArray();
        $new_category_links = $request->toArray()["category_links"] ?? [];
        $to_remove_category = array_diff($old_category_links, $new_category_links);
        $to_add_new_category = array_diff($new_category_links, $old_category_links);

//      remove selected links from the table
        if ($to_remove_category != null) {
            ExamLinks::query()->whereIn("post_id", $to_remove_category)->where(["type" => "category", "owner_post_id" => $exam->id])->delete();
        }

//        Add new links to the table
        if ($to_add_new_category != null) {
            foreach ($to_add_new_category as $newlink) {
                $ExamLinks = new ExamLinks();
                $ExamLinks->fill(["owner_post_id" => $exam->id, "post_id" => $newlink, "type" => "category"]);
                $ExamLinks->save();
            }
        }
//        dd("id", $exam->id, "old", $oldids, "new", $new_category_links, "to remove", $to_remove_category, "new to add", $to_add_new_category);

//#################################################################################################################
        DB::beginTransaction();
        try {
            if ($request->hasFile('image')) {
                $validated[$hiEn]['image'] = $this->uploadImage($request->file('image'));

                if ($exam->image) {
                    $this->deleteImage($exam->image);
                }
            }
            unset($validated['image']);

            if ($request->hasFile('filename')) {
                $validated['filename'] = $this->uploadImage($request->file('filename'));

                if ($exam->attachments()->first()) {
                    $this->deleteImage($exam->attachments()->first()->filename);
                }

                $attachment = new PostAttachment();
                $attachment->fill($validated);
                $exam->attachments()->save($attachment);
            }

            $exam->fill($validated)->save();

            $exam->seofield->fill($validated)->save();
            $exam->catagories()->sync($validated["category_ids"]);

            DB::commit();
            return redirect()->route('exam')->with('status', 'Exam has been Updated successfully');
        } catch (Exception $exception) {
            DB::rollback();
            return redirect()->back()->withErrors('Something Went wrong Please Try Again...');
        }
    }

    public function destroy(Post $exam): RedirectResponse
    {
        DB::beginTransaction();
        try {

            if ($exam->image) {
                $this->deleteImage($exam->image);
            }
            if ($exam->attachments()->first()) {
                $this->deleteImage($exam->attachments()->first()->filename);
            }
            $exam->seofield()->delete();
            $exam->attachments()->delete();
            $exam->catagories()->detach();
            $exam->delete();
            DB::commit();
            return redirect()->back()->with('status', 'Exam has been deleted successfully ...');
        } catch (Exception $exception) {
            DB::rollback();
            return redirect()->back()->withErrors('Something Went wrong Please Try Again...');
        }


    }

}
