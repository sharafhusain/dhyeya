<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    use HasImageUploading;

    public function index()
    {
        $title = 'Dhyeya IAS Gallery';
        $galleries = Gallery::orderBy("id", "desc")->paginate();
        return view('gallery.index', compact('title', 'galleries'));
    }

    public function create()
    {
        $title = 'Create Gallery';
        return view('gallery.create', compact('title'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'image' => 'required|image',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $this->uploadImage($request->file('image'));
        }
        $gallery = new Gallery();
        $gallery->fill($validated);
        $gallery->save();
        return redirect()->route('gallery')->with('status', 'Gallery image has been added successfully ...');
    }

    public function edit(Gallery $gallery)
    {
        $title = 'Edit Gallery';
        return view('gallery.edit', compact('title', 'gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $this->uploadImage($request->file('image'));
            if (!empty($gallery->image)) {
                $this->deleteImage($gallery->image);
            }
        }

        $gallery->fill($validated);
        $gallery->save();
        return redirect()->route('gallery')->with('status', 'Gallery Image has been updated Successfully ...');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            $this->deleteImage($gallery->image);
        }
        $gallery->delete();
        return redirect()->back()->with('status', 'Record has been deleted successfully ...');
    }
}
