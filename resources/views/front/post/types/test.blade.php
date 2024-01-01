@extends('front.post.single')
@section("single-content")
    <p class="card-text mb-0">
        {{--Category_type and updated_at info here--}}
        <small class="text-secondary fw-bold">Test</small> /
        <small class="text-grey">{{$test?->updated_at?->format('d M Y')}}</small>
    </p>
    <h1 class="mb-2">{{$test->post->title}}</h1>



    {{--OBJECTIVE if available for Test series only--}}
    @if($test->objective)
        <div class="mb-5 bg-white py-3 px-2 rounded">
            <h4 class="sidebar-text-bellow-line mb-3 pb-1">Programme Objective</h4>
            <article class="text-grey">
                {!! $test->objective !!}
            </article>
        </div>
    @endif

    @if($test->post->description)
        <div class="mb-5">
            <article class="cs-editor">
                {!! $test->post->description !!}
            </article>
        </div>
    @endif

    {{--ANALYSIS if available for Test series only--}}

    @if($test->analysis)
        <div class="mb-5 bg-white py-3 px-2 rounded">
            <h4 class="sidebar-text-bellow-line mb-3 pb-1">Approach Analysis</h4>
            <article class="text-grey">
                {!! $test->analysis !!}
            </article>
        </div>
    @endif

    @if($test->post->metas->count() > 0)
        {{--FEATURES if available for Test series--}}
        <div class="accordion accordion-flush mb-5" id="accordionFeaturesTest">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-FeaturesTestHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFeaturesTest" aria-expanded="false" aria-controls="flush-collapseFeaturesTest">
                        <h4 class="sidebar-text-bellow-line mb-3 pb-1">Features</h4>
                    </button>
                </h2>
                <div id="flush-collapseFeaturesTest" class="accordion-collapse collapse" aria-labelledby="flush-FeaturesTestHeading"
                     data-bs-parent="#accordionFeaturesTest">
                    <div class="accordion-body">
                        <ul class="text-grey">
                            @foreach($test->post->metas as $feature)
                                <li>{{$feature->title}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="mb-5 bg-white py-3 px-2 rounded">
            <h4 class="sidebar-text-bellow-line mb-3 pb-1">Features</h4>
            <ul class="text-grey">
                --}}{{--                        @dd($test->post->metas)--}}{{--
                @foreach($test->post->metas as $feature)
                    <li>{{$feature->title}}</li>
                @endforeach
            </ul>
        </div>--}}
    @endif


    {{--STRUCTURE OF TEST SERIES if available for Test series only--}}
    <div class="mb-5">
        <div class="d-flex justify-content-between">
            <h4 class="sidebar-text-bellow-line mb-4 pb-1">Structure of Test Series</h4>
            <p class="fs-5 me-2 fw-600">Total Test: {{$test->total_no_of_test}}</p>
        </div>

        <div class="accordion accordion-flush" id="accordionFee">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#feeDetail" aria-expanded="false">
                        <h5>Fee Details</h5>
                    </button>
                </h2>
                <div id="feeDetail" class="accordion-collapse collapse" data-bs-parent="#accordionFee">
                    <div class="accordion-body py-3 px-2">
                        <div class="row">
                            @if($test->feeDetails->count())
                                <div class="col-md-6">
                                    @if($test->feeDetails->where("student_type","dhyeya")->count() > 0)
                                        <div class="bg-white rounded-1 shadow-sm p-3 mb-3">
                                            <p class="d-flex flex-column fw-bold">
                                                <span class="fs-6">Complete Package</span>
                                                <span class="fs-4 text-secondary">For Dhyeya Students</span>
                                            </p>
                                            <div class="row">
                                                @foreach($test->feeDetails as $fee)
                                                    @if($fee->student_type == "dhyeya")
                                                        <div class="col-5">
                                                            <span>{{$fee->mode}}: </span>
                                                        </div>
                                                        <div class="col-7">
                                                            <span class=" fw-bold">{{$fee->amount}}/-</span>
                                                            <span class="text-grey fs-95">(Including GST)</span>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    @if($test->feeDetails->where("student_type","non_dhyeya")->count() > 0)
                                        <div class="bg-white rounded-1 shadow-sm p-3 mb-3">
                                            <p class="d-flex flex-column fw-bold">
                                                <span class="fs-6">Complete Package</span>
                                                <span class="fs-4 text-secondary">For Other Students</span>
                                            </p>
                                            <div class="row">
                                                @foreach($test->feeDetails as $fee)
                                                    @if($fee->student_type == "non_dhyeya")
                                                        <div class="col-5">
                                                            <span>{{$fee->mode}}: </span>
                                                        </div>
                                                        <div class="col-7">
                                                            <span class=" fw-bold">{{$fee->amount}}/-</span>
                                                            <span class="text-grey fs-95">(Including GST)</span>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-bg-primary p-4 rounded-1 shadow-sm fw-600 mb-3 mt-4">
            <p class="fs-5">For Any Query Contact us</p>
            <div class="d-flex justify-content-between align-items-center fs-5">
                            <span class="yellow">
                                <a href="tel:9205274741" class="nav-link d-inline bold-hover">9205274741</a>,
                                <a href="tel:9205274742" class="nav-link d-inline bold-hover">9205274742</a>
                            </span>
                <a href="mailto:contact@dhyeya.com" class="nav-link d-inline bold-hover fs-6">contact@dhyeya.com</a>

                <a href="{{ route('contact') }}"
                   class="nav-link d-inline btn btn-light text-dark fw-600 fs-75 py-2 px-3 rounded-1 shadow-sm">
                    Contact us &#x3E;
                </a>
            </div>
        </div>


        {{--<div class="row">
            @if($test->feeDetails->count())
                <div class="col-md-6">
                    <h5>Fee Details</h5>
                    @if($test->feeDetails->where("student_type","dhyeya")->count() > 0)
                        <div class="bg-white rounded-1 shadow-sm p-3 mb-3">
                            <p class="d-flex flex-column fw-bold">
                                <span class="fs-6">Complete Package</span>
                                <span class="fs-4 text-secondary">For Dhyeya Students</span>
                            </p>
                            <div class="row">
                                @foreach($test->feeDetails as $fee)
                                    @if($fee->student_type == "dhyeya")
                                        <div class="col-5">
                                            <span>{{$fee->mode}}: </span>
                                        </div>
                                        <div class="col-7">
                                            <span class=" fw-bold">{{$fee->amount}}/-</span>
                                            <span class="text-grey fs-95">(Including GST)</span>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if($test->feeDetails->where("student_type","non_dhyeya")->count() > 0)
                        <div class="bg-white rounded-1 shadow-sm p-3 mb-3">
                            <p class="d-flex flex-column fw-bold">
                                <span class="fs-6">Complete Package</span>
                                <span class="fs-4 text-secondary">For Other Students</span>
                            </p>
                            <div class="row">
                                @foreach($test->feeDetails as $fee)
                                    @if($fee->student_type == "non_dhyeya")
                                        <div class="col-5">
                                            <span>{{$fee->mode}}: </span>
                                        </div>
                                        <div class="col-7">
                                            <span class=" fw-bold">{{$fee->amount}}/-</span>
                                            <span class="text-grey fs-95">(Including GST)</span>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            @endif
            <div class="col-md-6">
                <div class="text-bg-primary p-4 rounded-1 shadow-sm fw-600 mb-3 mt-4">
                    <p class="fs-5">Total Test: {{$test->total_no_of_test}}</p>
                    <p class="fs-5">For Any Query Contact us</p>
                    <p class="fs-5">
                                <span class="yellow">
                                    <a href="tel:9205274741" class="nav-link d-inline bold-hover">9205274741</a>,
                                    <a href="tel:9205274742" class="nav-link d-inline bold-hover">9205274742</a>
                                </span>
                    </p>
                    <p class="fs-6">
                        <a href="mailto:contact@dhyeya.com"
                           class="nav-link d-inline bold-hover">contact@dhyeya.com</a>
                    </p>

                    <a href="{{ route('contact') }}" class="nav-link">
                        <p class="btn btn-light fw-600 fs-75 py-2 px-3 rounded-1 shadow-sm">Contact us
                            &#x3E;</p>
                    </a>
                </div>
            </div>
        </div>--}}
    </div>





    {{--TEST SERIES SCHEDULE if available for Test series only--}}
    @if($test->papers->count()>0)

        <div class="accordion accordion-flush" id="accordionSchedule">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#Schedule" aria-expanded="false">
                        <h4 class="sidebar-text-bellow-line mb-4 pb-1">Test Series Schedule</h4>
                    </button>
                </h2>
                <div id="Schedule" class="accordion-collapse collapse" data-bs-parent="#accordionSchedule">
                    <div class="accordion-body py-3 px-2">
                        <table class="table table-responsive table-bordered table-striped text-center">
                            <thead class="text-bg-primary">
                            <tr>
                                <th scope="col">Test No.</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Test Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($test->papers as $paper)
                                <tr>
                                    <td>{{$paper->test_name}}</td>
                                    <td class="text-start">
                                        @foreach($paper->schedules as $schedule)

                                            <p class="mb-0">{{$schedule->subject}}</p>
                                        @endforeach
                                    </td>
                                    <td>{{$paper->date}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
