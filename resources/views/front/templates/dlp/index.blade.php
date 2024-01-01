@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="dlp">
        <div class="row align-items-center justify-content-center mb-5 py-5 g-4">

            <div class="col-md-2">
                <a href="{{ route('dlp_upsc') }}" class="text-decoration-none">
                    <div class="card border-0 box-shadow-1 pb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/books.png') }}" alt="books" class="img-fluid img-2">
{{--                            <i class="fa-regular fa-calendar-days p-2 text-secondary" style="font-size:70px;"></i>--}}
                            <h5 class="card-title py-3">{{ __('nav.dlp_for_upsc') }}</h5>
                            <div class="row">
                                <div class="col-6">Total Books :</div>
                                <div class="col-6">24</div>
                            </div>
                            <div class="row">
                                <div class="col-6">Medium :</div>
                                <div class="col-6">English & Hindi</div>
                            </div>
                            <a href="{{ route('dlp_upsc') }}"
                               class="btn btn-ex-blue mt-3">{{ __('studentZone.read_more') }}</a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="{{ route('dlp_uppcs') }}" class="text-decoration-none">
                    <div class="card border-0 box-shadow-1 pb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/books.png') }}" alt="books" class="img-fluid img-2">
                            <h5 class="card-title py-3">{{ __('nav.dlp_for_uppcs') }}</h5>
                            <div class="row">
                                <div class="col-6">Total Books :</div>
                                <div class="col-6">24</div>
                            </div>
                            <div class="row">
                                <div class="col-6">Medium :</div>
                                <div class="col-6">English & Hindi</div>
                            </div>
                            <a href="{{ route('dlp_uppcs') }}"
                               class="btn btn-ex-blue mt-3">{{ __('studentZone.read_more') }}</a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="{{ route('dlp_bpsc') }}" class="text-decoration-none">
                    <div class="card border-0 box-shadow-1 pb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/books.png') }}" alt="books" class="img-fluid img-2">
                            <h5 class="card-title py-3">{{ __('nav.dlp_for_bpsc') }}</h5>
                            <div class="row">
                                <div class="col-6">Total Books :</div>
                                <div class="col-6">24</div>
                            </div>
                            <div class="row">
                                <div class="col-6">Medium :</div>
                                <div class="col-6">English & Hindi</div>
                            </div>
                            <a href="{{ route('dlp_bpsc') }}"
                               class="btn btn-ex-blue mt-3">{{ __('studentZone.read_more') }}</a>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </section>
@endsection
