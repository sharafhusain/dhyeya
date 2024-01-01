@php($title_front = __('homepage.courses'))
@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="course">
        <div class="row">
            <div class="col-md-9">
                <div class="container">
                    <h3 class="text-primary pt-2 mt-5">{{ __('course.online_exams') }}</h3>

                    <div class="row justify-content-center my-5">
                        <div class="col-sm-6">
                            <div class="card p-4 text-center border-0 box-shadow-1 my-2">
                                <img class="card-img-top img-1 m-auto" src="{{asset('img/classroom.png')}}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title">{{ __('course.classroom_programme') }}</h6>
                                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{ route('page', 'classroom-programme') }}" role="button">{{ __('course.view_details') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card p-4 text-center border-0 box-shadow-1 my-2">
                                <img class="card-img-top img-1 m-auto" src="{{asset('img/udaan.jpeg')}}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title">{{ __('course.dhyeya_ias_udaan') }}</h6>
                                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{ route('dhyeya-ias-udaan') }}" role="button">{{ __('course.view_details') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card p-4 text-center border-0 box-shadow-1 my-2">
                                <img class="card-img-top img-1 m-auto" src="{{asset('img/pendrive.png')}}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title">{{ __('course.online_pen_drive') }}</h6>
                                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{ route('front-pendrive-course') }}" role="button">{{ __('course.view_details') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card p-4 text-center border-0 box-shadow-1 my-2">
                                <img class="card-img-top img-1 m-auto" src="{{asset('img/distance-learning.png')}}"
                                     alt="image">
                                <div class="card-body">
                                    <h6 class="card-title">{{ __('course.distance_learning') }}</h6>
                                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{ route('page', 'distance-learning-programme') }}" role="button">{{ __('course.view_details') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card p-4 text-center border-0 box-shadow-1 my-2">
                                <img class="card-img-top img-1 m-auto" src="{{asset('img/online-lesson.png')}}"
                                     alt="image">
                                <div class="card-body">
                                    <h6 class="card-title">{{ __('course.online_courses') }}</h6>
                                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{ route('front-online-courses') }}" role="button">{{ __('course.view_details') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card p-4 text-center border-0 box-shadow-1 my-2">
                                <img class="card-img-top img-1 m-auto" src="{{asset('img/books.png')}}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title">{{ __('course.offline_courses') }}</h6>
                                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{ route('front-student-zone-batch') }}" role="button">{{ __('course.view_details') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{--Side Bar--}}
            <div class="col-md-3">
                @include('front.sidebar')
            </div>
        </div>
    </section>
@endsection
