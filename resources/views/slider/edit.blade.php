@php($title = 'Edit Slider')
@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Edit Slider</h5>
            </div>
            <div class="card-body">
                <form action="{{route('edit-slider', $slider->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image_en" class="form-label">Image (en)</label>
                                <img src="{{ asset('storage/media/'.$slider->translate('en')->image)}}" alt="Image"
                                     class="cus-img-op img-thumbnail m-2" style="height:160px;">
                                <input class="form-control cus-img" type="file" id="image_en" name="en[image]"
                                       value="{{old('en.image')}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image_hi" class="form-label">Image (hi)</label>
                                <img src="{{ asset('storage/media/'.$slider->translate('hi')->image)}}" alt="Image"
                                     class="cus-img-op img-thumbnail m-2" style="height:160px;">
                                <input class="form-control cus-img" type="file" id="image_hi" name="hi[image]"
                                       value="{{old('hi.image')}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-ex-blue">Update</button>
                    <a href="{{route('slider')}}" class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
