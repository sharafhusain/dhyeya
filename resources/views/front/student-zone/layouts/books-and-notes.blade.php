{{--@php($student_zone_category = 'Books & Notes')--}}
@extends('front.student-zone.index')
@section('student_zone_content')
    <section class="my-4" id="student_zone_booksAndNotes">
        <h3>{{ __('studentZone.our_books') }}</h3>
        <h5>{{ __('studentZone.for_ordering_books') }}
            <a href="tel:9205184003" class="text-secondary nav-link d-inline bold-hover">
                {{$mobilenumber}}</a>
        </h5>
        <div class="my-3">
            <div class="my-3">
                <div class="my-3" id="nav-tab" role="tablist">
                    <button class="btn btn-ex-blue-outline border-0 box-shadow-1 text-nowrap px-3 m-2 active"
                            id="nav-upse-tab" data-bs-toggle="tab" data-bs-target="#nav-upse" type="button"
                            role="tab" aria-controls="nav-upse" aria-selected="true">{{ __('studentZone.upse') }}
                    </button>
                    <button class="btn btn-ex-blue-outline border-0 box-shadow-1 text-nowrap px-3 mx-2"
                            id="nav-uppcs-tab" data-bs-toggle="tab" data-bs-target="#nav-uppcs" type="button"
                            role="tab" aria-controls="nav-uppcs" aria-selected="false">{{ __('studentZone.up_pcs') }}
                    </button>
                    <button class="btn btn-ex-blue-outline border-0 box-shadow-1 text-nowrap px-3 mx-2"
                            id="nav-bpse-tab" data-bs-toggle="tab" data-bs-target="#nav-bpse"
                            type="button" role="tab" aria-controls="nav-bpse" aria-selected="false">{{ __('studentZone.bpse') }}
                    </button>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-upse" role="tabpanel"
                     aria-labelledby="nav-upse-tab" tabindex="0">
                    {{-------------------------------------------------------------------------------------------}}
                    {{----------------------------------------- UPSE START --------------------------------------}}
                    {{-------------------------------------------------------------------------------------------}}
                    <div class="my-3">
                        <div class="my-4">
                            <h4 class="fw-600">{{ __('studentZone.books_for_upse_exam') }}</h4>

                        </div>
{{--                        <h5>--}}
{{--                            <p class="fw-600">Books for UPSC Exam</p>--}}
{{--                            <p class="fs-6">For Ordering Books Call--}}
{{--                                <a href="tel:9205184003" class="text-secondary nav-link d-inline bold-hover">--}}
{{--                                    9205184003</a>--}}
{{--                            </p>--}}
{{--                        </h5>--}}

                        <div class="row text-center g-4 justify-content-center">
                            @foreach($books["UPSC"] as $book)
                            <div class="col-md-4">
                                <img class="img-fluid img-hover h-100" src="{{ asset('storage/media/'.$book["filename"]) }}"
                                     alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{-------------------------------------------------------------------------------------------}}
                    {{---------------------------------------- UPSE END -----------------------------------------}}
                    {{-------------------------------------------------------------------------------------------}}
                </div>

                <div class="tab-pane fade" id="nav-uppcs" role="tabpanel" aria-labelledby="nav-uppcs-tab"
                     tabindex="0">
                    {{-------------------------------------------------------------------------------------------}}
                    {{--------------------------------------- UP-PCS START --------------------------------------}}
                    {{-------------------------------------------------------------------------------------------}}
                    <div class="my-3">
                        <div class="my-4">
                            <h4 class="fw-600">{{ __('studentZone.books_for_up_pcs_exam') }}</h4>

                        </div>

                        <div class="row g-4 justify-content-center">
                            @foreach($books["UP-PCS"] as $book)
                                <div class="col-md-4">
                                    <img class="img-fluid img-hover h-100" src="{{ asset('storage/media/'.$book["filename"]) }}"
                                         alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-------------------------------------------------------------------------------------------}}
                    {{--------------------------------------- UP-PCS END ----------------------------------------}}
                    {{-------------------------------------------------------------------------------------------}}
                </div>

                <div class="tab-pane fade" id="nav-bpse" role="tabpanel" aria-labelledby="nav-bpse-tab" tabindex="0">
                    {{--                <div class="tab-pane fade" id="nav-bpse" role="tabpanel" aria-labelledby="nav-bpse-tab"--}}
                    {{--                     tabindex="0">--}}
                    {{-------------------------------------------------------------------------------------------}}
                    {{--------------------------------------- BPSE START --------------------------------------}}
                    {{-------------------------------------------------------------------------------------------}}
                    <div class="my-3">
                        <div class="my-4">
                            <h4 class="fw-600">{{ __('studentZone.books_for_bpse_exam') }}</h4>

                        </div>

                        <div class="row g-4 justify-content-center">
                            @foreach($books["BPSC"] as $book)
                                <div class="col-md-4">
                                    <img class="img-fluid img-hover h-100" src="{{ asset('storage/media/'.$book["filename"]) }}"
                                         alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-------------------------------------------------------------------------------------------}}
                    {{--------------------------------------- BPSE END ----------------------------------------}}
                    {{-------------------------------------------------------------------------------------------}}
                </div>
            </div>
        </div>
        <div class="my-5 text-center">
            <a href="#" class="btn btn-ex-blue m-1 p-3">{{ __('studentZone.click_here_for_hindi_books') }}</a>
        </div>
    </section>
@endsection
