@php($title_front = 'Registration Form')
@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="registration">
        <div class="row">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm my-5">
                    <div class="card-body">
                        <h3 class="card-title fw-600 mb-0">Admission Registration</h3>
                        <p class="card-text text-muted fw-light mb-5 pb-1 sidebar-text-bellow-line">Register your
                            account.</p>

                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-3">
                                        <input class="form-control text-muted py-2 fw-light" name="name" id="name"
                                               type="text" value="{{old('name')}}" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-3">
                                        <input class="form-control text-muted py-2 fw-light" name="email" id="email"
                                               type="email" value="{{old('email')}}" placeholder="Email address">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-3">
                                        <input class="form-control text-muted py-2 fw-light" name="phone" id="phone"
                                               type="tel" value="{{old('phone')}}" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-3">
                                        <select class="form-select text-muted py-2 fw-light" name="course_name"
                                                id="course_name">
                                            <option value="" selected disabled>Choose Course</option>
                                            @foreach($courses as $course)
                                                <option
                                                    @selected(old('course_name') == $course->post->title) value="{{$course->post->title}}">{{$course->post->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-3">
                                        <select class="form-select text-muted py-2 fw-light" name="course_medium"
                                                id="course_medium">
                                            <option value="">Choose Medium</option>
                                            <option value="English">English</option>
                                            <option value="Hindi">Hindi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-3">
                                        <select class="form-select text-muted py-2 fw-light" name="course_mode"
                                                id="course_mode">
                                            <option value="">Choose Mode</option>
                                            <option value="Online">Online</option>
                                            <option value="Offline">Offline</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="my-3">
                                <textarea class="form-control text-muted py-2 fw-light" name="address" id="address"
                                          rows="3" placeholder="Address">{{old('address')}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-ex-blue shadow-sm px-4 py-2 mx-2">Submit</button>
                        </form>

                    </div>
                </div>

                {{--Map--}}
                <div class="row">
                    <div class="col mt-5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d133347.95671690995!2d-2.1166304031292693!3d52.88994339239338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1687873715398!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            {{--Side Bar--}}
            <div class="col-lg-4">
                @include('front.sidebar')
            </div>
        </div>
    </section>





    {{--    <div class="row justify-content-center align-items-center" style="min-height:80vh">--}}
    {{--        <div class="col-lg-5">--}}
    {{--            <div class="card shadow-lg border-0 rounded-lg mt-5 mb-3">--}}
    {{--                <div class="card-title"><h3 class="text-center my-4">Registration cum Admission Form</h3></div>--}}
    {{--                <div class="card-body">--}}
    {{--                    <form method="post" action="{{route('register')}}">--}}
    {{--                        @csrf--}}
    {{--                        <div class="mb-3">--}}
    {{--                            <label for="name">Full Name</label>--}}
    {{--                            <input class="form-control" name="name" id="name" type="text" value="{{old('name')}}">--}}
    {{--                        </div>--}}
    {{--                        <div class="mb-3">--}}
    {{--                            <label for="email">Email address</label>--}}
    {{--                            <input class="form-control" name="email" id="email" type="email" value="{{old('email')}}">--}}
    {{--                        </div>--}}
    {{--                        <div class="mb-3">--}}
    {{--                            <label for="phone">Phone Number</label>--}}
    {{--                            <input class="form-control" name="phone" id="phone" type="number" value="{{old('phone')}}">--}}
    {{--                        </div>--}}
    {{--                        <div class="mb-3">--}}
    {{--                            <label for="course_name">Course Name</label>--}}
    {{--                            <select class="form-select" name="course_name" id="course_name">--}}
    {{--                                <option value="" selected disabled>Choose Course</option>--}}
    {{--                                @foreach($courses as $course)--}}
    {{--                                    <option--}}
    {{--                                        @selected(old('course_name') == $course->post->title) value="{{$course->post->title}}">{{$course->post->title}}</option>--}}
    {{--                                @endforeach--}}
    {{--                            </select>--}}
    {{--                            --}}{{--                            <input class="form-control" name="course_name" id="course_name" type="number" value="{{old('course_name')}}">--}}
    {{--                        </div>--}}
    {{--                        <div class="mb-3">--}}
    {{--                            <label for="course_medium">Course Medium</label>--}}
    {{--                            <select class="form-select" name="course_medium" id="course_medium">--}}
    {{--                                <option value="">Choose Medium</option>--}}
    {{--                                <option value="English">English</option>--}}
    {{--                                <option value="Hindi">Hindi</option>--}}
    {{--                            </select>--}}
    {{--                        </div>--}}
    {{--                        <div class="mb-3">--}}
    {{--                            <label for="course_mode">Course Mode</label>--}}
    {{--                            <select class="form-select" name="course_mode" id="course_mode">--}}
    {{--                                <option value="">Choose Mode</option>--}}
    {{--                                <option value="Online">Online</option>--}}
    {{--                                <option value="Offline">Offline</option>--}}
    {{--                            </select>--}}
    {{--                        </div>--}}
    {{--                        <div class="mb-3">--}}
    {{--                            <label for="name">Full Address</label>--}}
    {{--                            <textarea class="form-control" name="address" id="address" type="text" rows="3">{{old('address')}}</textarea>--}}
    {{--                        </div>--}}
    {{--                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">--}}
    {{--                            <button type="submit" class="btn btn-ex-blue btn-sm">Register</button>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
