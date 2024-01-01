@php($title = 'Create Static Page')
@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Create New Static Page</h5>
            </div>
            <div class="card-body">
                <form action="{{route('create-static-pages')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input class="form-control" type="text" id="slug" name="slug"
                                       value="{{old('slug')}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="keywords" class="form-label">Keywords</label>
                                <input class="form-control" type="text" id="keywords" name="keywords"
                                       value="{{old('keywords')}}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control myTinyEditor" type="text" id="content" name="content">{{old('content')}}</textarea>
                        </div>

                    </div>



                    <button type="submit" class="btn btn-sm btn-ex-blue">Create</button>
                    <a href="{{route('static-pages')}}"
                       class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
