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

class PostController extends Controller
{
    use HasImageUploading;

    public function index()
    {
        $posts = Post::where("post_type", "post")->where("status","active")->orderBy("id", "desc")->paginate(12);
        return view('post.index', compact("posts"));
    }

    public function create($hiEn = "en")
    {
        $categories = Category::where("category_type","post")->get();
        return view('post.create', compact("hiEn", 'categories'));
    }

    public function store(Request $request, $hiEn = "en"): RedirectResponse
    {
        makeRequestSlug("slug");
        $rules = RuleFactory::make([
            $hiEn . '.title' => 'required',
            $hiEn . '.description' => 'required',
            $hiEn . '.excerpt' => 'required',
            "categories" => Rule::requiredIf($request->post_type === "post" || $request->post_type==="child-of-daily-current-affairs"),
            'slug' => 'required|unique:posts,slug',
            'keywords' => 'required',
            'status' => 'required',
            'post_type' => 'required',
            'image' => 'required|image'
        ]);
        $validated = $request->validate($rules);

        $validated['user_id'] = auth()->user()->id;

        if ($request->hasFile('image')) {
            $validated[$hiEn]['image'] = $this->uploadImage($request->file('image'));
            if($request->post_type === "child-of-daily-current-affairs") {
                $validated[$hiEn == "en" ? "hi" : "en"]['image'] = $validated[$hiEn]['image'];
                $validated[$hiEn == "en" ? "hi" : "en"]['title'] = $validated[$hiEn]['title'];
            }
        unset($validated['image']);
        }

        $post = Post::create($validated);
        $seofield = new Seofield();
        $seofield->fill($validated);
        $post->seofield()->save($seofield);


        if ($validated['post_type'] !== "post"){
            $parentPost = str_replace("child-of-","",$validated['post_type']);
            if ($request->has('categories')){
                $post->catagories()->sync($validated['categories']);
            }
            return redirect()->route('affairs',$parentPost)->with('status', ucwords($parentPost).' has been created successfully');
        }
        $post->catagories()->sync($validated['categories']);
        return redirect()->route('post')->with('status', 'Post has been created successfully');
    }

    public function edit(Post $post, $hiEn = "en"): View
    {
        $categories = Category::all();
        return view('post.edit', compact('categories',"post", "hiEn"));
    }

    public function update(Request $request, Post $post, $hiEn): RedirectResponse
    {
        makeRequestSlug("slug");
        $rules = RuleFactory::make([
            $hiEn . '.title' => 'required',
            $hiEn . '.description' => 'required',
            $hiEn . '.excerpt' => 'required',
            "categories" => Rule::requiredIf($request->post_type==="post" || $request->post_type==="child-of-daily-current-affairs"),
            'slug' => 'required|unique:posts,slug,' . $post->id,
            'keywords' => 'required',
            'status' => 'required',
            'post_type' => 'required',
            'image' => 'nullable|image'
        ]);
        $validated = $request->validate($rules);

        if ($request->hasFile('image')) {

            $previous_image = $post?->translate($hiEn)?->image;
            if ($previous_image){
                $this->deleteImage($previous_image);
            }
            $validated[$hiEn]['image'] = $this->uploadImage($request->file('image'));
            if($request->post_type === "child-of-daily-current-affairs") {
                $validated[$hiEn == "en" ? "hi" : "en"]['image'] = $validated[$hiEn]['image'];
                $validated[$hiEn == "en" ? "hi" : "en"]['title'] = $validated[$hiEn]['title'];
            }
        unset($validated['image']);
        }

        $post->fill($validated)->save();
        $post->seofield->fill($validated)->save();

        if ($validated['post_type'] !== "post"){
            $parentPost = str_replace("child-of-","",$validated['post_type']);
            if ($request->has('categories')){
                $post->catagories()->sync($validated['categories']);
            }
            return redirect()->route('affairs',$parentPost)->with('status', ucwords($parentPost).' has been created successfully');
        }
        $post->catagories()->sync($validated['categories']);

        return redirect()->route('post')->with('status', 'Post has been Updated successfully');
    }

    public function destroy(Post $post): RedirectResponse
    {
        if ($post->notification || $post->menu) {
            return redirect()->back()->withErrors('Something went wrong! Post might be related to Menu or notification');
        }

        if ($post->image) {
            $this->deleteImage($post->image);
        }

        $post->seofield()->delete();
        $post->catagories()->detach();
        $post->delete();
        return redirect()->back()->with('status', 'Post has been deleted successfully ...');
    }

}
