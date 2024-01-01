@php($title_front = __('homepage.online_courses'))
@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="online-course">
        <div class="row">
            <div class="col-md-9">
                @if(request()->route()->getName() == 'front-online-courses')
                    <h3>{{ __('course.online_courses_for_exams') }}</h3>
                @else
                    <h3>{{ __('course.pen_drive_courses') }}</h3>
                @endif
                <div class="d-flex flex-column">

                    @if(isset($courses['General Online']))
                        {{--Group 1--}}
                        <div class="mt-5">
                            <div class="text-center bellow-line-parent">
                                <h4 class="mb-0">{{ __('course.general_online_course') }}</h4>
                                <p class="text-muted fw-light bellow-line-center mb-4 d-inline-block">{{ __('course.explore_dhyeya_ias') }}</p>
                            </div>
                            <div class="row g-4">
                                @foreach($courses['General Online'] as $course)
                                    <div class="col-md-4">
                                        <a href="{{ route('single_course',$course->post->slug) }}" class="nav-link">
                                            <div class="card card-body text-center border-0 box-shadow-1 my-2" style="min-height:288px;">
                                                <img class="card-img-top img-1 mx-auto mb-3"
                                                     src="{{asset('img/single-course.png')}}" alt="image">
                                                {{--                                                <div class="card-body">--}}
                                                <h5 class="card-title mb-3">{{ $course["post"]["title"] }}</h5>
                                                <div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.duration') }}</span>
                                                    <span class="text-muted fw-light">{{$course["installment_duration"]}} {{ __('course.months') }}</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.exam') }}</span>
                                                    <span
                                                        class="text-muted fw-light">{{$course["exam_name"]}}</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.medium') }}</span>
                                                    <span class="text-muted fw-light">{{$course["medium"]}}</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.mode') }}</span>
                                                    <span class="text-muted fw-light">{{$course["mode"]}}</span>
                                                </div>
                                                {{--                                                </div>--}}
                                                {{--<div>
                                                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                                                       href="{{ route('single-post') }}" role="button">Read More</a>
                                                </div>--}}
                                            </div>
                                        </a>

                                    </div>
                                @endforeach
                            </div>
                            {{--                            <div class="my-3 text-center">--}}
                            {{--                                <a href="#" class="btn btn-sm btn-ex-blue">Load More</a>--}}
                            {{--                            </div>--}}
                        </div>
                    @endif

                    @if(isset($courses['Optional Online']))
                        {{--Group 2--}}
                        <div class="mt-5">
                            <div class="text-center bellow-line-parent">
                                <h4 class="mb-0">{{ __('course.optional_online_course') }}</h4>
                                <p class="text-muted fw-light bellow-line-center mb-4 d-inline-block">{{ __('course.explore_dhyeya_ias') }}</p>
                            </div>
                            <div class="row g-4">
                                @foreach($courses['Optional Online'] as $course)
                                    <div class="col-md-4">
                                        <a href="{{ route('single_course',$course->post->slug) }}" class="nav-link">
                                            <div class="card card-body text-center border-0 box-shadow-1 my-2" style="min-height:288px;">
                                                <img class="card-img-top img-1 mx-auto mb-3"
                                                     src="{{asset('img/single-course.png')}}" alt="image">
                                                {{--                                                <div class="card-body">--}}
                                                <h5 class="card-title mb-3">{{ $course["post"]["title"] }}</h5>
                                                <div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.duration') }}</span>
                                                    <span class="text-muted fw-light">{{$course["installment_duration"]}} months</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.exam') }}</span>
                                                    <span
                                                        class="text-muted fw-light">{{$course["exam_name"]}}</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.medium') }}</span>
                                                    <span class="text-muted fw-light">{{$course["medium"]}}</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.mode') }}</span>
                                                    <span class="text-muted fw-light">{{$course["mode"]}}</span>
                                                </div>
                                                {{--                                                </div>--}}
                                                {{--<div>
                                                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                                                       href="{{ route('single-post') }}" role="button">Read More</a>
                                                </div>--}}
                                            </div>
                                        </a>

                                    </div>
                                @endforeach
                            </div>
                            {{--<div class="my-3 text-center">
                                <a href="#" class="btn btn-sm btn-ex-blue">Load More</a>
                            </div>--}}
                        </div>
                    @endif

                    @if(isset($courses['General Pen Drive']))
                        <div class="mt-5">
                            <div class="text-center bellow-line-parent">
                                <h4 class="mb-0">{{ __('course.general_pen_drive_course') }}</h4>
                                <p class="text-muted fw-light bellow-line-center mb-4 d-inline-block">{{ __('course.explore_dhyeya_ias') }}</p>
                            </div>
                            <div class="row g-4">
                                @foreach($courses['General Pen Drive'] as $course)
                                    <div class="col-md-4">
                                        <a href="{{ route('single_penDrive_course',$course->post->slug) }}"
                                           class="nav-link">
                                            <div class="card card-body text-center border-0 box-shadow-1 my-2" style="min-height:288px;">
                                                <img class="card-img-top img-1 mx-auto mb-3"
                                                     src="{{asset('img/single-course.png')}}" alt="image">
                                                {{--                                                <div class="card-body">--}}
                                                <h5 class="card-title mb-3">{{ $course["post"]["title"] }}</h5>
                                                <div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.duration') }}</span>
                                                    <span class="text-muted fw-light">{{$course["installment_duration"]}} Hours</span>
                                                </div>
                                                {{--<div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.exam') }}</span>
                                                    <span class="text-muted fw-light">{{$course["exam_name"]}}</span>
                                                </div>--}}
                                                <div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.medium') }}</span>
                                                    <span class="text-muted fw-light">{{$course["medium"]}}</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.mode') }}</span>
                                                    <span class="text-muted fw-light">{{$course["mode"]}}</span>
                                                </div>
                                                {{--                                                </div>--}}
                                                {{--<div>
                                                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                                                       href="{{ route('single-post') }}" role="button">Read More</a>
                                                </div>--}}
                                            </div>
                                        </a>

                                    </div>
                                @endforeach
                            </div>
                            {{--<div class="my-3 text-center">
                                <a href="#" class="btn btn-sm btn-ex-blue">Load More</a>
                            </div>--}}
                        </div>
                    @endif
                    @if(isset($courses['Optional Pen Drive']))
                        {{--Group 2--}}
                        <div class="mt-5">
                            <div class="text-center bellow-line-parent">
                                <h4 class="mb-0">{{ __('course.optional_pen_drive_course') }}</h4>
                                <p class="text-muted fw-light bellow-line-center mb-4 d-inline-block">{{ __('course.explore_dhyeya_ias') }}</p>
                            </div>
                            <div class="row g-4">
                                @foreach($courses['Optional Pen Drive'] as $course)
                                    <div class="col-md-4">
                                        <a href="{{ route('single_penDrive_course',$course->post->slug) }}"
                                           class="nav-link">
                                            <div class="card card-body text-center border-0 box-shadow-1 my-2" style="min-height:288px;">
                                                <img class="card-img-top img-1 mx-auto mb-3"
                                                     src="{{asset('img/single-course.png')}}" alt="image">
                                                {{--                                                <div class="card-body">--}}
                                                <h5 class="card-title mb-3">{{ $course["post"]["title"] }}</h5>
                                                <div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.duration') }}</span>
                                                    <span class="text-muted fw-light">{{$course["installment_duration"]}} Hours</span>
                                                </div>
                                                {{--<div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.exam') }}</span>
                                                    <span class="text-muted fw-light">{{$course["exam_name"]}}</span>
                                                </div>--}}
                                                <div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.medium') }}</span>
                                                    <span class="text-muted fw-light">{{$course["medium"]}}</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="me-1">{{ __('course.mode') }}</span>
                                                    <span class="text-muted fw-light">{{$course["mode"]}}</span>
                                                </div>
                                                {{--                                                </div>--}}
                                                {{--<div>
                                                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                                                       href="{{ route('single-post') }}" role="button">Read More</a>
                                                </div>--}}
                                            </div>
                                        </a>

                                    </div>
                                @endforeach
                            </div>
                            {{--<div class="my-3 text-center">
                                <a href="#" class="btn btn-sm btn-ex-blue">Load More</a>
                            </div>--}}
                        </div>
                    @endif
                    {{--                    <div class="my-3">{{$courses->links()}}</div>--}}
                </div>
            </div>

            {{--Side Bar--}}
            <div class="col-md-3">
                @include('front.sidebar')
            </div>
        </div>
    </section>
@endsection
