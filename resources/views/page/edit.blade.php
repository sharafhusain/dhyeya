@php($title = 'Create Post')
@extends('layouts.dashboard')
@section('content')
    {{--    <div class="container">--}}
    <div class="card my-4">
        <div class="card-header">
            <h5 class="card-title">Edit Page ({{$page->title}})
                <a href="{{route("edit-page",[$page->id,$hiEn=="en"?"hi":"en"])}}"
                    class="btn btn-sm btn-ex-blue">{{$hiEn=="en"?"Hindi":"English"}}</a>
            </h5>
        </div>
        <div class="card-body">
            <form action="{{route('edit-page',[$page->id, $hiEn=="en"?"en":"hi"])}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="row my-2">
                    <div class="col-md-8">
                        {{--                            <div class="row border rounded p-2 m-2 me-0" style="min-height:480px;">--}}
                        {{--                                <div class="col-md-6">--}}
                        <div class="mb-3">
                            <label for="{{$hiEn}}.title" class="form-label">Title ({{$hiEn}})</label>
                            <input class="form-control" type="text" id="{{$hiEn}}.title" name="{{$hiEn}}[title]"
                                   value="{{old($hiEn.'.title', $page->translate($hiEn)->title)}}">
                        </div>

                        @if($page->post)
                            <div class="mb-3">
                                <label for="excerpt" class="form-label">Description ({{$hiEn}})</label>
                                <textarea class="form-control myTinyEditor" type="text" id="{{$hiEn}}.description"
                                          name="{{$hiEn}}[description]"
                                          rows="3">{{old($hiEn.'.description',$page->post->translate($hiEn)->description)}}</textarea>
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="excerpt" class="form-label">Excerpt ({{$hiEn}})</label>
                            <textarea class="form-control" type="text" id="{{$hiEn}}.excerpt"
                                      name="{{$hiEn}}[excerpt]"
                                      rows="3">{{old($hiEn.'.excerpt',$page->seofield->translate($hiEn)->excerpt)}}</textarea>
                        </div>
                        {{--                                </div>--}}

                        {{--                                <div class="col-md-6">--}}
                        {{--                                    <div class="mb-3">--}}
                        {{--                                        <label for="hi.title" class="form-label">Title (hi) </label>--}}
                        {{--                                        <input class="form-control" type="text" id="hi.title" name="hi[title]"--}}
                        {{--                                               value="{{old('hi.title', $page->translate("hi")->title)}}">--}}
                        {{--                                    </div>--}}

                        {{--                                    @if($page->post)--}}
                        {{--                                        <div class="mb-3">--}}
                        {{--                                            <label for="excerpt" class="form-label">Description (hi)</label>--}}
                        {{--                                            <textarea class="form-control myTinyEditor" type="text" id="hi.description"--}}
                        {{--                                                      name="hi[description]"--}}
                        {{--                                                      rows="3">{{old('hi.description',$page->post->translate("hi")->description)}}</textarea>--}}
                        {{--                                        </div>--}}
                        {{--                                    @endif--}}

                        {{--                                    <div class="mb-3">--}}
                        {{--                                        <label for="excerpt" class="form-label">Excerpt (hi)</label>--}}
                        {{--                                        <textarea class="form-control" type="text" id="hi.excerpt"--}}
                        {{--                                                  name="hi[excerpt]"--}}
                        {{--                                                  rows="3">{{old('hi.excerpt',$page->seofield->translate("hi")->excerpt)}}</textarea>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                    </div>
                    <div class="col-md-4">
                        <div class="row border rounded p-2 m-2 ms-0" style="min-height:480px;">
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input class="form-control" type="text" id="slug"
                                       name="slug"
                                       value="{{$page->slug}}" disabled>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Active/Inactive</label>
                                <select class="form-control" name="status">
                                    <option value="active"
                                            @selected(old("status",$page->status) == "active") selected>
                                        Active
                                    </option>
                                    <option value="inactive" @selected(old("status",$page->status) == "inactive")>
                                        Inactive
                                    </option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="keywords"
                                       class="form-label">Keywords<span>Separate with commas*</span></label>
                                <input class="form-control" type="text" id="keywords" name="keywords"
                                       value="{{old('keywords', $page->seofield->keywords)}}">
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image <small class="text-muted">(if
                                        any)</small></label>
                                <input class="form-control" type="file" id="image"
                                       name="filename" value="{{old('filename',$page->filename)}}">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-sm btn-ex-blue">Create</button>
                <a href="{{route('pages')}}" class="btn btn-sm btn-warning px-3">Cancel</a>
            </form>
        </div>
    </div>
    {{--    </div>--}}
@endsection
