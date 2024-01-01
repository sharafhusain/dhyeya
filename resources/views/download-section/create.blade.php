@php($title = 'Download Section New Post')
@extends('layouts.dashboard')
@section("style")
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
@endsection
@section('content')
    {{--    <div class="container">--}}
    <div class="card my-4">
        <div class="card-header">
            <h5 class="card-title">Create New Post
                <a href="{{route("create-post",[$parent_category->id,$sub_category->id,$hiEn=="en"?"hi":"en"])}}"
                   class="btn btn-sm btn-ex-blue">{{$hiEn=="en"?"Hindi":"English"}}</a>
            </h5>
        </div>
        <div class="card-body">
            <form action="{{route('create-downloads',[$parent_category->id,$sub_category->id,$hiEn=="en"?"en":"hi"])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row my-2">
                    <div class="col-md-8">
                        <div class="row border rounded p-2 m-2 me-0" style="min-height:560px;">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="{{$hiEn}}.title" class="form-label">Title <span
                                            class="text-muted">{{$hiEn}}</span></label>
                                    <input class="form-control" type="text" id="{{$hiEn}}.title" name="{{$hiEn}}[title]"
                                           value="{{old($hiEn.'.title')}}">
                                </div>

                                <div class="mb-3">
                                    <label for="{{$hiEn}}.description" class="form-label">Description <span
                                            class="text-muted">{{$hiEn}}</span></label>
                                    <textarea class="form-control myTinyEditor" type="text" id="{{$hiEn}}.description"
                                              name="{{$hiEn}}[description]">{{old($hiEn.'.description')}}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="excerpt" class="form-label">Excerpt {{$hiEn}}</label>
                                    <textarea class="form-control" type="text" id="{{$hiEn}}.excerpt"
                                              name="{{$hiEn}}[excerpt]" rows="5">{{old($hiEn.'.excerpt')}}</textarea>
                                </div>
                            </div>
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
                                <input class="form-control cus-img" type="text" id="attachment_title" name="attachment_title">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label ms-3">Attachment Type</label>
                                <select class="form-control" name="type">
                                    <option value="">Select Attachment Type</option>
                                    <option value="pdf" @selected(old("type") == "pdf")>PDF</option>
                                    <option value="zip" @selected(old("type") == "zip")>Zip</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input class="form-control" type="text" id="slug"
                                       name="slug" value="{{old('slug')}}">
                            </div>

                            <div class="mb-3">
                                <label for="keywords"
                                       class="form-label">Keywords<span>Separate with commas*</span></label>
                                <input class="form-control" type="text" id="keywords" name="keywords"
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Active/Inactive</label>
                                <select class="form-select" name="status" id="status">
                                    <option value="active" @selected(old("status")) selected>Active</option>
                                    <option value="inactive" @selected(old("status"))>Inactive</option>
                                </select>
                            </div>

                                <input class="form-control" type="hidden" name="categories"
                                       value="{{old('categories',$sub_category->id)}}">



                            <div class="mb-3">
                                <label for="image" class="form-label mb-0 d-block">Image</label>
                                <img src="{{ asset('img/placeholder.png')}}" alt="Image"
                                     class="cus-img-op img-thumbnail mx-auto mb-2" style="height:200px;width:100%;">
                                <input class="form-control cus-img" type="file" id="image" name="image"
                                       value="{{old('image')}}">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <button type="submit" class="btn btn-sm btn-ex-blue">Create</button>
                    <a href="{{route('view-downloads',[$parent_category->id,$sub_category->id])}}" class="btn btn-sm btn-warning px-3">Cancel</a>
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
                        let html = "<option>Select Category</option>"
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




