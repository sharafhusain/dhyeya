@php($title = 'Create '.ucwords($type))
@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Create New {{ucwords($type)}}</h5>
            </div>
            <div class="card-body">
                <form action="{{route($type == "achiever"?'create-achievers':"create-toppers",$type)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <input class="form-control" type="hidden" id="type" name="type" value="{{$type}}">

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <img src="{{ asset('default.png')}}" alt="Image" class="cus-img-op m-2 img-thumbnail"
                                     style="height:150px;">
                                <input class="form-control cus-img" type="file" id="image" name="image"
                                       value="{{old('image')}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="en.name" class="form-label">{{ucwords($type)}} Name (en)</label>
                                <input class="form-control" type="text" id="en.name" name="en[name]"
                                       value="{{old('en.name')}}">
                            </div>
                            <div class="mb-3">
                                <label for="en.achievement"
                                       class="form-label">{{$type == "achiever"?"Achievement":"Description"}}
                                    (en)</label>
                                @if($type == 'achiever')
                                <input class="form-control" type="text" id="en.achievement" name="en[achievement]"
                                       value="{{old('en.achievement')}}">
                                @endif
                                @if($type == 'topper')
                                    <textarea class="form-control" type="text" id="en.achievement"
                                              name="en[achievement]" rows="3">{{old('en.achievement')}}</textarea>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="hi.name" class="form-label">{{ucwords($type)}} Name (hi)</label>
                                <input class="form-control" type="text" id="hi.name" name="hi[name]"
                                       value="{{old('hi.name')}}">
                            </div>
                            <div class="mb-3">
                                <label for="hi.achievement"
                                       class="form-label">{{$type == "achiever"?"Achievement":"Description"}}
                                    (hi)</label>
                                @if($type == 'achiever')
                                    <input class="form-control" type="text" id="hi.achievement" name="hi[achievement]"
                                           value="{{old('hi.achievement')}}">
                                @endif
                                @if($type == 'topper')
                                    <textarea class="form-control" type="text" id="hi.achievement"
                                              name="hi[achievement]" rows="3">{{old('hi.achievement')}}</textarea>
                                @endif
                            </div>
                        </div>
                    </div>

                    @if($type == "achiever")
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="year" class="form-label">Year</label>
                                    <input class="form-control" type="number" id="year" name="year"
                                           value="{{old('year')}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="group" class="form-label">Exam</label>
                                    <select class="form-select" id="group" name="group">
                                        <option value="" selected disabled>Choose Exam</option>
                                        <option value="UP-PCS" @selected(old('group') == 'UP-PCS')>UP-PCS</option>
                                        <option value="UPSC" @selected(old('group') == 'UPSC')>UPSC</option>
                                        <option value="Other" @selected(old('group') == 'Other')>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    @endif

                    <button type="submit" class="btn btn-sm btn-ex-blue">Create</button>
                    <a href="{{route($type == "achiever"?'achievers':"toppers",$type)}}"
                       class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
