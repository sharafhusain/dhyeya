@php($title = 'Create Slider')
@extends('layouts.dashboard')
@section('content')
    {{--    <h2 class="mt-4">Dhyeya IAS <span class="text-secondary">Slider</span></h2>--}}

    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Create New Slider</h5>
            </div>
            <div class="card-body">
                <form action="{{route('create-slider')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image_en" class="form-label ms-3">Image (en)</label>
                                <img src="{{ asset('default.png')}}" alt="Image"
                                     class="cus-img-op img-thumbnail m-2" style="height:160px;">
                                <input class="form-control cus-img" type="file" id="image_en" name="en[image]"
                                       value="{{old('en.image')}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image_hi" class="form-label ms-3">Image (hi)</label>
                                <img src="{{ asset('default.png')}}" alt="Image"
                                     class="cus-img-op img-thumbnail m-2" style="height:160px;">
                                <input class="form-control cus-img" type="file" id="image_hi" name="hi[image]"
                                       value="{{old('hi.image')}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-ex-blue">Create</button>
                    <a href="{{route('slider')}}" class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
