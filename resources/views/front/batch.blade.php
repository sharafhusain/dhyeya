@php($title_front = __('front.batch_details'))
@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="batch">
        <div class="row">
            <div class="col-lg-9">

                <div class="d-flex flex-column mt-4">
                    <h3 class="mb-0">{{ __('front.batch_details') }}</h3>
                    <p class="text-muted fw-light sidebar-text-bellow-line mb-5">{{ __('front.explore_dhyeya') }}</p>

                    <div class="row g-4">
                        @foreach($batches as $batch)
                            <div class="col-md-4 col-sm-6">
                                <div class="card h-100 border-0 box-shadow-1 my-2 position-relative">
                                    @if($batch->image)
                                        <img src="{{ asset('storage/media/'.$batch->image)}}" alt="Image"
                                             class="img-fluid" style="height:260px;">
                                    @else
                                        <img src="{{ asset('img/placeholder.png')}}" alt="Image" class="img-fluid"
                                             style="height:260px;">
                                    @endif
                                    <div class="card-body">
                                        <div class="card-title"><h5>{{$batch->title}}</h5></div>
                                        <div class="d-flex justify-content-between align-items-center fs-9">
                                            <span class="me-1">{{ __('front.center') }} :</span>
                                            <span class="text-muted fw-light">{{ $batch->center->title }}</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center fs-9">
                                            <span class="me-1">{{ __('front.center') }} :</span>
                                            <span class="text-muted fw-light">{{ $batch->medium }}</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center fs-9">
                                            <span class="me-1">{{ __('front.date') }} :</span>
                                            <span class="text-muted fw-light">{{ $batch->date }}</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center fs-9">
                                            <span class="me-1">{{ __('front.time') }} :</span>
                                            <span class="text-muted fw-light">{{ $batch->time }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="my-3">{{ $batches->links() }}</div>
                </div>
            </div>

            {{--Side Bar--}}
            <div class="col-lg-3">
                <div class="sticky-top" style="z-index:1;padding-top:4.5rem">

                    {{--Sidebar Widgets 1--}}
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-body">
                            <h5 class="card-title fw-600 mb-4 sidebar-text-bellow-line">{{ __('front.recent_article') }}</h5>

                            {{--List Group For CATEGORY--}}
                            <ol class="nav my-3 fs-75">
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    {{ __('front.ogp_2024_bengaluru') }}
                                </a>
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    {{ __('front.super_ogp_2024') }}
                                </a>
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    {{ __('front.ipm_test_series') }}
                                </a>
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    {{ __('front.ipm_test_series_2024') }}
                                </a>
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    {{ __('front.insta_prelims_test_series') }}
                                </a>

                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    {{ __('front.public_administra') }}
                                </a>
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    {{ __('front.insights_kannada_literature_optional') }}
                                </a>
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    {{ __('front.insights_anthropology_optional') }}
                                </a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
