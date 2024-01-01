<?php

namespace App\Http\Controllers;

use App\Models\Achiever;
use App\Models\Center;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CenterController extends Controller
{
    use HasImageUploading;

    public function index(): View
    {
        $centers = Center::paginate(12);
        return view('center.index', compact('centers'));
    }

    public function create(): View
    {
        return view('center.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = RuleFactory::make([
            'image' => 'required|image|max:10240',
            '%title%' => 'required',
            '%city%' => 'required',
            '%state%' => 'required',
            'email' => 'required',
            'phone_number' => 'required|min:10',
            '%address%' => 'required',
            'center_type' => 'required',
        ]);
        $validated = $request->validate($rules);

        if ($request->hasFile('image')) {
            $validated['image'] = $this->uploadImage($request->file('image'));
        }

        $center = new Center();
        $center->fill($validated);
        $center->save();
//        dd($center);
        return redirect()->route('center')->with('status', 'Center has been created successfully');
    }

    public function edit(Center $center): View
    {
        return view('center.edit', compact('center'));
    }

    public function update(Request $request, Center $center): RedirectResponse
    {
        $rules = RuleFactory::make([
            'image' => 'nullable|image|max:10240',
            '%title%' => 'required',
            '%city%' => 'required',
            '%state%' => 'required',
            'email' => 'required',
            'phone_number' => 'required|min:10',
            '%address%' => 'required',
            'center_type' => 'required',
        ]);
        $validated = $request->validate($rules);
        if ($request->hasFile('image')) {
            $validated['image'] = $this->uploadImage($request->file('image'));
            if (!empty($center->image)) {
                $this->deleteImage($center->image);
            }
        }
        $center->fill($validated);
        $center->save();
        return redirect()->route('center')->with('status', 'Center has been updated successfully');
    }

    public function destroy(Center $center): RedirectResponse
    {
        if ($center->image) {
            $this->deleteImage($center->image);
        }
        $center->delete();
        return redirect()->back()->with('status', 'Center has been deleted successfully');
    }
}
