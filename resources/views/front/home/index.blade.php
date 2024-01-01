@extends('layouts.front')
@section('content_ui')

    {{--Slider Section--}}
    <section class="mb-4" id="slider">
        @include('front.home.includes.slider')
    </section>

    <div class="position-relative p-3">
        {{--Switch language Section--}}
            <div class="container bg-white rounded py-3">
                <div class="mb-5 text-center">
                    <h1 class="text-primary" style="font-size: 3rem">{{ __('front.welcome_to_dhyeya_ias') }}</h1>
                </div>

                <div class="row g-5">
                    <div class="col-sm-6 border-end">
                        <div class="d-flex flex-column align-items-center h-100 justify-content-between">
                            <img src="{{asset('img/en_Logo.png')}}" alt="logo_en" class="img-fluid img-4 my-2"
                                 style="width:270px">
                            <a href="{{route('front-home', ['locale' => 'en'])}}" class="btn btn-ex-blue text-uppercase my-2">
                                {{ __('front.visit_english_website') }}</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex flex-column align-items-center h-100 justify-content-between">
                            <img src="{{asset('img/hi_Logo.png')}}" alt="logo_en" class="img-fluid img-4 my-2">
                            <a href="{{route('front-home', ['locale' => 'hi'])}}" class="btn btn-ex-blue text-uppercase my-2">
                                {{ __('front.visit_hindi_website') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        {{--Switch language Section--}}
    </div>

    {{--App Download now--}}
    <div class="py-3 my-3 text-center">
        <div class="d-flex align-items-center justify-content-center flex-column mx-2">
            <i class="fa-brands fa-android mx-2 shake-20n" style="color: #0da061;font-size:100px"></i>
            <div class="">
                <h1 class="mb-0">{{ __('homepage.download_our_android_app') }}</h1>
                <p class="mb-0 text-body-tertiary">{{ __('homepage.get_full_access') }}</p>
            </div>
        </div>
        <a href="{{ $social_media_links->app_link }}" class="btn btn-ex-blue mt-2" target="_blank">{{ __('homepage.download_now') }}</a>
    </div>
    {{--App Download now--}}

    {{--Achievers Section--}}
    <section class="my-5" id="achiever">
        @include('front.home.includes.achiever')
    </section>

    {{--Courses Section--}}
    <section class="my-5" id="course">
        @include('front.home.includes.course')
    </section>

    {{--Notifications Section--}}
    <section class="my-5" id="notification">
        @include('front.home.includes.notiication')
    </section>

    {{--Batch Details Section--}}
    <section class="my-5" id="batch-detail">
        @include('front.home.includes.batch-detail')
    </section>

    {{--Test Series Sections--}}
    <section class="my-5" id="test-series">
        @include('front.home.includes.test-series')
    </section>

    {{--Current Affaris Seection--}}
    <section class="my-5" id="current-affair">
        @include('front.home.includes.current-affair')
    </section>

    {{--Centers Section--}}
    <section class="my-5" id="center">
        @include('front.home.includes.center')
    </section>

    {{--Student Zone Section--}}
    <section class="my-5" id="student-zone">
        @include('front.home.includes.student-zone')
    </section>

    {{--Dhyeya TV Section--}}
    <section class="my-5" id="dhyeya-tv">
        @include('front.home.includes.dhyeya-tv')
    </section>

    {{--Dhyeya Store Section--}}
    <section class="my-5" id="dhyeya-store">
        @include('front.home.includes.dhyeya-store')
    </section>

    {{--Teams Section--}}
    <section class="my-5" id="team">
        @include('front.home.includes.team')
    </section>

    {{--Toppers Section--}}
    <section class="my-5" id="topper">
        @include('front.home.includes.topper')
    </section>

    {{--Blogs Section--}}
    <section class="my-5" id="blog">
        @include('front.home.includes.blog')
    </section>

    {{--Newsletter Section--}}
    <section class="mt-5 bg-newsletter pb-5" id="newsletter">
        @include('front.home.includes.newsletter')
    </section>
@endsection
