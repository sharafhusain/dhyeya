@extends('layouts.dashboard')
@section('content')

    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Edit Gallery</h5>
            </div>
            <div class="card-body">
                <form action="{{route('edit-gallery', $gallery->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{--<div class="row">
                        <div class="col-sm-6">--}}
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <img src="{{ asset('storage/media/'.$gallery->image)}}" alt="Image"
                                     class="cus-img-op img-thumbnail m-2" style="height:160px;">
                                <input class="form-control cus-img" type="file" id="image" name="image"
                                       value="{{old('image')}}">
                            </div>
                        {{--</div>
                    </div>--}}
                    <button type="submit" class="btn btn-sm btn-ex-blue">Update</button>
                    <a href="{{route('gallery')}}" class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
