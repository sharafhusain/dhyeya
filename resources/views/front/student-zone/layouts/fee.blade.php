{{--@php($student_zone_category = 'Fee Details')--}}
@extends('front.student-zone.index')
@section('student_zone_content')
    <section class="my-4" id="student_zone_feeDetails">
        <h3>{{ __('studentZone.download_our_fee_details') }}</h3>

        <div class="my-5">
            <div class="card border-0 shadow-sm my-3">
                <div class="card-body p-4">
                    <div class="row align-items-center text-center text-md-start">
                        <div class="col-md-6">
                            <h5>{{ __('studentZone.online_fee_details') }}</h5>
                            <p class="my-1">{{ __('studentZone.all_courses_fee_details') }}</p>
                            <p class="my-1"><span class="fw-500">{{ __('studentZone.medium') }} </span><span>{{ __('studentZone.hindi_and_english') }}</span></p>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ asset('pdf/fee/1_fee.pdf') }}" class="btn btn-ex-blue m-1 float-md-end mt-4 mt-md-0" target="_blank">
                                <i class="fa-solid fa-download me-1"></i>
                                {{ __('studentZone.download_fee_details') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm my-3">
                <div class="card-body p-4">
                    <div class="row align-items-center text-center text-md-start">
                        <div class="col-md-6">
                            <h5>{{ __('studentZone.online_fee_details') }}</h5>
                            <p class="my-1">{{ __('studentZone.all_courses_fee_details') }}</p>
                            <p class="my-1"><span class="fw-500">{{ __('studentZone.medium') }} </span><span>{{ __('studentZone.hindi') }}</span></p>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ asset('pdf/fee/2_fee.pdf') }}" class="btn btn-ex-blue m-1 float-md-end mt-4 mt-md-0" target="_blank">
                                <i class="fa-solid fa-download me-1"></i>
                                {{ __('studentZone.download_fee_details') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm my-3">
                <div class="card-body p-4">
                    <div class="row align-items-center text-center text-md-start">
                        <div class="col-md-6">
                            <h5>{{ __('studentZone.online_fee_details') }}</h5>
                            <p class="my-1">{{ __('studentZone.all_courses_fee_details') }}</p>
                            <p class="my-1"><span class="fw-500">{{ __('studentZone.medium') }} </span><span>{{ __('studentZone.english') }}</span></p>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ asset('pdf/fee/3_fee.pdf') }}" class="btn btn-ex-blue m-1 float-md-end mt-4 mt-md-0" target="_blank">
                                <i class="fa-solid fa-download me-1"></i>
                                {{ __('studentZone.download_fee_details') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
