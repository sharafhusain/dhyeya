<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostAttachment;
use App\Models\PostTranslation;
use App\Models\Seofield;
use App\Models\Test;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use mysql_xdevapi\Collection;

class DownloadSectionController extends Controller
{
    use HasImageUploading;

    public function index(Category $parent_category, Category $sub_category = null)
    {
        if ($sub_category){
            $posts = $sub_category->post()->paginate();
            return view('download-section.layouts.blog_listing_for_index', compact("parent_category","sub_category","posts"));
        }

        $categories = $parent_category->children;
        return view('download-section.layouts.page_listing_for_index', compact("parent_category","categories"));
    }

    public function create(Category $parent_category,Category  $sub_category,$hiEn = "en")
    {
        return view('download-section.create', compact("parent_category","sub_category","hiEn"));
    }
    public function store(Request $request,Category $parent_category,Category  $sub_category,$hiEn = "en"): RedirectResponse
    {
        makeRequestSlug("slug");
        $rules = RuleFactory::make([
            $hiEn . '.title' => 'required',
            $hiEn . '.description' => 'required',
            $hiEn . '.excerpt' => 'required',
            "categories" => 'required',
            "filename" => 'required',
            'type' => 'required',
            'attachment_title' => 'required',
            'slug' => 'required|unique:posts,slug',
            'keywords' => 'required',
            'status' => 'required',
            'image' => 'required|image'
        ]);
        $validated = $request->validate($rules);
        $validated['user_id'] = auth()->user()->id;
        $validated['post_type'] = "download";

        if ($request->hasFile('image')) {
            $validated[$hiEn]['image'] = $this->uploadImage($request->file('image'));
        }

        unset($validated['image']);

        $post = Post::create($validated);
        $seofield = new Seofield();
        $seofield->fill($validated);
        $post->seofield()->save($seofield);


        if ($request->hasFile('filename')) {
            $validated['filename'] = $this->uploadImage($request->file('filename'));
            $validated["en"]['filename'] = $validated['filename'];
            $validated["hi"]['filename'] = $validated['filename'];
            $attachment = new PostAttachment();
            $validated["en"]["title"] = $validated["attachment_title"];
            $validated["hi"]["title"] = $validated["attachment_title"];
            unset($validated["attachment_title"]);

            $attachment->fill($validated);
            $post->attachments()->save($attachment);
        }

        $post->catagories()->sync($validated['categories']);
        return redirect()->route('view-downloads',[$parent_category,$sub_category->id])->with('status', 'Post has been created successfully');
    }

    public function edit(Post $post, $hiEn = "en"): View
    {
        $attachment = $post->attachments()->first();
        $categories = Category::where("category_type", "download")->where("level","1")->get();
        $selected_category = $post->catagories()->first();
        return view('download-section.edit', compact('categories',"post", "hiEn","attachment", "selected_category"));
    }

    public function update(Request $request, Post $post, $hiEn): RedirectResponse
    {
        makeRequestSlug("slug");
        $rules = RuleFactory::make([
            $hiEn . '.title' => 'required',
            $hiEn . '.description' => 'required',
            $hiEn . '.excerpt' => 'required',
            "categories" => 'required',
            "filename" => 'nullable',
            'type' => 'required',
            'attachment_title' => 'required',
            'slug' => 'required|unique:posts,slug,' . $post->id,
            'keywords' => 'required',
            'status' => 'required',
            'post_type' => 'required',
            'image' => 'nullable|image'
        ]);
        $validated = $request->validate($rules);

        if ($request->hasFile('image')) {
            $validated[$hiEn]['image'] = $this->uploadImage($request->file('image'));
        }
        unset($validated['image']);

        $post->fill($validated)->save();
        $post->seofield->fill($validated)->save();

        if ($request->hasFile('filename')) {

//            to delete previous attachment and save the new one uploaded
            $previous_attachment = $post->attachments()->first();
            if ($previous_attachment){
                $this->deleteImage($previous_attachment->filename);
            }

            $validated['filename'] = $this->uploadImage($request->file('filename'));
            $attachment = new PostAttachment();
            $validated["en"]["title"] = $validated["attachment_title"];
            $validated["hi"]["title"] = $validated["attachment_title"];
            unset($validated["attachment_title"]);

            $attachment->fill($validated);
            $post->attachments()->save($attachment);
        }

        $post->catagories()->sync($validated['categories']);
        return redirect()->route('view-downloads',[$post->catagories->first()->parent->id,$post->catagories->first()->id])->with('status', 'Post has been Updated successfully');
    }

    public function destroy(Post $post): RedirectResponse
    {
        if ($post->notification || $post->menu) {
            return redirect()->back()->withErrors('Something went wrong! Post might be related to Menu or notification');
        }

        if ($post->image) {
            $this->deleteImage($post->image);
        }
        if ($post->attachments()->count()) {
            $this->deleteImage($post->attachments()->first()->delete());
        }

        $post->seofield()->delete();
        $post->catagories()->detach();
        $post->delete();
        return redirect()->back()->with('status', 'Post has been deleted successfully ...');
    }
}
