@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="contact">
        <div class="row">
            <div class="col-lg-9">

                <div class="d-flex flex-column mt-4">
                    <h4 class="mb-0">{{ __('contact.associate_with_dhyeya_ias') }}</h4>
                    <p class="text-grey fw-light sidebar-text-bellow-line mb-4">{{ __('contact.current_opening') }}</p>

                    <div class="row">
                        @foreach($vacancies as $vacancy)
                            <div class="card h-100 border-0 shadow-sm my-3">
                                <div class="card-body">
                                    <h5 class="card-title sidebar-text-bellow-line mb-4">{{$vacancy->title}}</h5>
                                    <span class="line bg-dark bg-opacity-10 mb-3"></span>
                                    <div class="row">
                                        @if($vacancy->job_type)
                                            <div class="col-md-6">
                                                <p class="text-grey d-flex mb-2">
                                                    <i class="fa-solid fa-clock p-1 text-primary fs-5"></i>
                                                    <span class="ms-2">{{$vacancy->job_type}}</span>
                                                </p>
                                            </div>
                                        @endif
                                        @if($vacancy->location)
                                            <div class="col-md-6">
                                                <p class="text-grey d-flex mb-2">
                                                    <i class="fa-solid fa-location-dot p-1 text-primary fs-5"></i>
                                                    <span class="ms-2">{{$vacancy->location}}</span>
                                                </p>
                                            </div>
                                        @endif
                                        @if($vacancy->salary)
                                            <div class="col-md-6">
                                                <p class="text-grey d-flex mb-2">
                                                    <i class="fa-solid fa-sack-dollar p-1 text-primary fs-5"></i>
                                                    <span class="ms-2">{{$vacancy->salary}}</span>
                                                </p>
                                            </div>
                                        @endif
                                        @if($vacancy->no_of_openings)
                                            <div class="col-md-6">
                                                <p class="text-grey d-flex mb-2">
                                                    <i class="fa-regular fa-calendar-check p-1 text-primary fs-5"></i>
                                                    <span class="ms-2">{{$vacancy->no_of_openings}} {{ __('contact.opening') }}</span>
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                    {{--<div class="row">
                                        <div class="col-md-6">--}}
                                    @if($vacancy->skill_qualification)
                                        <div class="text-grey my-4">
                                            <h6 class="text-dark">{{ __('contact.responsibilities') }}</h6>
                                                <?= $vacancy->skill_qualification ?>
                                        </div>
                                    @endif
                                    {{--</div>
                                    <div class="col-md-6">--}}
                                    @if($vacancy->role_description)
                                        <div class="text-grey my-4">
                                            <h6 class="text-dark">{{ __('contact.requirements') }}</h6>
                                                <?= $vacancy->role_description ?>
                                        </div>
                                    @endif
                                    {{--</div>
                                </div>--}}

                                    @if($vacancy->how_to_apply)
                                        <div class="text-center my-2">
                                            <a class="btn btn-ex-blue btn-sm" data-bs-toggle="collapse" href="#howToApply" role="button" aria-expanded="false" aria-controls="howToApply">
                                                {{ __('contact.how_to_apply') }}
                                            </a>
                                        </div>
                                        <div class="collapse " id="howToApply">
                                            <div class="card-body"> <?= $vacancy->how_to_apply ?> </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{--Side Bar--}}
            <div class="col-lg-3">
                @include('front.sidebar')
            </div>
        </div>
    </section>
@endsection
