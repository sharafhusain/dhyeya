@if(count(\App\Models\Notification::all()))
    <div class="container">
        <h2 class="h2 text-primary text-center my-4 pt-3">{{ __('homepage.important') }}
            <span class="text-secondary fw-600" data-aos="fade-up"> {{ __('homepage.notifications') }}</span>
        </h2>
        <div class="row justify-content-center">
            @if(count($testNotification))
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 box-shadow-2 p-3 position-relative overflow-hidden my-2"
                         style="min-height:532px;">
                        <div class="strip bg-secondary text-center text-light p-1">{{ __('homepage.tests') }}</div>
                        <div class="card-body overflow-y-scroll" style="height: 500px">
                            <div class="card-title mb-4">
                                <p class="h5">{{ __('homepage.tests') }}</p>
                            </div>

                            @foreach($testNotification as $n)
                                    <?php
                                    $type = $n->post->post_type;
                                    ?>
                                <div class="card-text text-body-tertiary d-flex">
                                    <i class="fa-regular fa-circle-check text-primary p-1 px-2"></i>
                                    <p class="d-flex flex-column">
                                        <a class="text-decoration-none text-grey"
                                           @if($type == "test") href="{{ route('front-test',$n->post->slug) }}" @endif>
                                            {{$n->post->title}}</a>
                                        {{--                                            {{str($n->post->title)->limit('35')}}</a>--}}
                                        <span class="fs-9">{{ __('homepage.updated') }}
                                            <i class="text-secondary">{{$n->post->created_at->format("Y-m-d")}}</i></span>
                                    </p>
                                </div>
                            @endforeach


                            <div class="card-title mt-4">
                                <a href="{{route("front-student-zone-notification")}}"
                                   class="btn btn-sm btn-ex-blue mx-2">{{ __('homepage.view_more') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if(isset($cats))
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 box-shadow-2 p-3 position-relative overflow-hidden my-2"
                         style="min-height:532px;">
                        <div class="strip bg-secondary text-center text-light p-1">{{ __('homepage.exams') }}</div>
                        <div class="card-body overflow-y-scroll" style="height: 500px">
                            <div class="card-title mb-4">
                                <p class="h5">{{ __('homepage.exams') }}</p>
                            </div>
                            @foreach($cats as $cat)
                                @foreach($cat->children as $child)
                                    <div class="card-text text-body-tertiary d-flex">
                                        <i class="fa-regular fa-circle-check text-primary p-1 px-2"></i>
                                        <p class="d-flex flex-column">
                                            <a class="text-decoration-none text-grey"
                                               href="{{ route("front-student-zone-exam",$child->category_slug) }}">
                                                {{$child->category_name}}
                                            </a>
                                            <span class="fs-9">{{ __('homepage.updated') }} <i
                                                    class="text-secondary">{{$child->created_at ? $child->created_at->format("Y-m-d") : ''}}</i></span>
                                        </p>
                                    </div>
                                @endforeach
                            @endforeach
                            <div class="card-title mt-4">
                                <a href="{{route("front-student-zone-notification")}}"
                                   class="btn btn-sm btn-ex-blue mx-2">{{ __('homepage.view_more') }}></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if(count($otherNotification))
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 box-shadow-2 p-3 position-relative overflow-hidden my-2"
                         style="min-height:532px;">
                        <div class="strip bg-secondary text-center text-light p-1">{{ __('homepage.whats_new') }}</div>
                        <div class="card-body overflow-y-scroll" style="height: 500px">
                            <div class="card-title mb-4">
                                <p class="h5">{{ __('homepage.whats_new') }}</p>
                            </div>
                            @foreach($otherNotification as $n)
                                    <?php
                                    $type = $n->post->post_type;
                                    ?>


                                <div class="card-text text-body-tertiary d-flex">
                                    <i class="fa-regular fa-circle-check text-primary p-1 px-2"></i>
                                    <p class="d-flex flex-column">
                                        <a class="text-decoration-none text-grey"
                                           @if(str_contains($type,"child-of-") || $type == "post")
                                               href="{{ route('affair-single-post',[str_replace("child-of-","",$type), $n->post->id]) }}"
                                           @elseif($type == "test")
                                               href="{{ route('front-test',$n->post->slug) }}"
                                           @elseif($type == "course")
                                               href="{{ route('single_course',$n->post->slug) }}"
                                            @endif
                                        >
                                            {{$n->post->title}}
                                        </a>
                                        <span class="fs-9">{{ __('homepage.updated') }}  <i
                                                class="text-secondary">{{$n->post->created_at->format("Y-m-d")}}</i></span>
                                    </p>
                                </div>
                            @endforeach

                            <div class="card-title mt-4">
                                <a href="{{route("front-student-zone-notification")}}"
                                   class="btn btn-sm btn-ex-blue mx-2">{{ __('homepage.view_more') }} ></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endif
