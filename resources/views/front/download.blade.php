@php($title_front = __('nav.downloads'))
@extends('layouts.front')
@section('content_ui')
    {{--    <h2 class="mt-4">Dhyeya IAS <span class="text-secondary">Downloads</span></h2>--}}
    {{--    <p>Home / Downloads</p>--}}

    <section class="my-4" id="download">
        <div class="row">
            <div class="col-md-9">

                <div class="d-flex flex-column">
                    {{--                    <div class="card my-4 border-0 shadow-sm">--}}
                    {{--                        <div class="row g-0">--}}
                    {{--                            <div class="col-md-4">--}}
                    {{--                                <img src="{{asset('img/placeholder.png')}}" class="img-fluid" alt="image"--}}
                    {{--                                     style="height:100%">--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-md-8">--}}
                    {{--                                <div class="card-body">--}}
                    {{--                                    <p class="card-text">--}}
                    {{--                                        <small class="text-secondary fw-bold">National Current Affairs</small> /--}}
                    {{--                                        <small class="text-muted">Updated 3 mins ago</small>--}}
                    {{--                                    </p>--}}
                    {{--                                    <h4 class="card-title fw-600 mb-3">37th National Games’ mascot ‘Moga’ unveiled</h4>--}}
                    {{--                                    <p class="card-text text-muted mb-3">Chief Minister Pramod Sawant officially--}}
                    {{--                                        unveiled the--}}
                    {{--                                        eagerly-awaited mascot for the 37th National Games, aptly named ‘Moga,’ during a--}}
                    {{--                                        ceremony held at Dr. Shyama Prasad Mukherjee Stadium, Taleigao.</p>--}}
                    {{--                                    <a href="{{ route('single-post') }}" class="btn btn-primary">View All</a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--Group 1--}}
                    @foreach($download_primary_category as $category)
                    <div class="mt-5">
                        <h4 class="mb-0">{{$category->category_name}}</h4>
                        <p class="text-muted fw-light sidebar-text-bellow-line mb-4">{{ __('front.explore_more_dhyeya') }}</p>
                        <div class="row g-4">
                            @foreach($category->children()->limit(3)->get() as $category_child)

                            <div class="col-md-12">
                                    <div class="card h-100 border-0 shadow-sm rounded-0">
{{--                                        <img src="{{asset('img/placeholder.png')}}" class="img-fluid" alt="image" style="height:200px;">--}}
                                        <div class="card-body">
                                            <h5 class="card-title">{{$category_child->category_name}}</h5>
{{--                                            <p class="text-muted fs-75">{{$category_child->description}}</p>--}}
                                            <hr>
                                            <ul>
                                            @foreach($category_child->post()->limit(3)->get() as $post)
                                                <li><a href="{{route("single-download-post",$post->slug)}}" class="text-primary nav-link bold-hover p-1 w-responsive">{{$post->title}}</a></li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                            </div>

                            @endforeach
                        </div>
                        <div class="my-3 text-center">
                            <a href="{{ route('download-detail', $category->category_slug) }}" class="btn btn-sm btn-ex-blue">View All</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{--Side Bar--}}
            <div class="col-md-3">
                @include('front.sidebar')
            </div>
        </div>
    </section>
@endsection
