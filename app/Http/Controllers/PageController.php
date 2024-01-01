<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use App\Models\Seofield;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PageController extends Controller
{
    use HasImageUploading;

    public function index()
    {
        $pages = Page::orderBy("id", "desc")->paginate();
        return view('page.index', compact("pages"));
    }

    public function edit(Page $page, $hiEn = "en"): View
    {
        return view('page.edit', compact("page", "hiEn"));
    }

    public function update(Request $request, Page $page, $hiEn): RedirectResponse
    {
        $rules = RuleFactory::make([
                $hiEn . '.title' => 'required',
                $hiEn . '.excerpt' => 'required',
                $hiEn . '.description' => 'required',
                'keywords' => 'required',
                'status' => 'required',
                "filename" => "nullable|image|max:10240"
            ]
        );
        $validated = $request->validate($rules);

        if ($request->hasFile("filename")) {

            if ($page->filename) {
                $this->deleteImage($page->filename);
            }
//            To insert into Pages table
            $validated["filename"] = $this->uploadImage($request->file('filename'));
//            To insert into Post table
            $validated[$hiEn]["image"] = $validated["filename"];
        }

        $page->fill($validated)->save();
        $page->seofield->fill($validated)->save();
        $page->post->fill($validated)->save();
        return redirect()->route('pages')->with('status', 'Page has been Updated successfully');
    }
}
