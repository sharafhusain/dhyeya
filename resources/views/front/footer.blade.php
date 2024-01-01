<div class="container-fluid">
    @if(request()->route()->getName() != 'landing-page')
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-12 text-center">
                <div class="p-0 p-sm-2 my-3 mt-4 mx-auto" style="width:265px;">
                    <img src="{{ asset('storage/media/'.$logo_footer) }}" alt="image" class="img-fluid img-4 p-1">
                    <p class="d-flex fs-9 my-3 mt-4 text-light justify-content-center justify-content-md-start">
                        <i class="fa-solid fa-location-dot p-1"></i>
                        {{$address}}
                    </p>
                    <a href="tel:9205274741"
                       class="d-flex link-light text-decoration-none fs-9 justify-content-center justify-content-md-start">
                        <i class="fa-solid fa-phone p-1"></i> {{$mobilenumber}}
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="p-0 p-sm-2 my-3">
                    <div class="text-uppercase text-light mb-3">{{ __('footer.courses') }}</div>
                    <div class="d-flex flex-column gap-2 ms-3">
                        <a href="{{ route('front-online-courses') }}"
                           class="link-light text-muted text-decoration-none fs-9">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.online') }}
                        </a>
                        <a href="{{ route('front-pendrive-course') }}"
                           class="link-light text-muted text-decoration-none fs-9">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.pen_drive') }}
                        </a>
                        <a href="{{ route('page', 'classroom-programme') }}"
                           class="link-light text-muted text-decoration-none fs-9">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.classroom') }}
                        </a>
                        <a href="{{ route('dlp') }}"
                           class="link-light text-muted text-decoration-none fs-9">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.distance_learning') }}
                        </a>
                        {{--<a href="#"
                           class="link-light text-muted text-decoration-none fs-9">
                            <i class="fa-solid fa-angle-right"></i>
                            Project
                        </a>--}}
                        <a href="{{ route('dhyeya-ias-udaan') }}"
                           class="link-light text-muted text-decoration-none fs-9">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.udaan') }}
                        </a>
                        {{--<a href="#"
                           class="link-light text-muted text-decoration-none fs-9">
                            <i class="fa-solid fa-angle-right"></i>
                            GS Online Class
                        </a>
                        <a href="#"
                           class="link-light text-muted text-decoration-none fs-9">
                            <i class="fa-solid fa-angle-right"></i>
                            History
                        </a>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="p-0 p-sm-2 my-3">
                    <div class="text-uppercase text-light mb-3">{{ __('footer.student_zone') }}</div>
                    <div class="d-flex flex-column gap-2 ms-3">
                        <a href="{{route("front-student-zone-batch")}}"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.batch_details') }}
                        </a>
                        <a href="{{ route('front-student-zone-fee') }}"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.fee_details') }}
                        </a>
                        <a href="{{ route('page', 'faqs') }}"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.upsc_faqs') }}
                        </a>
                        <a href="{{ route('front-student-zone-exam') }}"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.exam') }}
                        </a>
                        {{--<a href="#"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            Project
                        </a>--}}
                        <a href="{{ route('front-student-zone-notification') }}"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.latest_notifications') }}
                        </a>
                        <a href="{{ route('front-student-zone-result') }}"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.test_series_result') }}
                        </a>
                        {{--<a href="#"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            Current Affairs
                        </a>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 ms-lg-0 ms-md-auto">
                <div class="p-0 p-sm-2 my-3">
                    <div class="text-uppercase text-light mb-3">{{ __('footer.current_affairs') }}</div>
                    <div class="d-flex flex-column gap-2 ms-3">
                        <a href="{{route("front-affairs","daily-pre-pare")}}"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.daily_pre_pare') }}
                        </a>
                        <a href="#"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.daily_current_affairs') }}
                        </a>
                        <a href="{{route("front-affairs","daily-static-mcqs")}}"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.current_affairs_mcqs') }}
                        </a>
                        <a href="{{route("front-affairs","brain-booster")}}"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.brain_booster') }}
                        </a>
                        <a class="link-light text-muted text-decoration-none fs-9" aria-current="page"
                           href="{{ route('career') }}">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('nav.career') }}
                        </a>
                        <a class="link-light text-muted text-decoration-none fs-9" style="text-wrap: balance" aria-current="page"
                           href="{{ route('dizvik') }}">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('nav.join_dizvik_technologies') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 me-md-0 me-sm-auto">
                <div class="p-0 p-sm-2 my-3">
                    <div class="text-uppercase text-light mb-3">{{ __('footer.downloads') }}</div>
                    <div class="d-flex flex-column gap-2 ms-3">
                        <a href="#"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.class_notes_pdf') }}
                        </a>
                        <a href="#"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.free_study_material') }}
                        </a>
                        <a href="#"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.project_7_magazine') }}
                        </a>
                        <a href="#"
                           class="link-light text-muted text-decoration-none fs-9 ">
                            <i class="fa-solid fa-angle-right"></i>
                            {{ __('footer.upsc_toppers_answer_queries') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="row justify-content-center px-md-3">
        <div class="col-md-6">
            <div class="mx-2 p-3 ms-lg-5">
                <p class="text-light text-center text-md-start fs-7"><span
                        class="text-secondary">{{ __('footer.dhyeya_ias') }}</span>
                    &copy; {{ __('footer.about_dhyeya') }} <span class="text-secondary">{{ __('footer.wnt') }}</span> /
                    <a href="{{asset('sitemap.xml')}}"
                       class="nav-link text-light d-inline fs-8">{{ __('footer.sitemap_xml') }}</a>
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mx-2 p-3 text-end text-center text-md-end me-lg-5">
                <img src="{{ asset('img/credit/american-express.png') }}" style="width:3rem">
                <img src="{{ asset('img/credit/cirrus.png') }}" style="width:3rem">
                <img src="{{ asset('img/credit/mastercard.png') }}" style="width:3rem">
                <img src="{{ asset('img/credit/paypal2.png') }}" style="width:3rem">
                <img src="{{ asset('img/credit/visa.png') }}" style="width:3rem">
            </div>
        </div>
    </div>
</div>
