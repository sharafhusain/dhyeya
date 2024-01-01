@php($title = 'Edit Courses')
@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Edit Courses</h5>
            </div>
            <div class="card-body">
                <form action="{{route('edit-courses', $course->id)}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="en.title" class="form-label">Course Name (en)</label>
                                <input class="form-control" type="text" id="en.title" name="en[title]"
                                       value="{{old('en.title', $course->post->translate('en')->title)}}">
                            </div>
                            <div class="mb-3">
                                <label for="en.exam_name" class="form-label">Exam Name (en)</label>
                                <input class="form-control" type="text" id="en.exam_name" name="en[exam_name]"
                                       value="{{old('en.exam_name', $course->translate('en')->exam_name)}}">
                            </div>
                            <div class="mb-3">
                                <label for="en.course_information" class="form-label">Course Information (en)</label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="en.course_information"
                                          name="en[course_information]"
                                          rows="3">{{old('en.course_information', $course->translate('en')->course_information)}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="en.admission_process" class="form-label">Admission Process (en)</label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="en.admission_process"
                                          name="en[admission_process]"
                                          rows="3">{{old('en.admission_process', $course->translate('en')->admission_process)}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="en.technical_requirement" class="form-label">Technical Requirement
                                    (en)</label>
                                <textarea class="form-control mySecondaryEditor" type="text"
                                          id="en.technical_requirement"
                                          name="en[technical_requirement]"
                                          rows="3">{{old('en.technical_requirement', $course->translate('en')->technical_requirement)}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hi.title" class="form-label">Course Name (hi)</label>
                                <input class="form-control" type="text" id="hi.title" name="hi[title]"
                                       value="{{old('hi.title', $course->post->translate('hi')->title)}}">
                            </div>
                            <div class="mb-3">
                                <label for="hi.exam_name" class="form-label">Exam Name (hi)</label>
                                <input class="form-control" type="text" id="hi.exam_name" name="hi[exam_name]"
                                       value="{{old('hi.exam_name', $course->translate('hi')->exam_name)}}">
                            </div>
                            <div class="mb-3">
                                <label for="hi.course_information" class="form-label">Course Information (hi)</label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="hi.course_information"
                                          name="hi[course_information]"
                                          rows="3">{{old('hi.course_information', $course->translate('hi')->course_information)}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="hi.admission_process" class="form-label">Admission Process (hi)</label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="hi.admission_process"
                                          name="hi[admission_process]"
                                          rows="3">{{old('hi.admission_process', $course->translate('hi')->admission_process)}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="hi.technical_requirement" class="form-label">Technical Requirement
                                    (hi)</label>
                                <textarea class="form-control mySecondaryEditor" type="text"
                                          id="hi.technical_requirement"
                                          name="hi[technical_requirement]"
                                          rows="3">{{old('hi.technical_requirement', $course->translate('hi')->technical_requirement)}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="medium" class="form-label">Medium</label>
                                <select class="form-select" id="medium" name="medium">
                                    <option value="" selected disabled>Choose Medium</option>
                                    <option value="English" @selected(old('medium', $course->medium) == 'English')>
                                        English
                                    </option>
                                    <option value="Hindi" @selected(old('medium', $course->medium) == 'Hindi')>Hindi</option>
                                    <option value="English & Hindi" @selected(old('medium', $course->medium) == 'English & Hindi')>English & Hindi</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="mode" class="form-label">Mode</label>
                                <select class="form-select" id="mode" name="mode">
                                    <option value="" disabled selected>Choose Mode</option>
                                    <option value="Online" @selected(old('mode', $course->mode) == 'Online')>Online</option>
                                    <option value="Offline" @selected(old('mode', $course->mode) == 'Offline')>Offline</option>
                                    <option value="Online & Offline" @selected(old('mode', $course->mode) == 'Online & Offline')>Online & Offline</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="course_type" class="form-label">Course Type</label>
                                <select class="form-select" id="course_type" name="course_type">
                                    <option value="" disabled selected>Choose Course Type</option>
                                    <option
                                        value="General Online" @selected(old('course_type', $course->course_type) == 'General Online')>
                                        General Online Course
                                    </option>
                                    <option
                                        value="Optional Online" @selected(old('course_type', $course->course_type) == 'Optional Online')>
                                        Optional Online Course
                                    </option>
                                    <option
                                        value="General Pen Drive" @selected(old('course_type', $course->course_type) == 'General Pen Drive')>
                                        General Pen Drive Course
                                    </option>
                                    <option
                                        value="Optional Pen Drive" @selected(old('course_type', $course->course_type) == 'Optional Pen Drive')>
                                        Optional Pen Drive Course
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="total_fee" class="form-label">Total Fee</label>
                                <input class="form-control" type="text" id="total_fee" name="total_fee"
                                       value="{{old('total_fee', $course->total_fee)}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="installment_duration" class="form-label">Installment Duration</label>
                                <div class="input-group">
                                    <span class="input-group-text">In</span>
                                    <input class="form-control" type="number" id="installment_duration"
                                           name="installment_duration"
                                           value="{{old('installment_duration', $course->installment_duration)}}">
                                    <span class="input-group-text">month</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="installment_duration" class="form-label">Duration</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" id="duration"
                                           name="duration" value="{{old('duration',$course->duration)}}">
                                    <span class="input-group-text duration-span">Month</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="one_time_payment" class="form-label">One Time Payment</label>
                                <input class="form-control" type="text" id="one_time_payment" name="one_time_payment"
                                       value="{{old('one_time_payment', $course->one_time_payment)}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input class="form-control" type="text" id="slug" name="slug" value="{{old('slug', $course->post->slug)}}">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-ex-blue">Update</button>
                    <a href="{{route('courses')}}" class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <script>

        let course_type = document.querySelector("#course_type")
        let duration = document.querySelector(".duration-span")

        function change_duration() {
            if ( course_type.value.includes("Pen")){
                duration.textContent = "Hours"
            }else{
                duration.textContent = "Month"
            }

        }
        change_duration()
        course_type.addEventListener("change", change_duration)
    </script>
@endsection
