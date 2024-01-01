<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\PostMeta;
use App\Models\Test;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FeatureController extends Controller
{
    /*
     * This Class is being shared by 2 cruds for (Course's feature and Test's features)
     * because both shares the same properties.
     *
     * This Controller is kind of Polymorphic.
     *
     * A hidden field is used to make diffrence btwn 2 Modals
     */
    public function ajaxindex($id, $type)
    {
        if ($type == "test"){
            $test =  Test::findOrFail($id);
            $features = $test->post->metas->where("type","feature");
            return $features;

        }else{
            $course =  Course::findOrFail($id);
            $features = $course->post->metas->where("type","feature");
            return $features;
        }
    }

    public function ajaxcreate(Request $request,$id)
    {
        $rules = RuleFactory::make([
            '%title%' => 'required',
        ]);
        $validated['type'] = 'feature';
        $validated = $request->validate($rules);
        $features = new PostMeta();
        $features->fill($validated);


        if ($request->type == "test"){
            $test = Test::findOrFail($id);
            $features = $test->post->metas()->save($features);
        }else{
            $course = Course::findOrFail($id);
            $features = $course->post->metas()->save($features);
            }

        return $features;
    }

    public function update(Request $request,PostMeta $feature)
    {
        $rules = RuleFactory::make([
            '%title%' => 'required',
        ]);
        $validated = $request->validate($rules);
        $feature->fill($validated);
        $feature->save();
        return $feature;
    }

    public function ajaxcdelete(PostMeta $featureid)
    {
        $featureid->delete();
        return json_encode(array(
            "statusCode"=>200
        ));
    }

}
