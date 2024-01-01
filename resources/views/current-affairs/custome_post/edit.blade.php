@php($title = ucwords($type))
@extends('layouts.dashboard')
@section("style")
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
@endsection
@section('content')
    {{--    <div class="container">--}}
    <div class="card my-4">
        <div class="card-header">
            <h5 class="card-title">Edit {{ucwords($type)}}
                <a href="{{route("edit-affairs",[$type,$post->id,$hiEn=="en"?"hi":"en"])}}"
                   class="btn btn-sm btn-ex-blue">{{$hiEn=="en"?"Hindi":"English"}}</a>
            </h5>
        </div>
        <div class="card-body">
            <form action="{{route('edit-post',[$post->id,$hiEn=="en"?"en":"hi"])}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="row my-2">
                    <div class="col-md-8">
                        <div class="row border rounded p-2 m-2 me-0" style="   ">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="{{$hiEn}}.title" class="form-label">Title <span
                                            class="text-muted">{{$hiEn}}</span></label>
                                    <input class="form-control" type="text" id="{{$hiEn}}.title" name="{{$hiEn}}[title]"
                                           value="{{old($hiEn.'.title', $post?->translate($hiEn)?$post?->translate($hiEn)->title:'')}}">
                                </div>

                                <div class="mb-3">
                                    <label for="{{$hiEn}}.description" class="form-label">Description <span
                                            class="text-muted">{{$hiEn}}</span></label>
                                    <textarea class="form-control myTinyEditor" type="text" id="{{$hiEn}}.description"
                                              name="{{$hiEn}}[description]"
                                              rows="8">{{old($hiEn.'.description', $post?->translate($hiEn)?$post?->translate($hiEn)->description:'')}}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="{{$hiEn}}.excerpt" class="form-label">Excerpt {{$hiEn}}</label>
                                    <textarea class="form-control" type="text" id="{{$hiEn}}.excerpt"
                                              name="{{$hiEn}}[excerpt]"
                                              rows="5">{{old($hiEn.'.excerpt',$post->seofield?->translate($hiEn)?$post->seofield?->translate($hiEn)->excerpt:'')}}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row border rounded p-2 m-2 ms-0" style="min-height:560px;">

                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input class="form-control" type="text" id="slug"
                                       name="slug" value="{{old('slug', $post->slug)}}">
                            </div>

                            <div class="mb-3">
                                <label for="keywords"
                                       class="form-label">Keywords<span>Separate with commas*</span></label>
                                <input class="form-control" type="text" id="keywords" name="keywords"
                                       value="{{old('keywords', $post->seofield?->keywords)}}">
                            </div>
                            @if($type == "daily-current-affairs")
                                <div class="mb-3">
                                    <label for="status" class="form-label">Category</label>
                                    <select class="form-select select-multiple" data-placeholder="Select Category" name="categories[]" multiple>
                                        @foreach($categories as $categorie)
                                            <option value="{{$categorie->id}}" @selected(in_array($categorie->id, $selected_category_ids))>{{$categorie->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="status" class="form-label">Active/Inactive</label>
                                <select class="form-control" name="status">
                                    <option value="active"
                                            @selected(old("status",$post->status) == "active") selected>
                                        Active
                                    </option>
                                    <option value="inactive" @selected(old("status",$post->status) == "inactive")>
                                        Inactive
                                    </option>
                                </select>
                            </div>

                            <div class="mb-3">

                                <label for="image" class="form-label mb-0 d-block">Image</label>
                                <img
                                    src="{{$post?->translate($hiEn)?asset('storage/media/'.$post?->translate($hiEn)->image):''}}"
                                    alt="Image"
                                    class="cus-img-op img-thumbnail mx-auto mb-2" style="height:200px;width:100%;">
                                <input class="form-control cus-img" type="file" id="image" name="image"
                                       value="{{old('image', $post?->translate($hiEn)?$post?->translate($hiEn)->image:"")}}">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="post_type" value="{{"child-of-".$type}}">

                <button type="submit" class="btn btn-sm btn-ex-blue">Update</button>
                <a href="{{route('affairs',$type)}}" class="btn btn-sm btn-warning px-3">Cancel</a>
            </form>
        </div>
    </div>
    {{--    </div>--}}
@endsection
