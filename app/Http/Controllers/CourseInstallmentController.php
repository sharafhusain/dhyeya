<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseInstallment;
use App\Models\Post;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseInstallmentController extends Controller
{
    public function ajaxindex(Course $course)
    {
        return $course->installments;;
    }

    public function ajaxcreate(Request $request, Course $course)
    {

            $rules = RuleFactory::make([
                '%title%' => 'required',
                'amount' => 'required|numeric']);

            $validated = $request->validate($rules);

            $installment = new CourseInstallment();
            $installment->fill($validated);
            $course->installments()->save($installment);

            return $installment;

    }
    public function update(Request $request, CourseInstallment $installment)
    {
            $rules = RuleFactory::make([
                '%title%' => 'required',
                'amount' => 'required|numeric']);

            $validated = $request->validate($rules);
            $installment->fill($validated)->save();

//            dd($installment->toArray());
            return $installment;
    }

    public function ajaxdelete(CourseInstallment $installment)
    {
        $installment->delete();
            return true;
    }



}
