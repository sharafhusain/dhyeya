{{--@php($student_zone_category = 'Batch Details')--}}
@extends('front.student-zone.index')
@section('student_zone_content')
    <section class="my-4" id="student_zone_batch">
        <h3>{{ __('studentZone.online_offline_batch') }}</h3>

        <div class="my-3">
            <div class="my-3">
                <h5>{{ __('studentZone.offline_online_class') }}</h5>

                <div class="my-3" id="nav-tab" role="tablist">
                    <button class="btn btn-ex-blue-outline border-0 box-shadow-1 text-nowrap px-3 m-2 active"
                            id="nav-offline-tab" data-bs-toggle="tab" data-bs-target="#nav-offline" type="button"
                            role="tab" aria-controls="nav-offline" aria-selected="true">{{ __('studentZone.offline_class_schedule') }}
                    </button>
                    <button class="btn btn-ex-blue-outline border-0 box-shadow-1 text-nowrap px-3 mx-2"
                            id="nav-online-tab" data-bs-toggle="tab" data-bs-target="#nav-online" type="button"
                            role="tab" aria-controls="nav-online" aria-selected="false">{{ __('studentZone.online_class_schedule') }}
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
                    <div class="my-3" id="face-to-face-container">
                        <div class="my-5">
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="my-3">
                                            <label for="state_city">{{ __('studentZone.select_select_center_location') }}</label>
                                            <select class="form-select py-2 shadow-sm border-0" id="state_city"
                                                    name="center_id">
                                                @foreach($locations as $location)
                                                    <option
                                                        value="{{$location->id}}" @selected($location->id == request()->center_id)>
                                                        {{$location->title}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-auto mb-3">
                                        <button type="submit" class="btn btn-ex-blue py-2">{{ __('studentZone.submit') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>


                        @if($center->center_type == "Face To Face")
                            <div class="my-3">
                                <h4 class="mb-3 fw-600 sidebar-text-bellow-line">{{ __('studentZone.face_to_face_center') }}</h4>
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
                                                            <span class="fw-light text-muted fs-75">{{ __('studentZone.number') }}</span>
                                                            <h5>{{$center->phone_number}}</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center my-3">
                                                        <i class="fa-solid fa-language p-2 text-secondary"
                                                           style="font-size:40px;"></i>
                                                        <div class="mx-2 mt-2">
                                                            <span class="fw-light text-muted fs-75">{{ __('studentZone.batch_medium') }}</span>
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
                        @endif
                    </div>
                    {{-- Face to Face "CENTER CATEGORY" END --}}

                    {{-- Live Streaming "CENTER CATEGORY" START --}}
                    @if($center->center_type == "Live Stream")
                        <div class="my-3" id="live-stream-container">
                            <div class="my-5">
                                <h4 class="mb-3 fw-600 sidebar-text-bellow-line">{{ __('studentZone.live_streaming_center') }}</h4>
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
                                                        <span class="fw-light text-muted fs-75">{{ __('studentZone.number') }}</span>
                                                        <h5>{{$center->phone_number}}</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center my-3">
                                                    <i class="fa-solid fa-language p-2 text-secondary"
                                                       style="font-size:40px;"></i>
                                                    <div class="mx-2 mt-2">
                                                        <span class="fw-light text-muted fs-75">{{ __('studentZone.batch_medium') }}</span>
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
                                                <span class="fw-light text-muted fs-75">{{ __('studentZone.number') }}</span>
                                                <h5>{{$batch->center->phone_number}}</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center my-3">
                                            <i class="fa-solid fa-language p-2 text-secondary"
                                               style="font-size:40px;"></i>
                                            <div class="mx-2 mt-2">
                                                <span class="fw-light text-muted fs-75">{{ __('studentZone.batch_medium') }}</span>
                                                <h5>{{$batch->medium}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center my-3">
                                            <a href="https://www.google.com/url?q=https://play.google.com/store/apps/details?id%3Dcom.dhyeyaias&sa=D&source=editors&ust=1690967471497644&usg=AOvVaw2UrdCm_o8F4X5olav7b8iF" class="btn btn-ex-blue m-1 p-2 px-3">
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
