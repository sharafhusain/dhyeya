@php($title_front = $title_front??$parent_categroy->category_name)
@extends('layouts.front')
@section('content_ui')

    <section class="my-4" id="download-detail">
        <div class="row">
            <div class="col-md-9">
                <div class="d-flex flex-column">
                    <div class="p-2 py-3">{{ $posts?->links() }}</div>
                    @if(in_array(\request()->route()->action["as"],["papers", "papers-archive"]))
                        <div class="d-flex flex-wrap flex-wrap justify-content-center">
                            @foreach($categories as $category)
                                    @continue($category->category_slug == "papers")
                                <a href="{{route("papers",$category->category_slug)}}" class="btn btn-ex-blue-outline btn-sm m-2">{{$category->category_name}}</a>
                            @endforeach
                        </div>
                    @endif
                    <div class="row g-4">
                        @if($posts)
                            @foreach($posts as $post)
                                <div class="col-md-4">
{{--                                    <a href="{{route("single-download-post",$post->slug)}}"--}}
                                    <a
                                        @if(str_contains($parent_categroy->category_slug,"paper"))
                                        href="{{route("donload-section-single-page",[$post->catagories()->first()->category_slug,$post->slug])}}"
                                        @else
                                        href="{{route("magazine-section-single-page",[$parent_categroy->category_slug,$post->slug])}}"
                                        @endif
                                       class="nav-link bold-hover h-100">
                                        <div class="card border-0 box-shadow-1 h-100">
                                            @if($post->image)
                                                <img src="{{asset("storage/media/".$post->image)}}"
                                                     class="card-img-top img-fluid" alt="image">
                                            @else
                                                <img src="{{asset("img/institute.png")}}"
                                                     class="card-img-top img-fluid" alt="image">
                                            @endif
                                            <div class="card-body"
                                                 title="{{$post->title}}">{{str($post->title)->limit(100)}}</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="p-2 py-3">{{ $posts?->links() }}</div>
                </div>

            </div>
            {{--Side Bar--}}
            <div class="col-md-3">
                @include('front.sidebar')
            </div>
        </div>
    </section>
@endsection
