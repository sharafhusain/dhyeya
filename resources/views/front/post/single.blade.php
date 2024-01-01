@php($title_front = ucfirst($type??"default"))
@extends('layouts.front')
@section('content_ui')
    <section class="my-5" id="single-post">
        <div class="row">
            <div class="col-md-9">
{{--                <p class="card-text mb-0">--}}
{{--                    --}}{{--Category_type and updated_at info here--}}
{{--                    <?php $post = $course ?? $test ?>--}}
{{--                    <small class="text-secondary fw-bold">{{ucfirst($type)}}</small> /--}}
{{--                    <small class="text-muted">{{$post->updated_at->format('d M Y')}}</small>--}}
{{--                </p>--}}
{{--                <h1 class="mb-3">{{$title}}</h1>--}}
{{--                <div class="text-center">--}}
{{--                    --}}{{--Image if available--}}
{{--                    <img src="{{asset('img/placeholder.png')}}" class="img-fluid" alt="image">--}}
{{--                </div>--}}

                @yield("single-content")

                {{--ATTACHMENTS here if available--}}
{{--                <div class="my-4 text-center">--}}
{{--                    <a href="#" class="btn btn-info">Download Attachment</a>--}}
{{--                </div>--}}
            </div>

            {{--SIDE BAR--}}
            <div class="col-md-3">
                @include('front.sidebar')
            </div>
        </div>
    </section>
@endsection
