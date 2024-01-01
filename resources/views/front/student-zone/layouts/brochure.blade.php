{{--@php($student_zone_category = 'Brochure')--}}
@extends('front.student-zone.index')
@section('student_zone_content')
    <section class="my-4" id="student_zone_brochure">
        <h3 class="my-4 fw-600">{{ __('studentZone.download_prospectus_brochure') }}</h3>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 box-shadow-1 position-relative">
                    <img src="{{ asset('img/prospectus.jpg') }}" alt="pdf">
                    <a href="{{ asset('pdf/prospectus/english.pdf') }}"
                       class="btn btn-ex-blue position-absolute p-2 px-3 text-nowrap" target="_blank"
                       style="bottom:10%;left: 50%;transform:translate(-50%, -50%);">
                        <i class="fa-solid fa-download me-1"></i>
                        {{ __('studentZone.prospectus_brochure_in_english') }}
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 box-shadow-1 position-relative">
                    <img src="{{ asset('img/prospectus.jpg') }}" alt="pdf">
                    <a href="{{ asset('pdf/prospectus/hindi.pdf') }}"
                       class="btn btn-ex-blue position-absolute p-2 px-3 text-nowrap" target="_blank"
                       style="bottom:10%;left: 50%;transform:translate(-50%, -50%);">
                        <i class="fa-solid fa-download me-1"></i>
                        {{ __('studentZone.prospectus_brochure_in_hindi') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
