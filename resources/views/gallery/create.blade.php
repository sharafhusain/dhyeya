@extends('layouts.dashboard')
@section('content')

    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Add New Gallery Image</h5>
            </div>
            <div class="card-body">
                <form action="{{route('create-gallery')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{--<div class="row">
                        <div class="col-sm-6">--}}
                    <div class="mb-3">
                        <label for="image" class="form-label ms-3 d-block">Image</label>
                        <img src="{{ asset('default.png')}}" alt="Image"
                             class="cus-img-op img-thumbnail m-2" style="height:160px;">
                        <input class="form-control cus-img" type="file" id="image" name="image"
                               value="{{old('image')}}">
                    </div>
                    {{--</div>
                </div>--}}
                    <button type="submit" class="btn btn-sm btn-ex-blue">Create</button>
                    <a href="{{route('gallery')}}" class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
