<?php

namespace App\Http\Controllers;

use App\Models\Achiever;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AchieversController extends Controller
{
    use HasImageUploading;

    public function index($type): View
    {
        $achievers = Achiever::where("type",$type)->orderBy("id", "desc")->paginate(15);
        return view('achievers.index', compact('achievers',"type"));
    }

    public function create($type): View
    {
        return view('achievers.create',compact("type"));
    }

    public function store(Request $request, $type): RedirectResponse
    {
        $rules = RuleFactory::make([
            'image' => 'required|image|max:10240',
            '%name%' => 'required',
            'type' => 'required',
            '%achievement%' => 'required',
            'year' => 'required_if:type,=,achiever|digits:4',
            'group' => 'required_if:type,=,achiever',
        ]);
        $validated = $request->validate($rules);

        if ($request->hasFile('image')) {
            $validated['image'] = $this->uploadImage($request->file('image'));
        }

        $achievers = new Achiever();
        $achievers->fill($validated)->save();
        return redirect()->route($type=="achiever"?'achievers':"toppers", $type)->with('status', ucfirst($type).' has been created successfully');
    }

    public function edit($type, Achiever $achiever): View
    {
        return view('achievers.edit', compact('achiever',"type"));
    }

    public function update(Request $request,$type, Achiever $achiever): RedirectResponse
    {
        $rules = RuleFactory::make([
            'image' => 'nullable|image|max:10240',
            '%name%' => 'required',
            '%achievement%' => 'required',
            'year' => 'required_if:type,=,achiever|digits:4',
            'group' => 'required_if:type,=,achiever',
        ]);
        $validated = $request->validate($rules);

        if ($request->hasFile('image')) {
            $validated['image'] = $this->uploadImage($request->file('image'));
            if (!empty($achiever->image)) {
                $this->deleteImage($achiever->image);
            }
        }
        $achiever->fill($validated)->save();
        return redirect()->route($type=="achiever"?'achievers':"toppers", $type)->with('status', ucfirst($type).' has been updated successfully');
    }

    public function destroy($type,Achiever $achiever): RedirectResponse
    {
        if ($achiever->image) {
            $this->deleteImage($achiever->image);
        }
        $achiever->delete();
        return redirect()->back()->with('status', ucfirst($type).' has been deleted successfully');
    }

}
