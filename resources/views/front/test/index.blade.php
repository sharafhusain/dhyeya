@php($title_front = __('homepage.test').' '.__('homepage.series'))
@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="test">
        <div class="row">
            <div class="col-md-9">
                <div class="d-flex flex-column">
                    @yield('tests')
                </div>
            </div>

            {{--Side Bar--}}
            <div class="col-md-3">
                @include('front.sidebar')
            </div>
        </div>
    </section>
@endsection
