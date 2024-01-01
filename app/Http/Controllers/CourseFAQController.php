<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\PostMeta;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\Request;

class CourseFAQController extends Controller
{
    public function ajaxindex(Course $course)
    {
        return $course->post->metas->where("type","faq");;
    }

    public function ajaxcreate(Request $request, Course $course)
    {
        $rules = RuleFactory::make([
            '%title%' => 'required',
            '%description%' => 'required']);

        $validated = $request->validate($rules);
        $validated["type"] = "faq";

        $meta = new PostMeta();
        $meta->fill($validated);
        $course->post->metas()->save($meta);

        return $meta;

    }

    public function update(Request $request, Course $course, PostMeta $faq)
    {
        $rules = RuleFactory::make([
            '%title%' => 'required',
            '%description%' => 'required']);

        $validated = $request->validate($rules);
        $faq->fill($validated)->save();
        return redirect()->route('courses',$course->id)->with('status', 'FAQ has been Updated successfully');

    }

    public function destroy(PostMeta $faq)
    {
        $faq->delete();
        return true;
    }
}
