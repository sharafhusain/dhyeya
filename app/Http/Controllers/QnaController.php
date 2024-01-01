<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostQna;
use App\Models\Seofield;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class QnaController extends Controller
{
    public function show_qnas($type,Post $subject)
    {
        $qnas = $subject->qnas;
        return view("current-affairs.qnas.qnaindex", compact('type',"subject", 'qnas'));
    }
    public function addQuestion(Request $request, $type, Post $subject)
    {
        $rules = RuleFactory::make([
            '%question%' => 'required',
            '%more_info%' => 'nullable',
            '%option_a%' => 'required',
            '%option_b%' => 'required',
            '%option_c%' => 'required',
            '%option_d%' => 'required',
            '%answer%' => 'required',
            '%description%' => 'required']);
        $validated = $request->validate($rules);
        $qna = new PostQna();
        $qna->fill($validated);

        $subject->qnas()->save($qna);
        return redirect()->route('qnas',[$type,$subject->id])->with('status', 'Subject has been created successfully');
    }

    public function storesubject(Request $request, $type)
    {

        makeRequestSlug("slug");
        $rules = RuleFactory::make([
            '%title%' => 'required',
            'slug' => 'required|unique:posts,slug',
            'keywords' => 'required',
            'post_type' => 'required',
        ]);
        $validated = $request->validate($rules);
        $validated['user_id'] = auth()->user()->id;
        $post = Post::create($validated);
        $seofield = new Seofield();
        $seofield->fill($validated);
        $post->seofield()->save($seofield);
        return redirect()->route('affairs',$type)->with('status', 'Subject has been created successfully');
    }

    public function editsubject(Request $request, $type, Post $subject){
        makeRequestSlug("slug");
        $rules = RuleFactory::make([
            '%title%' => 'required',
            'slug' => 'required|unique:posts,slug,' . $subject->id,
            'keywords' => 'required',
        ]);
        $validated = $request->validate($rules);
        $subject->seofield->fill($validated)->save();
        $subject->fill($validated)->save();
        return redirect()->route('affairs',$type)->with('status', 'Subject has been Updated successfully');
    }
    public function updatemcq(Request $request,$type, Post $subject, PostQna $mcq){
        $rules = RuleFactory::make([
            '%question%' => 'required',
            '%more_info%' => 'nullable',
            '%option_a%' => 'required',
            '%option_b%' => 'required',
            '%option_c%' => 'required',
            '%option_d%' => 'required',
            '%answer%' => 'required',
            '%description%' => 'required']);
        $validated = $request->validate($rules);
        $mcq->fill($validated)->save();
        return redirect()->route('qnas',[$type,$subject->id])->with('status', 'MCQ has been created successfully');
    }


    public function createmcq(Request $request,$type, Post $subject)
    {
        return view("current-affairs.qnas.create_mcq", compact("subject","type"));
    }

    public function update_view_mcq(Request $request,$type, Post $subject, PostQna $mcq)
    {
        return view("current-affairs.qnas.edit_mcq", compact("subject","type",'mcq'));
    }

    public function deletesubject($type, Post $subject)
    {
        if ($subject->qnas()->count()){
        return redirect()->back()->withErrors("Subject has some MCQs! Cannot Delete.");

        }else{
        $subject->seofield()->delete();
        $subject->delete();

        }
        return redirect()->back()->with('status', 'Subject has been Deleted successfully');
    }
    public function deleteqna($type, PostQna $qna)
    {
        $qna->delete();
        return redirect()->back()->with('status', 'MCQ has been Deleted successfully');
    }
}
