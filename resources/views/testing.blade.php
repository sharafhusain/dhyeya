@php($title_front = 'ucfirst($type)')
@extends('layouts.front')
@section('content_ui')
    <section class="my-5" id="single-post">
        <div class="row">
            <div class="col-md-9">
                <p class="card-text mb-0">
                    {{--Category_type and updated_at info here--}}
                    <small class="text-secondary fw-bold">National Current Affairs</small> /
                    <small class="text-muted">Updated 3 mins ago</small>
                </p>
                <h1 class="mb-3">{$title}}</h1>
                <div class="text-center">
                    {{--Image if available--}}
                    <img src="{{asset('img/placeholder.png')}}" class="img-fluid" alt="image">
                </div>


                {{--------------------------------------------------------------COURSE---------------------------------------------------------------}}
                {{--------------------------------------------------------- POST TYPE COURSE---------------------------------------------------------}}
                {{--------------------------------------------------------------COURSE---------------------------------------------------------------}}

                {{--INFORMATION if available for Courses only--}}
                <div class="my-4 mb-5">
                    <h4 class="sidebar-text-bellow-line mb-3 pb-1">
                        {course_type}
                        {{--if (course_type == 'Optional')
                         {(course->post->title)}
                         endif--}}
                        Information</h4>
                    <article class="text-muted">
                        <p>{course_type_information}</p>
                        <p>{course_type_information}</p>
                        <p>{course_type_information}</p>
                    </article>
                </div>

                {{--FEATURES if available for Courses only--}}
                <div class="my-4 mb-5">
                    <h4 class="sidebar-text-bellow-line mb-3 pb-1">Features</h4>
                    <ul class="text-muted">
                        <li>{course_features_title}</li>
                        <li>{course_features_title}</li>
                        <li>{course_features_title}</li>
                        <li>{course_features_title}</li>
                    </ul>
                </div>

                {{--ADMISSION PROCESS if available for Courses only--}}
                <div class="my-4 mb-5">
                    <h4 class="sidebar-text-bellow-line mb-3 pb-1">Admission Process</h4>
                    <article class="text-muted">
                        <p>{about_admission_process}</p>
                        <p>{about_admission_process}</p>
                        <p>{about_admission_process}</p>
                    </article>
                </div>

                {{--TECHNICAL REQUIREMENT if available for Courses only--}}
                <div class="my-4 mb-5">
                    <h4 class="sidebar-text-bellow-line mb-3 pb-1">Technical Requirement</h4>
                    <article class="text-muted">
                        <p>{about_technical_requirement}</p>
                        <p>{about_technical_requirement}</p>
                        <p>{about_technical_requirement}</p>
                    </article>
                </div>

                {{--FEE DETAILS if available for Courses only--}}
                <div class="my-4 mb-5">
                    <h4 class="sidebar-text-bellow-line mb-4 pb-1">Fee Details <span class="text-secondary">(Including GST)</span>
                    </h4>

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
                                            <span class="fw-bold">12000/-</span>
                                        </div>
                                    </div>
                                    {{--Installment 1--}}
                                    <div class="row">
                                        <div class="col-6">
                                            <span>Instalment Duration: </span>
                                        </div>
                                        <div class="col-6">
                                            <span class="fw-bold">3 months</span>
                                        </div>
                                    </div>
                                    {{--Installment 1--}}
                                    <div class="row">
                                        <div class="col-6">
                                            <span>One Time Payment: </span>
                                        </div>
                                        <div class="col-6">
                                            <span class="fw-bold">10500/-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="bg-white rounded-1 shadow-sm p-3 mb-3" style="min-height:140px;">
                                <h5 class="fw-bold">Total Installment</h5>
                                <div class="px-3">
                                    {{--Installment 1--}}
                                    <div class="row">
                                        <div class="col-6">
                                            <span>1st Instalment: </span>
                                        </div>
                                        <div class="col-6">
                                            <span class="fw-bold">3000/-</span>
                                        </div>
                                    </div>
                                    {{--Installment 1--}}
                                    <div class="row">
                                        <div class="col-6">
                                            <span>2nd Instalment: </span>
                                        </div>
                                        <div class="col-6">
                                            <span class=" fw-bold">5000/-</span>
                                        </div>
                                    </div>
                                    {{--Installment 1--}}
                                    <div class="row">
                                        <div class="col-6">
                                            <span>3rd Instalment: </span>
                                        </div>
                                        <div class="col-6">
                                            <span class="fw-bold">4000/-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                            </p>
                        </div>
                    </div>
                </div>

                {{--------------------------------------------------------------COURSE---------------------------------------------------------------}}
                {{--------------------------------------------------------- POST TYPE COURSE---------------------------------------------------------}}
                {{--------------------------------------------------------------COURSE---------------------------------------------------------------}}

            </div>
            {{--SIDE BAR--}}
            <div class="col-md-3">
                <div class="fixed-archive sticky-top" style="z-index:1;padding-top:4.5rem">
                    {{-----------------------------------------------------------------------------------------------}}
                    {{-----------------------------------ONLY FOR DOWNLOADS PAGE-------------------------------------}}
                    {{-----------------------------------------------------------------------------------------------}}
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-body">
                            <h5 class="card-title fw-600 mb-0">Archive</h5>
                            <p class="card-text text-muted fw-light mb-4 sidebar-text-bellow-line">Explore more with
                                Dhyeya IAS</p>

                            <nav>
                                <div class="btn-group w-100 btn-archive" id="nav-tab" role="tablist">
                                    <a class="btn active" id="nav-category-tab" data-bs-toggle="tab"
                                       data-bs-target="#nav-category" type="button" role="tab"
                                       aria-controls="nav-category" aria-selected="true">Category</a>
                                    <a class="btn" id="nav-year-tab" data-bs-toggle="tab" data-bs-target="#nav-year"
                                       type="button" role="tab" aria-controls="nav-year"
                                       aria-selected="false">Year</a>
                                </div>
                            </nav>

                            {{--Button Group--}}
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-category" role="tabpanel"
                                     aria-labelledby="nav-category-tab" tabindex="0">
                                    {{--List Group For CATEGORY--}}
                                    <ol class="nav my-3">
                                        <li class="nav-item d-flex justify-content-between align-items-center border px-2 m-1 rounded-pill w-responsive">
                                            <a href="#" class="nav-link fw-500 p-1">Daily Pre PARE</a>
                                            <span class="badge bg-primary rounded-pill fw-normal">14</span>
                                        </li>
                                        <li class="nav-item d-flex justify-content-between align-items-center border px-2 m-1 rounded-pill w-responsive">
                                            <a href="#" class="nav-link fw-500 p-1">Daily Current Affairs</a>
                                            <span class="badge bg-primary rounded-pill fw-normal">14</span>
                                        </li>
                                        <li class="nav-item d-flex justify-content-between align-items-center border px-2 m-1 rounded-pill w-responsive">
                                            <a href="#" class="nav-link fw-500 p-1">Info-paedia</a>
                                            <span class="badge bg-primary rounded-pill fw-normal">14</span>
                                        </li>
                                        <li class="nav-item d-flex justify-content-between align-items-center border px-2 m-1 rounded-pill w-responsive">
                                            <a href="#" class="nav-link fw-500 p-1">Daily MCQ Quiz</a>
                                            <span class="badge bg-primary rounded-pill fw-normal">14</span>
                                        </li>
                                        <li class="nav-item d-flex justify-content-between align-items-center border px-2 m-1 rounded-pill w-responsive">
                                            <a href="#" class="nav-link fw-500 p-1">Daily AIR Debate</a>
                                            <span class="badge bg-primary rounded-pill fw-normal">14</span>
                                        </li>
                                        <li class="nav-item d-flex justify-content-between align-items-center border px-2 m-1 rounded-pill w-responsive">
                                            <a href="#" class="nav-link fw-500 p-1">Brain Boosters</a>
                                            <span class="badge bg-primary rounded-pill fw-normal">14</span>
                                        </li>
                                    </ol>
                                </div>
                                <div class="tab-pane fade" id="nav-year" role="tabpanel"
                                     aria-labelledby="nav-year-tab"
                                     tabindex="0">
                                    {{--List Group For YEAR--}}
                                    <ol class="nav my-3">
                                        <li class="nav-item d-flex justify-content-between align-items-center border px-2 m-1 rounded-pill w-responsive">
                                            <a href="#" class="nav-link fw-500 p-1">2023</a>
                                            <span class="badge bg-primary rounded-pill fw-normal">13</span>
                                        </li>
                                        <li class="nav-item d-flex justify-content-between align-items-center border px-2 m-1 rounded-pill w-responsive">
                                            <a href="#" class="nav-link fw-500 p-1">2022</a>
                                            <span class="badge bg-primary rounded-pill fw-normal">12</span>
                                        </li>
                                        <li class="nav-item d-flex justify-content-between align-items-center border px-2 m-1 rounded-pill w-responsive">
                                            <a href="#" class="nav-link fw-500 p-1">2021</a>
                                            <span class="badge bg-primary rounded-pill fw-normal">11</span>
                                        </li>
                                        <li class="nav-item d-flex justify-content-between align-items-center border px-2 m-1 rounded-pill w-responsive">
                                            <a href="#" class="nav-link fw-500 p-1">2020</a>
                                            <span class="badge bg-primary rounded-pill fw-normal">10</span>
                                        </li>
                                        <li class="nav-item d-flex justify-content-between align-items-center border px-2 m-1 rounded-pill w-responsive">
                                            <a href="#" class="nav-link fw-500 p-1">2019</a>
                                            <span class="badge bg-primary rounded-pill fw-normal">19</span>
                                        </li>
                                        <li class="nav-item d-flex justify-content-between align-items-center border px-2 m-1 rounded-pill w-responsive">
                                            <a href="#" class="nav-link fw-500 p-1">2018</a>
                                            <span class="badge bg-primary rounded-pill fw-normal">18</span>
                                        </li>
                                    </ol>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-----------------------------------------------------------------------------------------------}}
                    {{-----------------------------------ONLY FOR DOWNLOADS PAGE-------------------------------------}}
                    {{-----------------------------------------------------------------------------------------------}}

                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-body">
                            <h5 class="card-title fw-600 mb-0">Important Links</h5>
                            <p class="card-text text-muted fw-light mb-4 sidebar-text-bellow-line">Explore more with
                                Dhyeya IAS</p>

                            {{--List Group For Important Links--}}
                            <ol class="nav my-3 fs-75">
                                <li class="nav-item d-flex justify-content-between align-items-center w-responsive">
                                    <a href="#" class="nav-link bold-hover p-1">OGP 2024 – Batch 6 Bengaluru</a>
                                </li>
                                <li class="nav-item d-flex justify-content-between align-items-center w-responsive">
                                    <a href="#" class="nav-link bold-hover p-1">SUPER OGP 2024</a>
                                </li>
                                <li class="nav-item d-flex justify-content-between align-items-center w-responsive">
                                    <a href="#" class="nav-link bold-hover p-1">IPM Test Series 2024 (2.0)</a>
                                </li>
                                <li class="nav-item d-flex justify-content-between align-items-center w-responsive">
                                    <a href="#" class="nav-link bold-hover p-1">IPM Test Series 2024 (1.0)</a>
                                </li>
                                <li class="nav-item d-flex justify-content-between align-items-center w-responsive">
                                    <a href="#" class="nav-link bold-hover p-1">Insta Prelims Test Series 2024
                                        2.0</a>
                                </li>
                                <li class="nav-item d-flex justify-content-between align-items-center w-responsive">
                                    <a href="#" class="nav-link bold-hover p-1">Comprehensive Public
                                        Administra...</a>
                                </li>
                                <li class="nav-item d-flex justify-content-between align-items-center w-responsive">
                                    <a href="#" class="nav-link bold-hover p-1">Insights Kannada Literature
                                        Optional</a>
                                </li>
                                <li class="nav-item d-flex justify-content-between align-items-center w-responsive">
                                    <a href="#" class="nav-link bold-hover p-1">Insights Anthropology Optional
                                        2024</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
