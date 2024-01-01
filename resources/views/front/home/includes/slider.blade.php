<style>
    .slider-carousel {
        position: relative;
    }

    .slider-carousel .owl-dots {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }
</style>

<div id="slides" class="carousel slide overflow-hidden" data-bs-ride="carousel">

    {{--<div class="carousel-indicators hide-max-992">
        @foreach($slider as $index => $slide)
            <button type="button" data-bs-target="#slides" data-bs-slide-to="{{$index}}"
                    class="{{$index==0?"active":""}}" aria-current="{{$index==0?"true":""}}"
                    aria-label="Slide 1"></button>
        @endforeach
    </div>

    <div class="carousel-inner">
        @foreach($slider as $slide)
            <div class="carousel-item active icon-box">
                <img src="{{asset('storage/media/'.$slide->image)}}" class="d-block w-100" alt="slider">
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev hide-min-992" type="button" data-bs-target="#slides"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next hide-min-992" type="button" data-bs-target="#slides"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>--}}

    <div class="row">
        <div class="col-lg-9 pe-0">
            <div class="owl-carousel slider-carousel owl-theme">
                @foreach($slider as $slide)
                    <div class="item">
                        <img src="{{asset('storage/media/'.$slide->image)}}" class="d-block w-100" alt="slider">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-3 ps-0" style="background-color:#d1daff;">
            @if(count($allNotification))
                <div class="position-relative overflow-hidden mt-2 font-responsive px-3 px-lg-0">
                    <div class="card-body ps-3">
                        <a href="{{route("front-student-zone-notification")}}" class="text-decoration-none">
                            <div class="card-title mb-4">
                                <p class="h5 text-center mt-2">{{ __('homepage.latest') }} <span
                                        class="text-secondary">{{ __('homepage.notifications') }}</span></p>
                            </div>
                        </a>
                        <div class="overflow-hidden responsive-height">
                            <div class="animate-slider-notification1">
                                @if(isset($cats))
                                    @foreach($cats as $cat)
                                        @foreach($cat->children as $child)
                                            <div
                                                class="card-text text-body-tertiary d-flex justify-content-center justify-content-lg-start">
                                                <p class="mb-1 mb-lg-3">
                                                    <span class="me-2 text-grey">{{$child->category_name}}</span>
                                                    <a class="text-decoration-none text-secondary fw-semibold"
                                                       href="{{route("front-student-zone-exam",$child->category_slug)}}">
                                                        {{ __('homepage.click_here') }}
                                                    </a>
                                                    {{--<span class="fs-9">Updated
                                                        <i class="text-secondary">{{$child->created_at ? $child->created_at->format("Y-m-d") : ''}}</i>
                                                    </span>--}}
                                                </p>
                                            </div>
                                        @endforeach
                                    @endforeach

                                @else

                                    @foreach($allNotification as $n)
                                            <?php
                                            $type = $n->post->post_type;
                                            ?>


                                        @if($n->post->title)
                                            <div
                                                class="card-text text-body-tertiary d-flex justify-content-center justify-content-lg-start">
                                                {{--<i class="fa-regular fa-circle-check text-primary p-1 px-2"></i>--}}
                                                <p class="mb-1 mb-lg-3">
                                                    <span class="me-2 text-grey">{{$n->post->title}}</span>
                                                    <a class="text-decoration-none text-secondary fw-semibold"
                                                       @if(str_contains($type,"child-of-") || $type == "post")
                                                           href="{{ route('affair-single-post',[str_replace("child-of-","",$type), $n->post->id]) }}"
                                                       @elseif($type == "test")
                                                           href="{{ route('front-test',$n->post->slug) }}"
                                                       @elseif($type == "course")
                                                           href="{{ route('single_course',$n->post->slug) }}"
                                                        {{--href="{{ route('front-student-zone-exam',$child->category_slug) }}"--}}
                                                        @endif
                                                    >
                                                        {{ __('homepage.click_here') }}
                                                    </a>
                                                    {{--<span class="fs-9">Updated  <i
                                                            class="text-secondary">{{$n->post->created_at->format("Y-m-d")}}</i></span>--}}
                                                </p>
                                            </div>
                                        @endif
                                    @endforeach

                                @endif
                            </div>
                            {{--Duplicate Notification for Animation Control--}}
                            <div class="animate-slider-notification2">
                                @if(isset($cats))
                                    @foreach($cats as $cat)
                                        @foreach($cat->children as $child)
                                            <div
                                                class="card-text text-body-tertiary d-flex justify-content-center justify-content-lg-start">
                                                <p class="mb-1 mb-lg-3">
                                                    <span class="me-2 text-grey">{{$child->category_name}}</span>
                                                    <a class="text-decoration-none text-secondary fw-semibold"
                                                       href="{{route("front-student-zone-exam",$child->category_slug)}}">
                                                        {{ __('homepage.click_here') }}
                                                    </a>
                                                    {{--<span class="fs-9">Updated
                                                        <i class="text-secondary">{{$child->created_at ? $child->created_at->format("Y-m-d") : ''}}</i>
                                                    </span>--}}
                                                </p>
                                            </div>
                                        @endforeach
                                    @endforeach

                                @else

                                    @foreach($allNotification as $n)
                                            <?php
                                            $type = $n->post->post_type;
                                            ?>


                                        @if($n->post->title)
                                            <div
                                                class="card-text text-body-tertiary d-flex justify-content-center justify-content-lg-start">
                                                {{--<i class="fa-regular fa-circle-check text-primary p-1 px-2"></i>--}}
                                                <p class="mb-1 mb-lg-3">
                                                    <span class="me-2 text-grey">{{$n->post->title}}</span>
                                                    <a class="text-decoration-none text-secondary fw-semibold"
                                                       @if(str_contains($type,"child-of-") || $type == "post")
                                                           href="{{ route('affair-single-post',[str_replace("child-of-","",$type), $n->post->id]) }}"
                                                       @elseif($type == "test")
                                                           href="{{ route('front-test',$n->post->slug) }}"
                                                       @elseif($type == "course")
                                                           href="{{ route('single_course',$n->post->slug) }}"
                                                        {{--href="{{ route('front-student-zone-exam',$child->category_slug) }}"--}}
                                                        @endif
                                                    >
                                                        {{ __('homepage.click_here') }}
                                                    </a>
                                                    {{--<span class="fs-9">Updated  <i
                                                            class="text-secondary">{{$n->post->created_at->format("Y-m-d")}}</i></span>--}}
                                                </p>
                                            </div>
                                        @endif
                                    @endforeach

                                @endif
                            </div>
                            {{--Duplicate Notification for Animation Control--}}
                        </div>

                        {{--<div class="card-title mt-4">
                            <a href="{{route("front-student-zone-notification")}}"
                               class="btn btn-sm btn-ex-blue mx-2">View
                                More ></a>
                        </div>--}}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
