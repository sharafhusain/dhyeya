{{--@php($student_zone_category = 'Batch Details')--}}
@extends('front.student-zone.index')
@section('student_zone_content')

    @if(isset($classroom_programme))
        <article class="my-4 mb-5 pt-4 cs-editor">
            {!! $classroom_programme->post->description !!}
        </article>
    @endif

    <section class="my-4" id="student_zone_batch">
        <h3>{{ __('studentZone.online_offline_batch') }}</h3>

        <div class="my-3">
            <div class="my-3">
                <h5>{{ __('studentZone.offline_online_class') }}</h5>

                <div class="my-3" id="nav-tab" role="tablist">
                    <button class="btn btn-ex-blue-outline border-0 box-shadow-1 text-nowrap px-3 m-2 active"
                            id="nav-offline-tab" data-bs-toggle="tab" data-bs-target="#nav-offline" type="button"
                            role="tab" aria-controls="nav-offline"
                            aria-selected="true">{{ __('studentZone.offline_class_schedule') }}
                    </button>
                    <button class="btn btn-ex-blue-outline border-0 box-shadow-1 text-nowrap px-3 mx-2"
                            id="nav-online-tab" data-bs-toggle="tab" data-bs-target="#nav-online" type="button"
                            role="tab" aria-controls="nav-online"
                            aria-selected="false">{{ __('studentZone.online_class_schedule') }}
                    </button>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-offline" role="tabpanel"
                     aria-labelledby="nav-offline-tab" tabindex="0">
                    {{-------------------------------------------------------------------------------------------}}
                    {{------------------------------ Offline Class Schedule START -------------------------------}}
                    {{-------------------------------------------------------------------------------------------}}
                    <div class="my-3" id="face-to-face-container">
                        @if(isset($center))
                            <div class="my-3">
                                <div class="bellow-line-parent">
                                    <h4 class="mb-3 fw-600 bellow-line-center mx-auto py-1">{{$center->title}} <span
                                            class="text-muted fw-normal">{{$center->center_type}}</span></h4>
                                </div>
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
                                                            class="fw-light text-muted fs-75">{{ __('studentZone.topic_subject_name') }}</span>
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
                                                            class="fw-light text-muted fs-75">{{ __('studentZone.batch_starting_date') }}</span>
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
                                                            class="fw-light text-muted fs-75">{{ __('studentZone.batch_starting_time') }}</span>
                                                            <h5>{{$batch->time->format('h:i A')}}</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center my-3">
                                                        <i class="fa-solid fa-phone-volume p-2 text-secondary"
                                                           style="font-size:40px;"></i>
                                                        <div class="mx-2 mt-2">
                                                            <span
                                                                class="fw-light text-muted fs-75">{{ __('studentZone.number') }}</span>
                                                            @foreach(explode("/",$center->phone_number) as $number)
                                                                <h5>{{$number}}</h5>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center my-3">
                                                        <i class="fa-solid fa-language p-2 text-secondary"
                                                           style="font-size:40px;"></i>
                                                        <div class="mx-2 mt-2">
                                                            <span
                                                                class="fw-light text-muted fs-75">{{ __('studentZone.batch_medium') }}</span>
                                                            <h5 class="text-capitalize">{{$batch->medium}}</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- Batch Details Box END --}}

                            </div>
                        @endif
                    </div>
                    {{--                    @yield('batch-details')--}}

                    {{-- Face to Face "CENTER CATEGORY" START --}}
                    {{--                    <div class="my-3" id="face-to-face-container">--}}

                    @if(isset($locations))

                        <div class="my-4">
                            {{--<h4 class="mb-4 fw-600 sidebar-text-bellow-line">Face To Face Center</h4>--}}
                            {{-- Batch Details Box START --}}
                            <h4 class="mb-3 fw-600 sidebar-text-bellow-line">{{ __('studentZone.face_to_face_center') }}</h4>
                            <div class="row g-4">
                                @foreach($locations as $center)
                                    @if(($center->batches()->count() != 0) && $center->center_type == "Face To Face")
                                        <div class="col-md-6">
                                            <a href="{{ route('front-student-zone-batch', $center->id) }}"
                                               class="nav-link">
                                                <div class="card border-0 box-shadow-1 ">
                                                    <div class="card-body text-center">
                                                        <h5 class="text-primary">{{$center->title}}</h5>
                                                        <p class="text-grey mb-0">{{ __('studentZone.total_active_batches') }}
                                                        </p>
                                                        <span
                                                            class="text-secondary fs-1 fw-bold">{{$center->batches()->count()}}</span>
                                                    </div>
                                                    <div
                                                        class="card-footer bg-primary text-white rounded-top rounded-5 border-0 p-1 text-center">
                                                        <p class="m-0 text-white">{{ __('studentZone.more_info') }}<i
                                                                class="fa-solid fa-circle-arrow-right"></i></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                        <div class="my-4">
                            <h4 class="mb-3 fw-600 sidebar-text-bellow-line">{{ __('studentZone.live_stream_centers') }}</h4>
                            <div class="row g-4">
                                @foreach($locations as $center)
                                    @if(($center->batches()->count() != 0) && $center->center_type == "Live Stream")
                                        <div class="col-md-6">
                                            <a href="{{ route('front-student-zone-batch', $center->id) }}"
                                               class="nav-link">
                                                <div class="card border-0 box-shadow-1 ">
                                                    <div class="card-body text-center">
                                                        <h5 class="text-primary">{{$center->title}}</h5>
                                                        <p class="text-grey mb-0">{{ __('studentZone.total_active_batches') }}
                                                        </p>
                                                        <span
                                                            class="text-secondary fs-1 fw-bold">{{$center->batches()->count()}}</span>
                                                    </div>
                                                    <div
                                                        class="card-footer bg-primary text-white rounded-top rounded-5 border-0 p-1 text-center">
                                                        <p class="m-0 text-white">{{ __('studentZone.more_info') }}<i
                                                                class="fa-solid fa-circle-arrow-right"></i></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            {{-- Batch Details Box END --}}
                        </div>
                    @endif
                    {{--                    </div>--}}
                    {{-- Face to Face "CENTER CATEGORY" END --}}

                    {{-- Live Streaming "CENTER CATEGORY" START --}}
                    {{--                    <div class="my-3" id="live-stream-container">--}}
                    {{--                        <div class="my-5">--}}
                    {{--                            <h4 class="mb-4 fw-600 sidebar-text-bellow-line">Live Streaming Center</h4>--}}

                    {{--                            <div class="row g-4">--}}
                    {{--                                <div class="col-md-6">--}}
                    {{--                                    <a href="#" class="nav-link">--}}
                    {{--                                        <div class="card border-0 shadow-sm card-hover">--}}
                    {{--                                            <div class="card-body">--}}
                    {{--                                                <h5 class="text-primary">Center Title Here lagaing ...</h5>--}}
                    {{--                                                <p class="text-grey">Total Active Batches:--}}
                    {{--                                                    <span class="text-secondary fw-bold">03</span>--}}
                    {{--                                                </p>--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="card-footer border-0 p-1 text-center">--}}
                    {{--                                                <p class="m-0 text-muted">More info <i class="fa-solid fa-circle-arrow-right"></i></p>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}

                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>


                <div class="tab-pane fade" id="nav-online" role="tabpanel" aria-labelledby="nav-online-tab"
                     tabindex="0">
                    {{-------------------------------------------------------------------------------------------}}
                    {{------------------------------ Online Class Schedule START -------------------------------}}
                    {{-------------------------------------------------------------------------------------------}}

                    <div class="my-3">
                        <h4 class="my-5 sidebar-text-bellow-line fw-600">{{ __('studentZone.batch_details') }}</h4>

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
                                                            class="fw-light text-muted fs-75">{{ __('studentZone.batch_starting_date') }}</span>
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
                                                            class="fw-light text-muted fs-75">{{ __('studentZone.topic_subject_name') }}</span>
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
                                                            class="fw-light text-muted fs-75">{{ __('studentZone.batch_starting_time') }}</span>
                                                    <h5>{{$batch->time->format('h:i A ')}}</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center my-3">
                                                <i class="fa-solid fa-phone-volume p-2 text-secondary"
                                                   style="font-size:40px;"></i>
                                                <div class="mx-2 mt-2">
                                                    <span
                                                        class="fw-light text-muted fs-75">{{ __('studentZone.number') }}</span>
                                                    @foreach(explode("/",$batch->center->phone_number) as $number)
                                                        <h5>{{$number}}</h5>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center my-3">
                                                <i class="fa-solid fa-language p-2 text-secondary"
                                                   style="font-size:40px;"></i>
                                                <div class="mx-2 mt-2">
                                                    <span
                                                        class="fw-light text-muted fs-75">{{ __('studentZone.batch_medium') }}</span>
                                                    <h5 class="text-capitalize">{{$batch->medium}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center my-3">
                                                <a href="https://www.google.com/url?q=https://play.google.com/store/apps/details?id%3Dcom.dhyeyaias&sa=D&source=editors&ust=1690967471497644&usg=AOvVaw2UrdCm_o8F4X5olav7b8iF"
                                                   class="btn btn-ex-blue m-1 p-2 px-3">
                                                    {{ __('studentZone.click_to_join') }}
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
                {{ __('studentZone.download_fee_details') }}
            </a>
            <a href="{{ route('front-courses') }}" class="btn btn-ex-blue m-1 p-2 px-3">
                <i class="fa-solid fa-graduation-cap me-1"></i>
                {{ __('studentZone.our_courses') }}
            </a>
        </div>
    </section>
@endsection
