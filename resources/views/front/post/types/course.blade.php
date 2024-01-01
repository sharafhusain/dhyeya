@extends('front.post.single')
@section("single-content")

    <p class="card-text mb-0">
        {{--            Category_type and updated_at info here--}}
        <small class="text-secondary fw-bold">{{ucfirst($type)}}</small> /
        <small class="text-grey">{{$course->updated_at->format('d M Y')}}</small>
    </p>
    <h2 class="mb-3">{{$course->post->title}}</h2>
    {{--        <div class="text-center">--}}
    {{--            Image if available--}}
    {{--            <img src="{{asset('img/placeholder.png')}}" class="img-fluid" alt="image">--}}
    {{--        </div>--}}



    @if($course->post->description)
        {{--DESCRIPTION if available--}}
        <article class="my-4 mb-5 cs-editor">
            {!! $course->post->description !!}
        </article>
    @endif



    @if($course->post->description === null)

        {{--INFORMATION if available for Courses only--}}
        <div class="mb-5 bg-white py-3 px-2 rounded">
            <article class="text-grey">
                {!! $course->course_information !!}
            </article>
        </div>




        {{--FEATURES if available for Courses only--}}
        @if($features->count())
            <div class="accordion accordion-flush mb-5" id="accordionFeaturesCourse">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-featureHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFeatureCourse" aria-expanded="false" aria-controls="flush-collapseFeatureCourse">
                            <h4 class="sidebar-text-bellow-line mb-3 pb-1">Features</h4>
                        </button>
                    </h2>
                    <div id="flush-collapseFeatureCourse" class="accordion-collapse collapse" aria-labelledby="flush-featureHeading"
                         data-bs-parent="#accordionFeaturesCourse">
                        <div class="accordion-body">
                            <ul class="text-grey">
                                @foreach($features as $feature)
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
                    @foreach($features as $feature)
                        <li>{{$feature->title}}</li>
                    @endforeach
                </ul>
            </div>--}}
        @endif



        {{--ADMISSION PROCESS if available for Courses only--}}
        <div class="accordion accordion-flush mb-5" id="accordionAdmission">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-AdmissionHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseAdmissionProcess" aria-expanded="false" aria-controls="flush-collapseAdmissionProcess">
                        <h4 class="sidebar-text-bellow-line mb-3 pb-1">Admission Process</h4>
                    </button>
                </h2>
                <div id="flush-collapseAdmissionProcess" class="accordion-collapse collapse" aria-labelledby="flush-AdmissionHeading"
                     data-bs-parent="#accordionAdmission">
                    <div class="accordion-body">
                        <article class="text-grey">
                            {!! $course->admission_process !!}
                        </article>
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="mb-5 bg-white py-3 px-2 rounded">
            <h4 class="sidebar-text-bellow-line mb-3 pb-1">Admission Process</h4>
            <article class="text-grey">
                {!! $course->admission_process !!}
            </article>
        </div>--}}



        {{--TECHNICAL REQUIREMENT if available for Courses only--}}
        <div class="accordion accordion-flush mb-5" id="accordionRequirement">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-RequirementHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTechnicalRequirement" aria-expanded="false" aria-controls="flush-collapseTechnicalRequirement">
                        <h4 class="sidebar-text-bellow-line mb-3 pb-1">Technical Requirement</h4>
                    </button>
                </h2>
                <div id="flush-collapseTechnicalRequirement" class="accordion-collapse collapse" aria-labelledby="flush-RequirementHeading"
                     data-bs-parent="#accordionRequirement">
                    <div class="accordion-body">
                        <article class="text-grey">
                            {!! $course->technical_requirement !!}
                        </article>
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="mb-5 bg-white py-3 px-2 rounded">
            <h4 class="sidebar-text-bellow-line mb-3 pb-1">Technical Requirement</h4>
            <article class="text-grey">
                {!! $course->technical_requirement !!}
            </article>
        </div>--}}



        {{--FEE DETAILS if available for Courses only--}}
        <div class="mb-5">
            <div class="accordion accordion-flush" id="feeCourse">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#feeDetailEach" aria-expanded="false">
                            <h4 class="sidebar-text-bellow-line mb-4 pb-1">Fee Details <span
                                    class="text-secondary">(Including GST)</span>
                            </h4>
                        </button>
                    </h2>
                    <div id="feeDetailEach" class="accordion-collapse collapse" data-bs-parent="#feeCourse">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bg-white rounded-1 shadow-sm p-3 mb-3" style="min-height:140px;">
                                        <h5 class="fw-bold">Total Package</h5>
                                        <div class="px-3">
                                            {{--Installment 1--}}
                                            <div class="row">
                                                <div class="col-6">
                                                    <span>Total Fee: </span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="fw-bold">{{$course->total_fee}}/-</span>
                                                </div>
                                            </div>
                                            {{--Installment 1--}}
                                            <div class="row">
                                                <div class="col-6">
                                                    <span>Instalment Duration: </span>
                                                </div>
                                                <div class="col-6">
                                                    <span
                                                        class="fw-bold">{{$course->installment_duration}} months</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <span>Course Duration: </span>
                                                </div>
                                                <div class="col-6">
                                                    <span
                                                        class="fw-bold">{{$course->duration}} {{str_contains($course->course_type,"Pen")?"Hours":"Months"}}</span>
                                                </div>
                                            </div>
                                            {{--Installment 1--}}
                                            <div class="row">
                                                <div class="col-6">
                                                    <span>One Time Payment: </span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="fw-bold">{{$course->one_time_payment}}/-</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if($course->installments->count())
                                    <div class="col-md-6">
                                        <div class="bg-white rounded-1 shadow-sm p-3 mb-3" style="min-height:140px;">
                                            <h5 class="fw-bold">Total Installment</h5>
                                            <div class="px-3">
                                                {{--Installment 1--}}
                                                @foreach($course->installments as $installment)
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span>{{$installment->title}}: </span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span class="fw-bold">{{$installment->amount}}/-</span>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{--<h4 class="sidebar-text-bellow-line mb-4 pb-1">Fee Details <span
                    class="text-secondary">(Including GST)</span>
            </h4>--}}

            {{--<div class="row">
                <div class="col-md-6">
                    <div class="bg-white rounded-1 shadow-sm p-3 mb-3" style="min-height:140px;">
                        <h5 class="fw-bold">Total Package</h5>
                        <div class="px-3">
                            --}}{{--Installment 1--}}{{--
                            <div class="row">
                                <div class="col-6">
                                    <span>Total Fee: </span>
                                </div>
                                <div class="col-6">
                                    <span class="fw-bold">{{$course->total_fee}}/-</span>
                                </div>
                            </div>
                            --}}{{--Installment 1--}}{{--
                            <div class="row">
                                <div class="col-6">
                                    <span>Instalment Duration: </span>
                                </div>
                                <div class="col-6">
                                                    <span
                                                        class="fw-bold">{{$course->installment_duration}} months</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <span>Course Duration: </span>
                                </div>
                                <div class="col-6">
                                                    <span
                                                        class="fw-bold">{{$course->duration}} {{str_contains($course->course_type,"Pen")?"Hours":"Months"}}</span>
                                </div>
                            </div>
                            --}}{{--Installment 1--}}{{--
                            <div class="row">
                                <div class="col-6">
                                    <span>One Time Payment: </span>
                                </div>
                                <div class="col-6">
                                    <span class="fw-bold">{{$course->one_time_payment}}/-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if($course->installments->count())
                    <div class="col-md-6">
                        <div class="bg-white rounded-1 shadow-sm p-3 mb-3" style="min-height:140px;">
                            <h5 class="fw-bold">Total Installment</h5>
                            <div class="px-3">
                                --}}{{--Installment 1--}}{{--
                                @foreach($course->installments as $installment)
                                    <div class="row">
                                        <div class="col-6">
                                            <span>{{$installment->title}}: </span>
                                        </div>
                                        <div class="col-6">
                                            <span class="fw-bold">{{$installment->amount}}/-</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>--}}
        </div>



        @if($faqs->count())
            <div class="my-4 mb-5">
                <h4 class="sidebar-text-bellow-line mb-3 pb-1">FAQs</h4>
                <div class="accordion accordion-flush" id="faqs">
                    @foreach($faqs as $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#{{$faq->id}}" aria-expanded="false"
                                        aria-controls="{{$faq->id}}">
                                    <strong class="me-2">Question:</strong> {{$faq->title}}
                                </button>
                            </h2>
                            <div id="{{$faq->id}}" class="accordion-collapse collapse"
                                 data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p class="text-grey"><strong> Answer: </strong>{{$faq->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{--<ol>
                    @foreach($faqs as $faq)
                        <li>
                            <h6>Question: {{$faq->title}}</h6>
                            <p class="text-grey"><strong> Answer: </strong>{{$faq->description}}</p></li>
                    @endforeach
                </ol>--}}
            </div>
        @endif



        <div class="text-bg-primary p-4 rounded-1 shadow-sm fw-600 mb-3">
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
    @endif
@endsection
