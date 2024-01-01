{{--@php($student_zone_category = 'Batch Details')--}}
@extends('front.student-zone.index')
@section('student_zone_content')
    <section class="my-4" id="student_zone_batch">
        <h3>Offline & Online Upcoming Batch Details for UPSC IAS, State PCS Exams</h3>

        <div class="my-3">
            <div class="my-3">
                <h5>Offline & Online Class Schedule</h5>

                <div class="my-3" id="nav-tab" role="tablist">
                    <button class="btn btn-ex-blue-outline border-0 box-shadow-1 text-nowrap px-3 m-2 active"
                            id="nav-offline-tab" data-bs-toggle="tab" data-bs-target="#nav-offline" type="button"
                            role="tab" aria-controls="nav-offline" aria-selected="true">Offline Class Schedule
                    </button>
                    <button class="btn btn-ex-blue-outline border-0 box-shadow-1 text-nowrap px-3 mx-2"
                            id="nav-online-tab" data-bs-toggle="tab" data-bs-target="#nav-online" type="button"
                            role="tab" aria-controls="nav-online" aria-selected="false">Online Class Schedule
                    </button>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-offline" role="tabpanel"
                     aria-labelledby="nav-offline-tab" tabindex="0">
                    {{-------------------------------------------------------------------------------------------}}
                    {{------------------------------ Offline Class Schedule START -------------------------------}}
                    {{-------------------------------------------------------------------------------------------}}

                    {{-- Face to Face "CENTER CATEGORY" START --}}
                    @if($center->center_type == "Face To Face")
                        <div class="my-3" id="face-to-face-container">


                            <div class="my-3">
                                <h4 class="mb-3 fw-600 sidebar-text-bellow-line">Face To Face Center</h4>
                                {{-- Batch Details Box START --}}
                                @foreach($center->batches as $batch)
                                    <div class="card border-0 shadow-sm my-4">
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="d-flex align-items-center my-3">
                                                        <i class="fa-solid fa-book-open p-2 text-secondary"
                                                           style="font-size:40px;"></i>
                                                        <div class="mx-2 mt-2">
                                                        <span
                                                            class="fw-light text-muted fs-75">Topic/Subject Name</span>
                                                            <h5>{{$batch->title}}</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center my-3">
                                                        <i class="fa-solid fa-calendar-week p-2 text-secondary"
                                                           style="font-size:40px;"></i>
                                                        <div class="mx-2 mt-2">
                                                        <span
                                                            class="fw-light text-muted fs-75">Batch Starting Date</span>
                                                            <h5>{{$batch->date->format('d-F-Y')}}</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center my-3">
                                                        <i class="fa-regular fa-clock p-2 text-secondary"
                                                           style="font-size:40px;"></i>
                                                        <div class="mx-2 mt-2">
                                                        <span
                                                            class="fw-light text-muted fs-75">Batch Starting Time</span>
                                                            <h5>{{$batch->time->format('h:i A')}}</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center my-3">
                                                        <i class="fa-solid fa-phone-volume p-2 text-secondary"
                                                           style="font-size:40px;"></i>
                                                        <div class="mx-2 mt-2">
                                                            <span class="fw-light text-muted fs-75">Number</span>
                                                            <h5>{{$center->phone_number}}</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center my-3">
                                                        <i class="fa-solid fa-language p-2 text-secondary"
                                                           style="font-size:40px;"></i>
                                                        <div class="mx-2 mt-2">
                                                            <span class="fw-light text-muted fs-75">Batch Medium</span>
                                                            <h5 class="text-uppercase">{{$batch->medium}}</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- Batch Details Box END --}}

                            </div>
                        </div>
                    @endif
                    {{-- Face to Face "CENTER CATEGORY" END --}}

                    {{-- Live Streaming "CENTER CATEGORY" START --}}
                    @if($center->center_type == "Live Stream")
                        <div class="my-3" id="live-stream-container">
                            <div class="my-5">
                                <h4 class="mb-3 fw-600 sidebar-text-bellow-line">Live Streaming Center</h4>
                            </div>

                            @foreach($center->batches as $batch)
                                <div class="card border-0 shadow-sm my-4">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="d-flex align-items-center my-3">
                                                    <i class="fa-solid fa-book-open p-2 text-secondary"
                                                       style="font-size:40px;"></i>
                                                    <div class="mx-2 mt-2">
                                                        <span
                                                            class="fw-light text-muted fs-75">Topic/Subject Name</span>
                                                        <h5>{{$batch->title}}</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center my-3">
                                                    <i class="fa-solid fa-calendar-week p-2 text-secondary"
                                                       style="font-size:40px;"></i>
                                                    <div class="mx-2 mt-2">
                                                        <span
                                                            class="fw-light text-muted fs-75">Batch Starting Date</span>
                                                        <h5>{{$batch->date->format('d-F-Y')}}</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center my-3">
                                                    <i class="fa-regular fa-clock p-2 text-secondary"
                                                       style="font-size:40px;"></i>
                                                    <div class="mx-2 mt-2">
                                                        <span
                                                            class="fw-light text-muted fs-75">Batch Starting Time</span>
                                                        <h5>{{$batch->time->format('h:i A')}}</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center my-3">
                                                    <i class="fa-solid fa-phone-volume p-2 text-secondary"
                                                       style="font-size:40px;"></i>
                                                    <div class="mx-2 mt-2">
                                                        <span class="fw-light text-muted fs-75">Number</span>
                                                        <h5>{{$center->phone_number}}</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center my-3">
                                                    <i class="fa-solid fa-language p-2 text-secondary"
                                                       style="font-size:40px;"></i>
                                                    <div class="mx-2 mt-2">
                                                        <span class="fw-light text-muted fs-75">Batch Medium</span>
                                                        <h5 class="text-uppercase">{{$batch->medium}}</h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>


                <div class="tab-pane fade" id="nav-online" role="tabpanel" aria-labelledby="nav-online-tab"
                     tabindex="0">
                    {{-------------------------------------------------------------------------------------------}}
                    {{------------------------------ Online Class Schedule START -------------------------------}}
                    {{-------------------------------------------------------------------------------------------}}

                    <div class="my-3">
                        <h4 class="my-5 sidebar-text-bellow-line fw-600">Batch Details</h4>

                        {{-- Batch Details Box START --}}
                        @foreach($online_batches as $batch)
                            <div class="card border-0 shadow-sm my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center my-3">
                                                <i class="fa-solid fa-calendar-week p-2 text-secondary"
                                                   style="font-size:40px;"></i>
                                                <div class="mx-2 mt-2">
                                                        <span
                                                            class="fw-light text-muted fs-75">Batch Starting Date</span>
                                                    <h5>{{$batch->date->format('d-F-Y')}}</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center my-3">
                                                <i class="fa-solid fa-book-open p-2 text-secondary"
                                                   style="font-size:40px;"></i>
                                                <div class="mx-2 mt-2">
                                                        <span
                                                            class="fw-light text-muted fs-75">Topic/Subject Name</span>
                                                    <h5>{{$batch->title}}</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center my-3">
                                                <i class="fa-regular fa-clock p-2 text-secondary"
                                                   style="font-size:40px;"></i>
                                                <div class="mx-2 mt-2">
                                                        <span
                                                            class="fw-light text-muted fs-75">Batch Starting Time</span>
                                                    <h5>{{$batch->time->format('h:i A ')}}</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center my-3">
                                                <i class="fa-solid fa-phone-volume p-2 text-secondary"
                                                   style="font-size:40px;"></i>
                                                <div class="mx-2 mt-2">
                                                    <span class="fw-light text-muted fs-75">Number</span>
                                                    <h5>{{$batch->center->phone_number}}</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center my-3">
                                                <i class="fa-solid fa-language p-2 text-secondary"
                                                   style="font-size:40px;"></i>
                                                <div class="mx-2 mt-2">
                                                    <span class="fw-light text-muted fs-75">Batch Medium</span>
                                                    <h5>{{$batch->medium}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center my-3">
                                                <a href="https://www.google.com/url?q=https://play.google.com/store/apps/details?id%3Dcom.dhyeyaias&sa=D&source=editors&ust=1690967471497644&usg=AOvVaw2UrdCm_o8F4X5olav7b8iF"
                                                   class="btn btn-ex-blue m-1 p-2 px-3">
                                                    Click To join
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-------------------------------------------------------------------------------------------}}
                    {{-------------------------------- Online Class Schedule END --------------------------------}}
                    {{-------------------------------------------------------------------------------------------}}
                </div>
            </div>
        </div>

        <div class="my-3">
            <a href="{{ route('front-student-zone-fee') }}" class="btn btn-ex-blue m-1 p-2 px-3">
                <i class="fa-solid fa-download me-1"></i>
                Download Fee Details
            </a>
            <a href="{{ route('front-courses') }}" class="btn btn-ex-blue m-1 p-2 px-3">
                <i class="fa-solid fa-graduation-cap me-1"></i>
                Our Courses
            </a>
        </div>
    </section>
@endsection
