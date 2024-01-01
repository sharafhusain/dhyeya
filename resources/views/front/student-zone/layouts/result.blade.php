{{--@php($student_zone_category = 'Result')--}}
@extends('front.student-zone.index')
@section('student_zone_content')
    <section class="my-4" id="student_zone_result">
        <h3 class="my-4 fw-600">{{ __('studentZone.test_series_result') }}</h3>

        @foreach($tests as $test)
            <div class="card border-0 shadow-sm my-4">
                <div class="card-body">
                    <h5 class="sidebar-text-bellow-line fw-600">{{$test->post->title}}</h5>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="d-flex align-items-center my-3">
                                <i class="fa-solid fa-calendar-week p-2 text-secondary"
                                   style="font-size:40px;"></i>
                                <div class="mx-2 mt-2">
                                    <span class="fw-light text-muted fs-75">{{ __('studentZone.starting_date') }}</span>
                                    <h5>{{$test->starting_date}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex align-items-center my-3">
                                <i class="fa-solid fa-book-open p-2 text-secondary"
                                   style="font-size:40px;"></i>
                                <div class="mx-2 mt-2">
                                    <span class="fw-light text-muted fs-75">{{ __('studentZone.total_no_of_test') }}</span>
                                    <h5>{{$test->total_no_of_test}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex align-items-center my-3">
                                <i class="fa-solid fa-right-left p-2 text-secondary"
                                   style="font-size:40px;"></i>
                                <div class="mx-2 mt-2">
                                    <span class="fw-light text-muted fs-75">{{ __('studentZone.test_mode') }}</span>
                                    <h5>{{$test->mode}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex align-items-center my-3">
                                <i class="fa-solid fa-language p-2 text-secondary"
                                   style="font-size:40px;"></i>
                                <div class="mx-2 mt-2">
                                    <span class="fw-light text-muted fs-75">{{ __('studentZone.test_medium') }}</span>
                                    <h5>{{$test->starting_date}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <a href="{{route("download_result", $test->id)}}" class="btn btn-ex-blue my-3 p-2" style="width:70%;">
                                <i class="fa-solid fa-download me-1"></i>
                                {{ __('studentZone.download_result') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    {{$tests->links()}}
    </section>
@endsection
