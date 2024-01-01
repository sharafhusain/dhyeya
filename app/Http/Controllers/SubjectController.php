<?php

namespace App\Http\Controllers;


use App\Models\Subject;
use App\Models\Team;
use Astrotomic\Translatable\Validation\RuleFactory;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $subjects = Subject::with("team")->orderBy("id", "desc")->paginate();
        $teachers = Team::all();
        return view('subject.index',compact("subjects","teachers"));
    }

    public function addTeacher(Subject $attachAbleSubject){
        $subjects = Subject::with("team")->paginate();
        $teachers = Team::all();
        return view('subject.index',compact('subjects',"attachAbleSubject","teachers"));
    }


    public function attachTeacher(Request $request, Subject $attachAbleSubject)
    {
        $rules = RuleFactory::make([
            'teacher' => 'required'
        ]);
        $validated = $request->validate($rules);

        $teacher = Team::find($validated["teacher"]);
        $exists = $attachAbleSubject->team->contains($teacher->id);
        if (!$exists){
            $attachAbleSubject->team()->save($teacher);
           return redirect()->back()->with('status', 'Teacher has been added successfully');
        }else{
            return redirect()->back()->with('status', 'Teacher is already added!');
        }
    }


    public function detachTeacher(Subject $subject, Team $teacher)
    {
        $subject->team()->detach($teacher->id);
        return redirect()->route("subject")->with('status', 'Teacher has been detached from subject successfully');
    }

    public function store(Request $request)
    {
        $rules = RuleFactory::make([
            '%name%' => 'required',
            'subject_type' => 'required',
        ]);
        $validated = $request->validate($rules);
        Subject::create($validated);
        return redirect()->back()->with('status', 'Subject has been created successfully');
    }

//    public function edit($catype, Post $post): View
//    {
//        return view('current-affairs.edit', compact('catype','post'));
//    }
//
//    public function update(Request $request, BatchDetail $batch): RedirectResponse
//    {
//        $rules = RuleFactory::make([
//            '%title%' => 'required',
//            '%image%' => 'nullable|image|max:10240',
//            'medium' => 'required',
//            'center_id' => 'required',
//            'date' => 'required',
//            'time' => 'required',
//            "status" => 'required'
//        ]);
//        $validated = $request->validate($rules);
//
//        if ($request->hasFile('en.image')) {
//            $validated['en']['image'] = $this->uploadImage($request->file('en.image'));
//            if ($batch->translate('en')->image){
//                $this->deleteImage($batch->translate('en')->image);
//            }
//        }
//
//        if ($request->hasFile('hi.image')) {
//            $validated['hi']['image'] = $this->uploadImage($request->file('hi.image'));
//            if ($batch->translate('hi')->image){
//                $this->deleteImage($batch->translate('hi')->image);
//            }
//        }
//
//        print_r($validated);
//
//
//        $batch->fill($validated);
//        $batch->save();
//        return redirect()->route('batch')->with('status', 'Batch has been Updated successfully');
//    }

    public function destroy(Subject $subject): RedirectResponse
    {
        try {
        $subject->delete();
        return redirect()->back()->with('status', 'Subject has been deleted successfully ...');

        }catch (Exception $exception){
            return redirect()->back()->withErrors('Something went wrong. Subject might be related to a teacher!');
        }
    }
}
