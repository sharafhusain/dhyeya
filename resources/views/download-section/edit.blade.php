@php($title = 'Edit Post')
@extends('layouts.dashboard')
@section("style")
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
@endsection
@section('content')
    {{--    <div class="container">--}}
    <div class="card my-4">
        <div class="card-header">
            <h5 class="card-title">Edit Post
                <a href="{{route("edit-downloads",[$post->id,$hiEn=="en"?"hi":"en"])}}"
                   class="btn btn-sm btn-ex-blue">{{$hiEn=="en"?"Hindi":"English"}}</a>
            </h5>
        </div>
        <div class="card-body">
            <form action="{{route('edit-downloads',[$post->id,$hiEn=="en"?"en":"hi"])}}" method="post"
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
                                           value="{{old($hiEn.'.title', $post->translate($hiEn)?$post->translate($hiEn)->title:'')}}">
                                </div>

                                <div class="mb-3">
                                    <label for="{{$hiEn}}.description" class="form-label">Description <span
                                            class="text-muted">{{$hiEn}}</span></label>
                                    <textarea class="form-control myTinyEditor" type="text" id="{{$hiEn}}.description"
                                              name="{{$hiEn}}[description]"
                                              rows="8">{{old($hiEn.'.description', $post->translate($hiEn)?$post->translate($hiEn)->description:'')}}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="{{$hiEn}}.excerpt" class="form-label">Excerpt {{$hiEn}}</label>
                                    <textarea class="form-control" type="text" id="{{$hiEn}}.excerpt"
                                              name="{{$hiEn}}[excerpt]"
                                              rows="5">{{old($hiEn.'.excerpt',$post->seofield->translate($hiEn)?$post->seofield->translate($hiEn)->excerpt:'')}}</textarea>
                                </div>
                            </div>

                            {{--                                <div class="col-md-6">--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label for="hi.title" class="form-label">Title (hi)</label>--}}
                            {{--                                        <input class="form-control" type="text" id="hi.title" name="hi[title]"--}}
                            {{--                                               value="{{old('hi.title', $post->translate("hi")->title)}}">--}}
                            {{--                                    </div>--}}

                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label for="hi.description" class="form-label">Description (hi)</label>--}}
                            {{--                                        <textarea class="form-control" type="text" id="hi.description"--}}
                            {{--                                                  name="hi[description]"--}}
                            {{--                                                  rows="8">{{old('hi.description',$post->translate("hi")->description)}}</textarea>--}}
                            {{--                                    </div>--}}


                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label for="excerpt" class="form-label">Excerpt (hi)</label>--}}
                            {{--                                        <textarea class="form-control" type="text" id="hi.excerpt"--}}
                            {{--                                                  name="hi[excerpt]"--}}
                            {{--                                                  rows="5">{{old('hi.excerpt',$post->seofield->translate("hi")->excerpt)}}</textarea>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row border rounded p-2 m-2 ms-0" style="min-height:560px;">

                            <div class="mb-3">
                                <label for="filename" class="form-label ms-3">Attachment</label>
                                <input class="form-control cus-img" type="file" id="filename" name="filename"
                                       value="{{old('filename')}}">
                            </div>
                            <div class="mb-3">
                                <label for="attachment_title" class="form-label ms-3">Attachment Title</label>
                                <input class="form-control cus-img" type="text" id="attachment_title" value="{{old("attachment_title", $attachment?->title)}}" name="attachment_title">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label ms-3">Attachment Type</label>
                                <select class="form-control" name="type">
                                    <option value="">Select Attachment Type</option>
                                    <option value="pdf" @selected(old("type", $attachment?->type) == "pdf")>PDF</option>
                                    <option value="zip" @selected(old("type", $attachment?->type) == "zip")>Zip</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input class="form-control" type="text" id="slug"
                                       name="slug" value="{{old('slug', $post->slug)}}">
                            </div>

                            <div class="mb-3">
                                <label for="keywords"
                                       class="form-label">Keywords<span>Separate with commas*</span></label>
                                <input class="form-control" type="text" id="keywords" name="keywords"
                                       value="{{old('keywords', $post->seofield->keywords)}}">
                            </div>

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
                                <label for="status" class="form-label">Select Page</label>
                                <select class="form-select" name="categoriespage" id="categoriespage">
                                    @foreach($categories as $categorie)
                                        <option value="{{$categorie->id}}">{{$categorie->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Category</label>
                                <select class="form-select" name="categories" id="categories">
                                        <option value="{{$selected_category->id}}">{{$selected_category->category_name}}</option>
                                </select>
                            </div>
                            <input type="hidden" name="post_type" value="post">
                            <div class="mb-3">
                                <label for="image" class="form-label mb-0 d-block">Image</label>
                                <img
                                    src="{{$post->translate($hiEn)?asset('storage/media/'.$post->translate($hiEn)->image):''}}"
                                    alt="Image"
                                    class="cus-img-op img-thumbnail mx-auto mb-2" style="height:200px;width:100%;">
                                <input class="form-control cus-img" type="file" id="image" name="image"
                                       value="{{old('image', $post->translate($hiEn)?$post->translate($hiEn)->image:"")}}">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-sm btn-ex-blue">Update</button>
                <a href="{{route('view-downloads',[$post->catagories->first()->parent->id,$post->catagories->first()->id])}}" class="btn btn-sm btn-warning px-3">Cancel</a>
            </form>
        </div>
    </div>
    {{--    </div>--}}
@endsection
@section('script')
    <script>
        $(document).ready(function () {

            $("#categoriespage").on("change", function () {
                let parent_category = $(this).val()
                let url = '{{route("get_category_childrens",":categoryid")}}';
                let new_url = url.replace(":categoryid", parent_category)


                $.ajax({
                    url: new_url,

                    success: function (result) {
                        let html = ""
                        console.log(result)
                        for (r in result){
                            html += `<option value="${result[r]['id']}">${result[r]['category_name']}</option>`
                        }
                        $("#categories").html(html)
                    }
                });
            })
        })

    </script>

@endsection
