@extends('layouts.front')
@section('content_ui')
    <div class="my-4">
        <h4>{{ __('front.dhyeya_ias_gallery') }}</h4>
        <div id="gallery" class="carousel slide my-4" data-bs-ride="carousel">
            <div class="owl-carousel gallery-carousel owl-theme w-50 mx-auto">
                @foreach($gallery as $img)
                    <div class="item">
                        <img src="{{asset('storage/media/'.$img->image)}}" class="img-fluid w-auto mx-auto"
                             alt="gallery_image">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
