@php($title = 'Edit Exam')
@extends('layouts.dashboard')
@section("style")
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
@endsection
@section('content')
    {{--    <div class="container">--}}
    <div class="card my-4">
        <div class="card-header">
            <h5 class="card-title">Edit Exam
                <a href="{{route("edit-exam",[$exam->id,$hiEn=="en"?"hi":"en"])}}"
                   class="btn btn-sm btn-ex-blue">{{$hiEn=="en"?"Hindi":"English"}}</a>
            </h5>
        </div>
        <div class="card-body">
            <form action="{{route('edit-exam',[$exam->id, $hiEn=="en"?"en":"hi"])}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        {{--                            <div class="row border rounded p-2 m-2 me-0" style="min-height:560px;">--}}
                        {{--                                <div class="col-md-6">--}}
                        <div class="mb-3">
                            <label for="{{$hiEn}}.title" class="form-label">Title <span
                                    class="text-muted">({{$hiEn}})</span></label>
                            <input class="form-control" type="text" id="{{$hiEn}}.title" name="{{$hiEn}}[title]"
                                   value="{{old('en.title', $exam?->translate("$hiEn")?->title)}}">
                        </div>

                        <div class="mb-3">
                            <label for="{{$hiEn}}.description" class="form-label">Description <span class="text-muted">({{$hiEn}})</span></label>
                            <textarea class="form-control myTinyEditor" type="text" id="{{$hiEn}}.description"
                                      name="{{$hiEn}}[description]"
                                      rows="8">{{old('en.description', $exam?->translate("$hiEn")?->description)}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="{{$hiEn}}.excerpt" class="form-label">Excerpt <span class="text-muted">({{$hiEn}})</span></label>
                            <textarea class="form-control" type="text" id="{{$hiEn}}.excerpt" name="{{$hiEn}}[excerpt]"
                                      rows="5">{{old($hiEn.'.excerpt',$exam?->seofield?->translate($hiEn)?->excerpt)}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="{{$hiEn}}.filename" class="form-label">Attachment <span class="text-muted">({{$hiEn}})</span></label>
                            <input class="form-control cus-img" type="file" id="{{$hiEn}}.filename" name="{{$hiEn}}[filename]"
                                   value="{{old($hiEn.'filename')}}" accept="application/pdf">
                        </div>
                        {{--                                </div>--}}

                        {{--<div class="col-md-6">
                            <div class="mb-3">
                                <label for="hi.title" class="form-label">Title (hi)</label>
                                <input class="form-control" type="text" id="hi.title" name="hi[title]"
                                       value="{{old('hi.title', $exam->translate("hi")->title)}}">
                            </div>

                            <div class="mb-3">
                                <label for="hi.description" class="form-label">Description (hi)</label>
                                <textarea class="form-control myTinyEditor" type="text" id="hi.description" name="hi[description]"
                                          rows="8">{{old('hi.description',$exam->translate("hi")->description)}}</textarea>
                            </div>


                            <div class="mb-3">
                                <label for="excerpt" class="form-label">Excerpt (hi)</label>
                                <textarea class="form-control" type="text" id="hi.excerpt" name="hi[excerpt]"
                                          rows="5">{{old('hi.excerpt',$exam->seofield->translate("hi")->excerpt)}}</textarea>
                            </div>
                        </div>--}}
                        {{--                            </div>--}}
                    </div>
                    <div class="col-md-4">
                        <div class="row border rounded p-2 m-2 ms-0" style="min-height:560px;">
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug (en)</label>
                                <input class="form-control" type="text" id="slug"
                                       name="slug"
                                       value="{{old('slug', $exam->slug)}}">
                            </div>

                            <div class="mb-3">
                                <label for="keywords"
                                       class="form-label">Keywords<span>Separate with commas*</span></label>
                                <input class="form-control" type="text" id="keywords" name="keywords"
                                       value="{{old('keywords', $exam->seofield->keywords)}}">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Select Exam Category</label>
                                <select class="form-select select-multiple" data-placeholder="Select Exam Category"
                                        name="category_ids[]" multiple>
                                    <option value="active" ) selected disabled>Select Exam Category</option>
                                    @foreach($categories as $categorie)
                                        <option
                                            value="{{$categorie->id}}" @selected(in_array($categorie->id, $selected_category_ids))>{{$categorie->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Active/Inactive</label>
                                <select class="form-select" name="status">
                                    <option value="active" @selected(old("status",$exam->status) == "active") selected>
                                        Active
                                    </option>
                                    <option value="inactive" @selected(old("status",$exam->status) == "inactive")>
                                        Inactive
                                    </option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label ms-3">Image <span>(Optional)</span></label>
                                <input class="form-control cus-img" type="file" id="image" name="image"
                                       value="{{old('image', $exam->image)}}">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Select Important Posts links</label>
                                <select class="form-select select-multiple" data-placeholder="Select Post"
                                        name="post_links[]" multiple>
                                    {{--                                        <option value="active" selected disabled>Select Post</option>--}}
                                    @foreach($postlinks as $postlink)
                                        <option
                                            value="{{$postlink->id}}" @selected(in_array($postlink->id, $selected_post_ids)) >{{$postlink->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{----------------------------------------------------------}}
                            <div class="mb-3">
                                <label for="status" class="form-label">Select Important Category links</label>
                                <select class="form-select select-multiple" data-placeholder="Select Exam Category"
                                        name="category_links[]" multiple>
                                    {{--                                        <option value="active" selected disabled>Select Exam Category</option>--}}
                                    @foreach($categories as $categorie)
                                        <option
                                            value="{{$categorie->id}}" @selected(in_array($categorie->id, $selected_category_links))>{{$categorie->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{----------------------------------------------------------}}

                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-sm btn-ex-blue">Update</button>
                <a href="{{route('exam')}}" class="btn btn-sm btn-warning px-3">Cancel</a>
            </form>
        </div>
    </div>
    {{--    </div>--}}
@endsection
