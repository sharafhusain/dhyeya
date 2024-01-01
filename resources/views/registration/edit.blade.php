@php($title = 'Edit Registered Students')
@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex gap-3">
                <h5>Edit Registered Student's</h5>
            </div>
            <div class="card-body">
                <form action="{{route('edit-registeredStudent', $registration->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input class="form-control" type="name" id="name" name="name"
                                       value="{{old('name', $registration->name)}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" type="email" id="email" name="email"
                                       value="{{old('email', $registration->email)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input class="form-control" type="text" id="phone" name="phone"
                                       value="{{old('phone', $registration->phone)}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="course_name" class="form-label">Course name</label>
                                <select class="form-select" name="course_name" id="course_name">
                                    <option value="" selected disabled>Choose Course</option>
                                    @foreach($courses as $course)
                                        <option
                                            @selected(old('course_name', $registration->course_name) == $course->post->title) value="{{$course->post->title}}">{{$course->post->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="course_medium" class="form-label">Course Medium</label>
                                <select class="form-select" id="course_medium" name="course_medium">
                                    <option value="" selected disabled>Choose Medium</option>
                                    <option
                                        value="english" @selected(old('course_medium', $registration->course_medium) == 'english')>
                                        English
                                    </option>
                                    <option
                                        value="hindi" @selected(old('course_medium', $registration->course_medium) == 'hindi')>
                                        Hindi
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="course_mode" class="form-label">Course Mode</label>
                                <select class="form-select" id="course_mode" name="course_mode">
                                    <option value="" disabled selected>Choose Mode</option>
                                    <option
                                        value="online" @selected(old('course_mode', $registration->course_mode) == 'online')>
                                        Online
                                    </option>
                                    <option
                                        value="offline" @selected(old('course_mode', $registration->course_mode) == 'offline')>
                                        Offline
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input class="form-control" type="address" id="address" name="address"
                                       value="{{old('address', $registration->address)}}">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-ex-blue">Update</button>
                    <a href="{{route('registeredStudent')}}" class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
