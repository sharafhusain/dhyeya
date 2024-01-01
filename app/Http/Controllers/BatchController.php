<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\BatchDetail;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BatchController extends Controller
{
    use HasImageUploading;
    public function index(){
        $batches = BatchDetail::orderBy("id", "desc")->paginate(12);
        return view('batch.index',compact('batches'));
    }

    public function create(){
        $centers = Center::all();
        return view('batch.create',compact('centers'));
    }

    public function store(Request $request): RedirectResponse
    {
//                dd($request->toArray());

        $rules = RuleFactory::make([
            '%title%' => 'required',
            '%image%' => 'required|image|max:10240',
            'medium' => 'required',
            'center_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            "status" => 'required'
        ]);

        $validated = $request->validate($rules);

        if ($request->hasFile('en.image')) {
            $validated['en']['image'] = $this->uploadImage($request->file('en.image'));
        }

        if ($request->hasFile('hi.image')) {
            $validated['hi']['image'] = $this->uploadImage($request->file('hi.image'));
        }


        $batch = new BatchDetail();
        $batch->fill($validated)->save();
        return redirect()->route('batch')->with('status', 'Batch has been created successfully');
    }

    public function edit(BatchDetail $batch): View

    {
        $centers = Center::all();
        return view('batch.edit', compact('batch','centers'));
    }

    public function update(Request $request, BatchDetail $batch): RedirectResponse
    {
        $rules = RuleFactory::make([
            '%title%' => 'required',
            '%image%' => 'nullable|image|max:10240',
            'medium' => 'required',
            'center_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            "status" => 'required'
        ]);
        $validated = $request->validate($rules);

        if ($request->hasFile('en.image')) {
            $validated['en']['image'] = $this->uploadImage($request->file('en.image'));
            if ($batch->translate('en')->image){
                $this->deleteImage($batch->translate('en')->image);
            }
        }

        if ($request->hasFile('hi.image')) {
            $validated['hi']['image'] = $this->uploadImage($request->file('hi.image'));
            if ($batch->translate('hi')->image){
                $this->deleteImage($batch->translate('hi')->image);
            }
        }

        print_r($validated);


        $batch->fill($validated);
        $batch->save();
        return redirect()->route('batch')->with('status', 'Batch has been Updated successfully');
    }

    public function destroy(BatchDetail $batch): RedirectResponse
    {
        if ($batch->translate('en')->image){
            $this->deleteImage($batch->translate('en')->image);
        }
        if ($batch->translate('hi')->image){
            $this->deleteImage($batch->translate('hi')->image);
        }
        $batch->delete();
        return redirect()->back()->with('status', 'Batch has been deleted successfully ...');
    }

}
