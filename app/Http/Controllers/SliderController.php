<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Slider;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class SliderController extends Controller
{
    use HasImageUploading;

    public function index()
    {
        $slider = Slider::orderBy("id", "desc")->paginate(4);
        return view('slider.index', compact('slider'));
    }

    public function create()
    {
//        $slider = slider::all();
        return view('slider.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = RuleFactory::make([
            '%image%' => 'required|image',
        ]);
        $validated = $request->validate($rules);

        if ($request->hasFile('en.image')) {
            $validated['en']['image'] = $this->uploadImage($request->file('en.image'));
        }
        if ($request->hasFile('hi.image')) {
            $validated['hi']['image'] = $this->uploadImage($request->file('hi.image'));
        }
        $slider = new Slider();
        $slider->fill($validated);
        $slider->save();
        return redirect()->route('slider')->with('status', 'Slider has been Created Successfully ...');
    }

    public function edit(Slider $slider)
    {
//        $posts = Post::all();
        return view('slider.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $rules = RuleFactory::make([
            '%image%' => 'nullable|image',
//            'post_id' => 'nullable'
        ]);
        $validated = $request->validate($rules);

        if ($request->hasFile('en.image')) {
            $validated['en']['image'] = $this->uploadImage($request->file('en.image'));
            if (!empty($slider->translate('en')->image)){
                $this->deleteImage($slider->translate('en')->image);
            }
        }

        if ($request->hasFile('hi.image')) {
            $validated['hi']['image'] = $this->uploadImage($request->file('hi.image'));
            if (!empty($slider->translate('hi')->image)){
                $this->deleteImage($slider->translate('hi')->image);
            }
        }

        $slider->fill($validated);
        $slider->save();
        return redirect()->route('slider')->with('status', 'Slider has been updated Successfully ...');
    }

    public function destroy(Slider $slider)
    {
        if ($slider->translate('en')->image){
            $this->deleteImage($slider->translate('en')->image);
        }
        if ($slider->translate('hi')->image){
            $this->deleteImage($slider->translate('hi')->image);
        }
        $slider->delete();
        return redirect()->back()->with('status', 'Record has been deleted successfully ...');
    }
}
