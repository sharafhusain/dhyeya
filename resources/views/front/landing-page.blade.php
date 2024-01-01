@extends('layouts.front')
@section('content_ui')

    <div class="position-relative vh-100">
        <div class="owl-carousel slider-carousel owl-theme position-relative">
            @foreach($slider as $slide)
                <div class="item">
                    <img src="{{asset('storage/media/'.$slide->image)}}" class="d-block w-100" alt="slider">
                </div>
            @endforeach
        </div>
        {{--Switch language Section--}}
        <div
            class="d-flex align-items-center justify-content-center flex-column bg-dark bg-opacity-50 position-absolute start-0 top-0 w-100 px-3"
            style="height:95%;z-index:1">
            <div class="container bg-light rounded py-3">
                <div class="mb-5 text-center">
                    <h1 class="text-primary" style="font-size: 3rem">{{ __('front.welcome_to_dhyeya_ias') }}</h1>
                </div>

                <div class="row mb-5">
                    <div class="col-sm-6">
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

    {{--Notifications Section--}}
    <section class="my-5" id="notification">
        @include('front.home.includes.notiication')
    </section>

    {{--Batch Details Section--}}
    <section class="my-5" id="batch-detail">
        @include('front.home.includes.batch-detail')
    </section>

    {{--Current Affaris Seection--}}
    <section class="my-5" id="current-affair">
        @include('front.home.includes.current-affair')
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
