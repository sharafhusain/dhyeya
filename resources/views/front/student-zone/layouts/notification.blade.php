{{--@php($student_zone_category = 'Notification')--}}
@extends('front.student-zone.index')
@section('student_zone_content')
    <section class="my-4" id="student_zone_notification">
        <h3 class="my-4 fw-600">{{ __('studentZone.latest_notifications') }}</h3>

        {{--                <div class="row g-4">--}}
        {{--                    <div class="col-lg-1 col-md-2 col-sm-2">--}}
        {{--                        <i class="fa-solid fa-calendar-days p-2 text-secondary" style="font-size:70px;"></i>--}}
        {{--                    </div>--}}
        {{--                    <div class="col-lg-10 col-md-10 col-sm-10">--}}
        {{--                        <div class="mx-2">--}}
        {{--                            <span class="fw-light text-muted fs-75">06 Jul 2023</span>--}}
        {{--                            <h5>(Notification) Rajasthan Public Service Commission (RPSC) 2023 Exam (राजस्थान लोक सेवा आयोग (आरपीएससी) 2023 परीक्षा की अधिसूचना जारी)</h5>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        <div class="card border-0 box-shadow-1 my-3">
            @foreach($notifications as $notification)
                <div class="card-body">
                    <div class="d-flex my-3">
                            <?php
                            $type = $notification->post->post_type;
                            ?>


                        <i class="fa-solid fa-calendar-days p-2 text-secondary" style="font-size:70px;"></i>

                        <a class="text-decoration-none"
                           @if(str_contains($type,"child-of-") || $type == "post")
                               href="{{ route('affair-single-post',[str_replace("child-of-","",$type), $notification->post->id]) }}"
                           @elseif($type == "test")
                               href="{{ route('front-test',$notification->post->slug) }}"
                           @elseif($type == "course")
                               href="{{ route('single_course',$notification->post->slug) }}"
                            @endif
                        >
                            <div class="mx-2 mt-2">
                                <span
                                    class="fw-light text-muted fs-75">{{$notification->created_at->format("d-M-y")}}</span>
                                {{--                        This is to remove Child of from the Post type fields--}}
                                <h5>
                                                        <span class="fw-600">({{ucwords(str_replace("child-of-","",$notification->post->post_type))}}
                                                            )</span> {{$notification->post->title}}</h5>
                                <p> {{Str::limit($notification->post?->seofield?->excerpt,150)}}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
