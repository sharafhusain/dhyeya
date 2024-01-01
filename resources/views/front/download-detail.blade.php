{{--@php($title_front = $parent_categroy?->category_name)--}}
@extends('layouts.front')
@section('content_ui')

    <section class="my-4" id="download-detail">
        <div class="row">
            <div class="col-md-9">
                <div class="d-flex flex-column">
                    {{--Group 1--}}
                    <h4 class="mb-0 mt-5">{{$parent_categroy?->category_name}}</h4>
                    <p class="text-muted fw-light sidebar-text-bellow-line mb-4">{{$parent_categroy->description}}</p>

                    @foreach($parent_categroy->children as $categroy)
                        <div class="row">
                            <div class="col">
                                <div class="card border-0 shadow-sm mb-3 mt-5">
                                    <div class="position-relative">
                                        <div
                                            class="text-bg-primary position-absolute p-1 px-4 mx-2 rounded-1 arrow-down"
                                            style="top:-20px;">
                                            {{$categroy->category_name}}
                                        </div>
                                    </div>
                                    <div class="card-body pt-4 overflow-y-scroll" style="max-height:400px">
                                        <ul>
                                            @foreach($categroy->post as $post)
                                                <li><a href="{{route("donload-section-single-page",[$parent_categroy->category_slug,$post->slug])}}"
                                                       class="nav-link bold-hover">{{$post->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
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
