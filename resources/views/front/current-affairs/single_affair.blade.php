@php($title_front = ucfirst($type))
@extends('layouts.front')
@section('content_ui')
    <section class="my-5" id="single-post">
        <div class="row">
            <div class="col-md-9">

                @yield("page-content")
                @if($type != "air-debate")

                <div class="text-center">
                    <button class="btn btn-ex-blue my-3"
                            type="button"
                            onclick="printJS({
                            printable: 'printJS-content',
                            type: 'html',
                            css: ['{{asset('dist/css/bootstrap.min.css')}}', '{{asset('css/custom.css')}}'],
                            scanStyles: true,
                            // base64: true,
                            showModal:true,
                            modalMessage: 'RENDERING YOUR PDF'
                        })">
                        Print PDF
                    </button>
                </div>
                @endif

                {{--FEE DETAILS if available for Courses only--}}
                <div class="my-4 mb-5">
                    <div class="text-bg-primary p-4 rounded-1 shadow-sm fw-600 mb-3">
                        <p class="fs-5">{{ __('currentAffairs.for_any_query_contact_us') }}</p>
                        <div class="d-flex justify-content-between align-items-center fs-5">
                            <span class="yellow">
                                <a href="tel:9205274741" class="nav-link d-inline bold-hover">9205274741</a>,
                                <a href="tel:9205274742" class="nav-link d-inline bold-hover">9205274742</a>
                            </span>
                            <a href="mailto:contact@dhyeya.com" class="nav-link d-inline bold-hover fs-6">contact@dhyeya.com</a>

                            <a href="{{ route('contact') }}"
                               class="nav-link d-inline btn btn-light text-dark fw-600 fs-75 py-2 px-3 rounded-1 shadow-sm">
                                {{ __('currentAffairs.contact_us') }} &#x3E;
                            </a>
                            </p>
                        </div>
                    </div>
                </div>
                {{-----------------------------------------------------------POST TYPE COURSE--------------------------------------------------------}}
            </div>
            {{--SIDE BAR--}}
            <div class="col-md-3">
                @include("front.sidebar")
            </div>
        </div>
    </section>
@endsection
