@php($title = 'Create Center')
@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Create New Center</h5>
            </div>
            <div class="card-body">
                <form action="{{route('create-center')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="image" class="form-label ms-3">Image</label>
                                <img style="height: 150px;" class="cus-img-op m-2 img-thumbnail"
                                     src="{{asset('default.png')}}">
                                <input class="form-control cus-img" type="file" id="image" name="image"
                                       value="{{old('image')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="center_type" class="form-label">Center Type</label>
                                <select class="form-select" id="center_type" name="center_type">
                                    <option value="" disabled selected>Choose Center Type</option>
                                    <option value="Face To Face" @selected(old('center_type') == 'Face To Face')>Face To
                                        Face
                                    </option>
                                    <option value="Live Stream" @selected(old('center_type') == 'Live Stream')>Live
                                        Stream
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email (en)</label>
                                <input class="form-control" type="email" id="email" name="email"
                                       value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number (en)</label>
                                <input class="form-control" type="text" id="phone_number" name="phone_number"
                                       value="{{old('phone_number')}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="en.title" class="form-label">Title (en)</label>
                                <input class="form-control" type="text" id="en.title" name="en[title]"
                                       value="{{old('en.title')}}">
                            </div>
                            <div class="mb-3">
                                <label for="en.address" class="form-label">Address (en)</label>
                                <input class="form-control" type="text" id="en.address" name="en[address]"
                                       value="{{old('en.address')}}">
                            </div>

                            <div class="mb-3">
                                <label for="en.city" class="form-label">City (en)</label>
                                <input class="form-control" type="text" id="en.city" name="en[city]"
                                       value="{{old('en.city')}}">
                            </div>
                            <div class="mb-3">
                                <label for="en.state" class="form-label">State (en)</label>
                                <input class="form-control" type="text" id="en.state" name="en[state]"
                                       value="{{old('en.state')}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="hi.title" class="form-label">Title (hi)</label>
                                <input class="form-control" type="text" id="hi.title" name="hi[title]"
                                       value="{{old('hi.title')}}">
                            </div>
                            <div class="mb-3">
                                <label for="hi.address" class="form-label">Address (hi)</label>
                                <input class="form-control" type="text" id="hi.address" name="hi[address]"
                                       value="{{old('hi.address')}}">
                            </div>

                            <div class="mb-3">
                                <label for="hi.city" class="form-label">City (hi)</label>
                                <input class="form-control" type="text" id="hi.city" name="hi[city]"
                                       value="{{old('hi.city')}}">
                            </div>
                            <div class="mb-3">
                                <label for="hi.state" class="form-label">State (hi)</label>
                                <input class="form-control" type="text" id="hi.state" name="hi[state]"
                                       value="{{old('hi.state')}}">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-ex-blue">Create</button>
                    <a href="{{route('center')}}" class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

