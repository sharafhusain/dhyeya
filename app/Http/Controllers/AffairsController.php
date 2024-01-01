<?php

namespace App\Http\Controllers;

use App\Models\BatchDetail;
use App\Models\Category;
use App\Models\Center;
use App\Models\Post;
use App\Models\PostAttachment;
use App\Models\PostAttachmentM;
use App\Models\PostAttachmentTranslation;
use Astrotomic\Translatable\Validation\RuleFactory;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AffairsController extends Controller
{
    use HasImageUploading;

    public function index($type = "")
    {
        $post = Post::where("post_type", $type)->first();

        switch ($type) {
            case "daily-pre-pare":
            case "air-debate":
                $attachments = $post?->attachments()?->orderBy("created_at", "desc")?->paginate();
                return view('current-affairs.index', compact('type', "post", "attachments"));
            case "daily-current-affairs":
            case "daily-news-analysis":
            case "Info-paedia":
            case "brain-booster":
                $posts = Post::where("post_type", "child-of-" . $type)->orderBy("created_at", "desc")->paginate(10);
                return view('current-affairs.custome_post.index', compact("type", "posts"));
            case "daily-mcqs":
            case "daily-static-mcqs":
                $posts = Post::where("post_type", "child-of-" . $type)->orderBy("created_at", "desc")->paginate(10);
                return view('current-affairs.qnas.index', compact("type", 'posts'));
            default:
                return redirect()->back()->withErrors("Page Not Found");
        }
    }

    public function create($type, $hiEn = "en")
    {
        if ($type == "daily-current-affairs") {
            $categories = Category::where("category_type", "DNA")->get();
        }else {
            $categories = Category::where("category_slug", "like", "$type")->get();
        }
        return view('current-affairs.custome_post.create', compact('type', "hiEn", "categories"));
    }

    public function download($locale, PostAttachment $attachment)
    {
        $old_content_date = new Carbon("2023-12-05");
        if (\Auth::check() || $attachment->created_at>$old_content_date) {
            return \Response::download('storage/media/' . $attachment->filename, $attachment->title);
        }
        return redirect()->route("login-guest");
    }
    public function downloadContent(PostAttachmentTranslation $attachmentTranslationId,)
    {
        return \Response::download('storage/media/' . $attachmentTranslationId->filename, $attachmentTranslationId->title);
    }

    public function edit($type, Post $post, $hiEn = "en")
    {
        if ($type == "daily-current-affairs") {
            $categories = Category::where("category_type", "DNA")->get();
        }else {
            $categories = Category::where("category_slug", "like", "$type")->get();
        }
        $selected_category_ids = $post->catagories()->get()->pluck("id")->toArray();
        return view('current-affairs.custome_post.edit', compact('type', 'post', "hiEn", "categories", "selected_category_ids"));
    }

//    This store methort is used only for [[Prepare and Podcast]] Page any other sub Current affairs uses Posts' default store and update methods
    public function store(Request $request, $type = "")
    {
        $slug_only_for_air_debate = strtolower(today()->format("d-F-Y"));

        $rules = RuleFactory::make([
            '%title%' => 'required',
            '%key%' => Rule::requiredIf($type === "air-debate"),
            '%val%' => Rule::requiredIf($type === "air-debate"),
            '%filename%' => 'required|max:50000'
        ]);

        $validated = $request->validate($rules);
        if ($type == "air-debate") {
            $validated["slug"] = $slug_only_for_air_debate;
        }

//        dd($validated);
        $validated["en"]['filename'] = $this->uploadImage($request->file('en.filename'));
        $validated["hi"]['filename'] = $this->uploadImage($request->file('hi.filename'));


        $post = Post::where("post_type", $type)->first();
        $attachment = new PostAttachment();
        $attachment->fill($validated);
        $post->attachments()->save($attachment);

        if ($type === "air-debate") {
            $attachmentmeta = new PostAttachmentM();
            $attachmentmeta->fill($validated);
            $attachment->meta()->save($attachmentmeta);
        }
        return redirect()->back()->with('status', $post->title . ' has been created successfully');
    }
    public function store_daily_prepare(Request $request)
    {
        $rules = RuleFactory::make([
            'en.title' => "required_without:hi.title",
            'hi.title' => "required_without:en.title",
            'en.filename' => Rule::requiredIf($request->en["title"]!=""),
            'hi.filename' => Rule::requiredIf($request->hi["title"]!="")
        ]);

        $validated = $request->validate($rules);

        if ($validated["hi"]["title"] == null)
            unset($validated["hi"]["title"]);
        if ($validated["en"]["title"] == null)
            unset ($validated["hi"]["title"]);

        if ($request->has("en.filename"))
            $validated["en"]['filename'] = $this->uploadImage($request->file('en.filename'));
        if ($request->has("hi.filename"))
            $validated["hi"]['filename'] = $this->uploadImage($request->file('hi.filename'));


        $post = Post::where("post_type", "daily-pre-pare")->first();
        $attachment = new PostAttachment();
        $attachment->fill($validated);
        $post->attachments()->save($attachment);
        return redirect()->back()->with('status', $post->title . ' has been created successfully');
    }

    public function update(Request $request, $type = "" ,PostAttachment $attachment)
    {
        $slug_only_for_air_debate = strtolower(today()->format("d-F-Y"));

        $rules = RuleFactory::make([
            '%title%' => 'required',
            '%key%' => Rule::requiredIf($type === "air-debate"),
            '%val%' => Rule::requiredIf($type === "air-debate"),
            '%filename%' => 'nullable'
        ]);

        $validated = $request->validate($rules);


        if ($request->hasFile('en.filename')) {
            $validated['en']['filename'] = $this->uploadImage($request->file('en.filename'));
            if (!empty($attachment->translate('en')->image)){
                $this->deleteImage($attachment->translate('en')->filename);
            }
        }

        if ($request->hasFile('hi.filename')) {
            $validated['hi']['filename'] = $this->uploadImage($request->file('hi.filename'));
            if (!empty($attachment->translate('hi')->image)){
                $this->deleteImage($attachment->translate('hi')->filename);
            }
        }

        $post = Post::where("post_type", $type)->first();
        $attachment->fill($validated);
        $post->attachments()->save($attachment);

        if ($type === "air-debate") {
            $attachmentmeta = $attachment->meta;
            $attachmentmeta->fill($validated);
            $attachment->meta()->save($attachmentmeta);
        }
        return redirect()->back()->with('status', $post->title . ' has been updated successfully');
    }

    public function destroy($type = '', Post $post, PostAttachment $attachment): RedirectResponse
    {
        if ($attachment->filename) {
            $this->deleteImage($attachment->translate("en")?->filename);
            $this->deleteImage($attachment->translate("hi")?->filename);
        }
        $attachment->delete();

        if ($type === "air-debate") {
            $attachment->meta()->delete();
        }
        return redirect()->back()->with('status', 'Attachment has been deleted successfully ...');
    }
}
