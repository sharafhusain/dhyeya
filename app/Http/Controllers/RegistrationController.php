<?php

namespace App\Http\Controllers;

use App\Models\BatchDetail;
use App\Models\Course;
use App\Models\Post;
use App\Models\StudentRegistration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        $courses = Course::all();
        $batchimgs = BatchDetail::where("status","active")->orderBy("id","desc")->limit(10)->get()->pluck("image");
        return view('auth.registration', compact('courses', 'batchimgs'));
    }

    public function store(Request $request, Post $post){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:student_registrations,email',
            'phone' => 'required',
            'course_name' => 'required',
            'course_medium' => 'required',
            'course_mode' => 'required',
            'address' => 'required',
        ]);

        $registrations = new StudentRegistration();
        $registrations->fill($validated)->save();
        return redirect()->back()->with('status', 'Your Form has been sent successfully...');
    }

    public function show(){
        $registrations = StudentRegistration::paginate(15);
        return view('registration.index', compact('registrations'));
    }

    public function edit(StudentRegistration $registration){
        $courses = Course::all();
        return view('registration.edit', compact('registration', 'courses'));
    }

    public function update(Request $request, StudentRegistration $registration){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'course_name' => 'required',
            'course_medium' => 'required',
            'course_mode' => 'required',
            'address' => 'required',
        ]);

        $registration->fill($validated)->save();
        return redirect()->route('registeredStudent')->with('status', 'Record has been updated successfully...');
    }

    public function destroy(StudentRegistration $registration){
        $registration->delete();
        return redirect()->back()->with('status', 'Record has been deleted successfully');
    }

}
