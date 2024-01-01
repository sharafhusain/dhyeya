<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostAttachment;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BookSectionController extends Controller
{

    use HasImageUploading;

    public function index()
    {
        $parent_post = Post::where("post_type","book_section")->first();
        $books = $parent_post->attachments()->orderBy("id","desc")->paginate();
        return view("current-affairs.layout.our_book_section",compact("books"));
    }
    public function store_books(Request $request)
    {
        $rules = RuleFactory::make([
            'en.title' => 'required',
            'en.filename' => 'required|max:50000',
            'hi.filename' => 'required|max:50000'
        ]);
        $validated = $request->validate($rules);
        $validated["type"] = "jpg";

        $validated['hi']["title"] = $validated['en']["title"];
        $validated['en']['filename'] = $this->uploadImage($request->file('en.filename'));
        $validated['hi']['filename'] = $this->uploadImage($request->file('hi.filename'));
        $post = Post::where("post_type", "book_section")->first();

        $attachment = new PostAttachment();
        $attachment->fill($validated);
        $post->attachments()->save($attachment);
        return redirect()->back()->with('status', 'Book has been Uploaded successfully');
    }

    public function destroy(PostAttachment $attachment): RedirectResponse
    {
        if ($attachment->filename) {
            $this->deleteImage($attachment->filename,"public/media/");
        }
        $attachment->delete();
        return redirect()->back()->with('status', 'Book has been deleted successfully ...');
    }
}
