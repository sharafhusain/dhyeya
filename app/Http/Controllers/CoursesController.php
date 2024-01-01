<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseInstallment;
use App\Models\Post;
use Astrotomic\Translatable\Validation\RuleFactory;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CoursesController extends Controller
{
    public function index($type = "course")
    {
        if ($type) {
            $courses = Course::with('installments')->orderBy("id", "desc")->paginate(12);
//            dd($courses->first()->installments->first()->toArray());
            return view('courses.index', compact('courses'));
        }

        return redirect()->route('dashboard')->withErrors('Cannot get Courses');
    }

    public function temp(Course $course)
    {
        $installments = $course->installments()->paginate(12);
        $features = $course->post->metas()->paginate(12);
        $faqs = $course->post->metas()->paginate();
        return view('courses.otherDetails.index', compact("course", "installments", "features", "faqs"));
    }

    public function create($type = 'course')
    {
        if ($type) {
            $courses = Course::all();
            return view('courses.create', compact('courses'));
        }
        return redirect()->route('dashboard')->withErrors('Cannot get Courses');
    }

    public function store(Request $request, $type = 'course'): RedirectResponse
    {
        makeRequestSlug("slug");
        $rules = RuleFactory::make([
            '%title%' => 'required',
            'slug' => 'required|unique:posts,slug',
            '%exam_name%' => 'required',
            '%course_information%' => 'nullable',
            '%admission_process%' => 'nullable',
            '%technical_requirement%' => 'nullable',
            'medium' => 'required',
            'mode' => 'required',
            'duration' => 'required',
            'course_type' => 'required',
            'total_fee' => 'required',
            'installment_duration' => 'required',
            'one_time_payment' => 'required',
        ]);
        $validated = $request->validate($rules);
        $validated['user_id'] = auth()->user()->id;
        $validated['post_type'] = "course";
//        dd($validated);

        $post = Post::create($validated);
        $course = new Course();
        $course->fill($validated);
        $post->course()->save($course);
        return redirect()->route('courses')->with('status', 'Course has been created successfully');
//        return redirect()->route('dashboard')->withErrors('Sorry, cannot get Courses');
    }

    public function edit(Course $course, $type = 'course')
    {
        if ($type) {
            return view('courses.edit', compact('course'));
        }
        return redirect()->route('dashboard')->withErrors('Cannot get Courses');
    }

    public function update(Request $request, Course $course, $type = 'course'): RedirectResponse
    {
//        if ($type) {
        makeRequestSlug("slug");
        $rules = RuleFactory::make([
            '%title%' => 'required',
            'slug' => 'required|unique:posts,slug,'. $course->post->id,
            '%exam_name%' => 'required',
            '%course_information%' => 'nullable',
            '%admission_process%' => 'nullable',
            '%technical_requirement%' => 'nullable',
            'medium' => 'required',
            'mode' => 'required',
            'duration' => 'required',
            'course_type' => 'required',
            'total_fee' => 'required',
            'installment_duration' => Rule::requiredIf(str_contains($request->course_type,"Pen")),
            'one_time_payment' => 'required',
        ]);

        $validated = $request->validate($rules);
        $course->post->fill($validated)->save();
        $course->fill($validated)->save();


        return redirect()->route('courses')->with('status', 'Course has been Updated successfully');
//        }
//        return redirect()->route('dashboard')->withErrors('Sorry, cannot get Courses');
    }

    public function destroy(Course $course, $type = 'course'): RedirectResponse
    {
        try {
//            Check wather course have post|notification|menu and generate an exception
            if (boolval($course->post->metas->toArray()) || $course->post->notification || $course->post->menu) {
//                dd("hit if");
                $course->post->delete();
                $course->delete();
            } else {
//                if not then delete it without exception
                $course->delete();
                $course->post->delete();
                return redirect()->route('courses')->with('status', 'Course has been deleted successfully ...');
            }


        } catch (Exception $e) {
            return redirect()->back()->withErrors('Something went wrong! Exam might be related to Menu, Notification or can have FAQ, Feature or Installments');
        }
    }
}
