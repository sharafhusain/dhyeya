@php($title_front = ucfirst($page->title))
@extends('layouts.front')
@section('content_ui')
    {{--    only a dynamic page --}}

    <section class="my-5" id="single-page">
        <div class="row">
            <div class="col-md-9">
{{--                <h2 class="mb-3">{{$page->title}}</h2>--}}
                @if($page->filename !== null)
                    <div class="text-center">
                        {{--Image if available--}}
                        <img src="{{asset('storage/media/'.$page->filename)}}" class="img-fluid" alt="image">
                    </div>
                @endif

                <article class="my-4 mb-5 pt-4 cs-editor">
                    <?php echo $page->post->description ?>
                </article>

                {{--ATTACHMENTS here if available--}}
                <div class="my-4 text-center">
{{--                    <a href="#" class="btn btn-info">Attachments like pdf or result if available</a>--}}
                </div>
            </div>

            {{--SIDE BAR--}}
            <div class="col-md-3">
                @include('front.sidebar')
            </div>
        </div>
    </section>
@endsection
