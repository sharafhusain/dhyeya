{{--@if(request()->route()->getName() == 'front-student-zone')--}}
{{--    @php($title_front = 'Student Zone')--}}
{{--@else--}}
{{--    @php($title_front = '<span style="color: #000!important;">Student Zone > </span>'.$student_zone_category)--}}
{{--@endif--}}
@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="student-zone">
        @if(request()->route()->getName() == 'front-student-zone')

            <div class="row align-items-center justify-content-center mb-5 py-5 g-4">

                <div class="col-md-3">
                    <a href="{{ route('front-student-zone-batch') }}" class="text-decoration-none">
                        <div class="card border-0 box-shadow-1 pb-3">
                            <div class="card-body text-center">
                                <i class="fa-regular fa-calendar-days p-2 text-secondary" style="font-size:70px;"></i>
                                <h5 class="card-title py-3">{{ __('studentZone.batch_details') }}</h5>
                                <a href="{{ route('front-student-zone-batch') }}" class="btn btn-ex-blue">{{ __('studentZone.read_more') }}</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="{{ route('front-student-zone-fee') }}" class="text-decoration-none">
                        <div class="card border-0 box-shadow-1 pb-3">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-file-invoice-dollar p-2 text-secondary"
                                   style="font-size:70px;"></i>
                                <h5 class="card-title py-3">{{ __('studentZone.fee_details') }}</h5>
                                <a href="{{ route('front-student-zone-fee') }}" class="btn btn-ex-blue">{{ __('studentZone.read_more') }}</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="{{ route('front-student-zone-book') }}" class="text-decoration-none">
                        <div class="card border-0 box-shadow-1 pb-3">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-book p-2 text-secondary" style="font-size:70px;"></i>
                                <h5 class="card-title py-3">{{ __('studentZone.books_and_notes') }}</h5>
                                <a href="{{ route('front-student-zone-book') }}" class="btn btn-ex-blue">{{ __('studentZone.read_more') }}</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="{{ route('page', 'faqs') }}" class="text-decoration-none">
                        <div class="card border-0 box-shadow-1 pb-3">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-circle-question p-2 text-secondary" style="font-size:70px;"></i>
                                <h5 class="card-title py-3">{{ __('studentZone.upse_faqs') }}</h5>
                                <a href="{{ route('page', 'faqs') }}" class="btn btn-ex-blue">{{ __('studentZone.read_more') }}</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="{{ route('front-student-zone-exam') }}" class="text-decoration-none">
                        <div class="card border-0 box-shadow-1 pb-3">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-graduation-cap p-2 text-secondary" style="font-size:70px;"></i>
                                <h5 class="card-title py-3">{{ __('studentZone.exam') }}</h5>
                                <a href="{{ route('front-student-zone-exam') }}" class="btn btn-ex-blue">{{ __('studentZone.read_more') }}</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="{{ route('front-student-zone-brochure') }}" class="text-decoration-none">
                        <div class="card border-0 box-shadow-1 pb-3">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-file-powerpoint p-2 text-secondary" style="font-size:70px;"></i>
                                <h5 class="card-title py-3">{{ __('studentZone.prospectus_brochure') }}</h5>
                                <a href="{{ route('front-student-zone-brochure') }}" class="btn btn-ex-blue">{{ __('studentZone.read_more') }}</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="{{ route('front-student-zone-notification') }}" class="text-decoration-none">
                        <div class="card border-0 box-shadow-1 pb-3">
                            <div class="card-body text-center">
                                <i class="fa-regular fa-newspaper p-2 text-secondary" style="font-size:70px;"></i>
                                <h5 class="card-title py-3">{{ __('studentZone.latest_notification') }}</h5>
                                <a href="{{ route('front-student-zone-notification') }}" class="btn btn-ex-blue">{{ __('studentZone.read_more') }}</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="{{ route('front-student-zone-result') }}" class="text-decoration-none">
                        <div class="card border-0 box-shadow-1 pb-3">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-chart-simple p-2 text-secondary" style="font-size:70px;"></i>
                                <h5 class="card-title py-3">{{ __('studentZone.test_series_results') }}</h5>
                                <a href="{{ route('front-student-zone-result') }}" class="btn btn-ex-blue">{{ __('studentZone.read_more') }}</a>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        @else

            <div class="row">

                <div class="col-lg-8">
                    {{--<div class="row align-items-center g-3 my-5">
                        <div class="col-md-3">
                            <a href="{{ route('front-student-zone-batch') }}"
                               class="btn btn-ex-blue-outline border-0 fs-5 box-shadow-1 text-nowrap w-100
                               @if(request()->routeIs('front-student-zone-batch')) active @endif">
                                Batch-Details</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('front-student-zone-fee') }}"
                               class="btn btn-ex-blue-outline border-0 fs-5 box-shadow-1 text-nowrap w-100
                               @if(request()->routeIs('front-student-zone-fee')) active @endif">
                                Fee Details</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('front-student-zone-book') }}"
                               class="btn btn-ex-blue-outline border-0 fs-5 box-shadow-1 text-nowrap w-100
                               @if(request()->routeIs('front-student-zone-book')) active @endif">
                                Books & Notes</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('front-student-zone-faq') }}"
                               class="btn btn-ex-blue-outline border-0 fs-5 box-shadow-1 text-nowrap w-100
                               @if(request()->routeIs('front-student-zone-faq')) active @endif">
                                UPSE & FAQs</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('front-student-zone-exam') }}"
                               class="btn btn-ex-blue-outline border-0 fs-5 box-shadow-1 text-nowrap w-100
                               @if(request()->routeIs('front-student-zone-exam')) active @endif">
                                Exam</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('front-student-zone-brochure') }}"
                               class="btn btn-ex-blue-outline border-0 fs-5 box-shadow-1 text-nowrap w-100
                               @if(request()->routeIs('front-student-zone-brochure')) active @endif">
                                Brochure</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('front-student-zone-notification') }}"
                               class="btn btn-ex-blue-outline border-0 fs-5 box-shadow-1 text-nowrap w-100
                               @if(request()->routeIs('front-student-zone-notification')) active @endif">
                                Notification</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('front-student-zone-result') }}"
                               class="btn btn-ex-blue-outline border-0 fs-5 box-shadow-1 text-nowrap w-100
                               @if(request()->routeIs('front-student-zone-result')) active @endif">
                                Result</a>
                        </div>
                    </div>--}}
                    <div class="my-5">
                        @yield('student_zone_content')
                    </div>
                </div>

                {{--Side Bar--}}
                <div class="col-lg-4">
                    @include('front.sidebar')
                </div>

            </div>
        @endif
    </section>
@endsection
