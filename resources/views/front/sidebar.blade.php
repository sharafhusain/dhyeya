<div class="sticky-top" style="z-index:1;padding-top:4.5rem">

    {{--    @dd(request()->route()->getName());--}}
    {{--@if(request()->route()->getName() == 'front-student-zone-faq')
    --}}{{--Sidebar Widgets for UPSC FAQs--}}{{--
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <h5 class="card-title fw-600 mb-4 sidebar-text-bellow-line">Study Material</h5>

            --}}{{--List Group For CATEGORY--}}{{--
            <ul class="my-3 fs-75 fw-500">
                <a href="#" class="text-primary nav-link bold-hover p-1 w-responsive">
                    <li>Civil Services Exam : Introduction</li>
                </a>
                <a href="#" class="text-primary nav-link bold-hover p-1 w-responsive">
                    <li>Eligibility Criteria</li>
                </a>
                <a href="#" class="text-primary nav-link bold-hover p-1 w-responsive">
                    <li>Pattern of the Examination</li>
                </a>
                <a href="#" class="text-primary nav-link bold-hover p-1 w-responsive">
                    <li>UPSC IAS Preliminary Examination Strategy</li>
                </a>
                <a href="#" class="text-primary nav-link bold-hover p-1 w-responsive">
                    <li>UPSC IAS Mains Examination Strategy</li>
                </a>
                <a href="#" class="text-primary nav-link bold-hover p-1 w-responsive">
                    <li>UPSC Civil Services, IAS Interview Strategy</li>
                </a>
                <a href="#" class="text-primary nav-link bold-hover p-1 w-responsive">
                    <li>How to Read a Newspaper?</li>
                </a>
            </ul>
        </div>
    </div>
    @endif--}}

    {{--Sidebar Widgets 1--}}
    {{--<div class="card border-0 shadow-sm mb-3">
        <img class="img-fluid" src="{{ asset('img/baten-up-ki.jpg') }}" alt="image">
    </div>--}}

    {{--Sidebar Widgets 3--}}
    @php
        $latestArticles = \App\Http\Controllers\Front\SidebarFrontController::latestArticles();
        $cats = \App\Models\Category::where("category_type", "exam")->where("category_id", null)->orderBy('created_at', 'desc')->get()->take(6);
    @endphp
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <h5 class="card-title fw-600 mb-4 sidebar-text-bellow-line">{{ __('front.recent_article') }}</h5>

            {{--List Group For CATEGORY--}}
            <ol class="nav my-3 fs-75">
                {{--                -------------------------------------------------------}}

                @if($cats)
                    @foreach($cats as $cat)
                        @foreach($cat->children as $child)
                            <a class="nav-link bold-hover p-1 mb-2 border-top w-responsive"
                               href="{{route("front-student-zone-exam",$child->category_slug)}}">
                                {{ $child->category_name }}
                            </a>
                        @endforeach
                    @endforeach
                @else
                    @foreach($latestArticles as $notification)
                            <?php
                            $type = $notification->post->post_type;
                            ?>

                        <a class="nav-link bold-hover p-1 mb-2 border-top w-responsive"
                           @if(str_contains($type,"child-of-") || $type == "post")
                               href="{{ route('affair-single-post',[str_replace("child-of-","",$type), $notification->post->id]) }}"
                           @elseif($type == "test")
                               href="{{ route('front-test',$notification->post->slug) }}"
                           @elseif($type == "course")
                               href="{{ route('single_course',$notification->post->slug) }}"
                            @endif
                        >
                            {{$notification->post->title}}
                        </a>
                    @endforeach
                @endif
            </ol>
        </div>
    </div>

    {{--Sidebar Widgets 2--}}
    <div class="position-relative mb-3">
        <div class="owl-carousel sidebar-batch-carousel owl-theme">
            @foreach($batchimgs as $imgs)
                <div class="item">
                    <img src="{{asset('storage/media/'.$imgs)}}" class="img-fluid" alt="batch details"
                         style="height:310px">
                </div>
            @endforeach
        </div>
    </div>

    {{--Sidebar Widgets 4--}}
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            {{-- Todo: Sidebar Get In Touch Form not completed yet...--}}
            <h5 class="card-title fw-600 mb-4 sidebar-text-bellow-line">{{ __('front.get_in_touch') }}</h5>
            {{--<p class="card-text text-muted fw-light mb-4 sidebar-text-bellow-line"></p>--}}
            {{--Contact Form--}}
            <form action="{{ route('contact') }}" method="post">
                @csrf
                <div class="my-3">
                    <input type="text" class="form-control text-muted py-2 fw-light" id="name"
                           placeholder="{{ __('front.name') }}">
                </div>
                <div class="my-3">
                    <input type="number" class="form-control text-muted py-2 fw-light" id="phone"
                           placeholder="{{ __('front.phone') }}">
                </div>
                <div class="my-3">
                    <input type="email" class="form-control text-muted py-2 fw-light" id="email"
                           placeholder="{{ __('front.email') }}">
                </div>
                <div class="my-3">
                    <textarea class="form-control text-muted py-2 fw-light" id="message" rows="5"
                              placeholder="{{ __('front.message')  }}"></textarea>
                </div>
                <button type="submit" class="btn btn-ex-blue shadow-sm px-4 mx-2">{{ __('front.send') }}</button>
            </form>

        </div>
    </div>

    {{--Sidebar Widgets 5--}}
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <h5 class="card-title fw-600 mb-0">{{ __('front.social_links') }}</h5>
            <p class="card-text text-muted fw-light mb-4 sidebar-text-bellow-line">{{ __('front.connect_with_social_account') }}</p>

            {{--Social Links--}}
            <div class="">
                <a href="{{$social_media_links->app_link}}"
                   class="nav-link d-block my-2 bold-hover border p-2 rounded-pill"
                   title="Android">
                    <i class="fa-brands fa-android me-2" style="color: #0da061;"></i> {{ __('front.android') }}
                </a>
                <a href="{{$social_media_links->facebook_link}}"
                   class="nav-link d-block my-2 bold-hover border p-2 rounded-pill"
                   title="Facebook">
                    <i class="fa-brands fa-facebook-f me-2" style="color: #075ea2;"></i> {{ __('front.facebook') }}
                </a>
                <a href="{{$social_media_links->twitter_link}}"
                   class="nav-link d-block my-2 bold-hover border p-2 rounded-pill"
                   title="Twitter">
                    <i class="fa-brands fa-twitter me-2" style="color: #24abff;"></i> {{ __('front.twitter') }}
                </a>
                <a href="{{$social_media_links->telegram_link}}"
                   class="nav-link d-block my-2 bold-hover border p-2 rounded-pill"
                   title="Telegram">
                    <i class="fa-solid fa-paper-plane me-2" style="color: #3884ff;"></i> {{ __('front.telegram') }}
                </a>
                <a href="{{$social_media_links->youtube_link}}"
                   class="nav-link d-block my-2 bold-hover border p-2 rounded-pill"
                   title="Youtube">
                    <i class="fa-brands fa-youtube me-2" style="color: #c20000;"></i> {{ __('front.youtube') }}
                </a>
                <a href="{{$social_media_links->instagram_link}}"
                   class="nav-link d-block my-2 bold-hover border p-2 rounded-pill"
                   title="Instagram">
                    <i class="fa-brands fa-instagram me-2" style="color: #ed0260;"></i> {{ __('front.instagram') }}
                </a>
            </div>

        </div>
    </div>

</div>
