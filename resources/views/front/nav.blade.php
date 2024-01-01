<nav class="navbar navbar-expand-lg bg-white shadow-sm menu">
    <div class="container-fluid justify-content-start justify-content-lg-center">

        <!-- OffCanvas Menu Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu" aria-controls="mobileMenu">
            <span class="navbar-toggler-icon"></span>
        </button>


        <a class="navbar-brand ms-1 ms-md-5" href="{{route('front-home')}}">
            <img src="{{asset('storage/media/'.$logo)}}" alt="Logo" style="max-width:150px">
        </a>

        <!--SEARCH MOBILE ICON-->
        <a class="nav-link ms-auto hide-min-992 searchButton" role="button" data-bs-toggle="collapse"
           data-bs-target="#search" aria-expanded="false" aria-controls="search">
            <i class="fa-solid fa-magnifying-glass fa-sm"></i>
        </a>

        <div class="collapse navbar-collapse justify-content-end fs-8 hide-min-992" id="navbarSupportedContent">
            <div class="navbar-nav me-4 fw-500">
                <!--                        <div class="d-flex mt-4 hide-min-992">-->
                <!--                            <form class="d-flex w-100" role="search">-->
                <!--                                <input class="form-control py-0 rounded-0 " type="search" placeholder="Search"-->
                <!--                                       aria-label="Search">-->
                <!--                                <button class="btn btn-secondary px-2 py-0 rounded-0" type="submit">-->
                <!--                                    <i class="fa-solid fa-magnifying-glass fa-sm"></i></button>-->
                <!--                            </form>-->
                <!--                        </div>-->

                {{--                <a class=" nav-link px-2" aria-current="page" href="#">HOME</a>--}}
                <div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="{{ route('page', 'about-us') }}"
                       data-bs-auto-close="outside" aria-expanded="false">{{ __('nav.about') }}</a>
                    <div class="dropdown-menu shadow-sm mb-5 rounded" style="background-color: lightyellow">
                        {{--                                                <a class="dropdown-item" href="{{ route('page', 'about-us') }}">Learn About Us</a>--}}
                        <a class="dropdown-item" href="{{ route('front-achievers') }}">{{ __('nav.achievements') }}</a>
                        <a class="dropdown-item" href="{{ route('mission') }}">{{ __('nav.our_mission') }}</a>
                        <a class="dropdown-item" href="{{ route('aim') }}">{{ __('nav.aims_and_objectives') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('methodology') }}">{{ __('nav.methodology_and_mechanism') }}</a>
                        <a class="dropdown-item" href="{{ route('why') }}">{{ __('nav.why_dhyeya_ias') }}</a>
                        <a class="dropdown-item" href="{{ route('front-gallery') }}">{{ __('nav.gallery') }}</a>

                        {{--<a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#team-menu" role="button" aria-expanded="false"
                           aria-controls="team-menu">
                            Our Team
                        </a>
                        <div class="collapse ps-3" id="team-menu">
                            <a class="dropdown-item" href="{{ route('front-teams') }}">About Team</a>
                            <a class="dropdown-item" href="{{ route('directors') }}">Directors</a>
                            <a class="dropdown-item" href="{{ route('advisory') }}">Advisory Board</a>
                            <a class="dropdown-item" href="{{ route('administration') }}">Administration</a>
                            <a class="dropdown-item" href="{{ route('faculty') }}">Faculty</a>
                            <a class="dropdown-item" href="{{ route('team-panelist') }}">Mock Interview Panelist</a>
                        </div>--}}
                    </div>
                </div>

                <div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="{{ route('front-teams') }}" data-bs-auto-close="outside"
                       aria-expanded="false">{{ __('nav.team') }}</a>
                    <div class="dropdown-menu shadow-sm mb-5 rounded" style="background-color: lightyellow">
                        {{--                        <a class="dropdown-item" href="{{ route('front-teams') }}">About Team</a>--}}
                        <a class="dropdown-item" href="{{ route('directors') }}">{{ __('nav.directors') }}</a>
                        <a class="dropdown-item" href="{{ route('advisory') }}">{{ __('nav.advisory_board') }}</a>
                        <a class="dropdown-item" href="{{ route('administration') }}">{{ __('nav.administration') }}</a>
                        <a class="dropdown-item" href="{{ route('faculty') }}">{{ __('nav.faculty') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('team-panelist') }}">{{ __('nav.mock_interview_panelist') }}</a>
                    </div>
                </div>

                <div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="{{ route('front-courses') }}" data-bs-auto-close="outside"
                       aria-expanded="false">{{ __('nav.courses') }}</a>
                    <div class="dropdown-menu shadow-sm mb-5 rounded" style="background-color: lightyellow">
                        {{--                        <a class="dropdown-item" href="{{ route('front-courses') }}">Explore Our Courses</a>--}}
                        {{--                        <a class="dropdown-item" href="{{ route('page', 'classroom-programme') }}">{{ __('nav.classroom_programme') }}</a>--}}
                        <a class="dropdown-item"
                           href="{{ route('dhyeya-ias-udaan') }}">{{ __('nav.dhyeya_ias_udaan') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('front-pendrive-course') }}">{{ __('nav.online_pen_drive') }}</a>
                        {{--                        <a class="dropdown-item" href="{{ route('dlp') }}">{{ __('nav.distance_learning') }}</a>--}}
                        <a class="dropdown-item"
                           href="{{ route('front-online-courses') }}">{{ __('nav.online_courses') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('front-student-zone-batch') }}">{{ __('nav.offline_courses') }}</a>
                    </div>
                </div>

                {{--                -------------------test----------------}}
                <div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="{{ route('front-tests') }}" data-bs-auto-close="outside"
                       aria-expanded="false">{{ __('nav.test_series') }}</a>
                    <div class="dropdown-menu shadow-sm mb-5 rounded" style="background-color: lightyellow">
                        <a class="dropdown-item" href="{{ route('front-tests-type', 'main') }}">
                            {{ __('nav.test_series_main') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('front-tests-type', "prelims") }}">
                            {{ __('nav.test_series_prelims') }}
                        </a>
                    </div>
                </div>
                {{--                -------------------test----------------}}

                <a class="nav-link px-2" href="{{ route('front-centers') }}">{{ __('nav.centers') }}</a>
                {{--<a class=" nav-link px-2" aria-current="page" href="{{ route('front-centers') }}">CENTERS</a>--}}

                <div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="{{ route('front-student-zone') }}" aria-expanded="false">
                        {{ __('nav.student_zone') }}</a>
                    <div class="dropdown-menu shadow-sm mb-5 rounded" style="background-color: lightyellow">
                        {{--                        <a class="dropdown-item" href="{{ route('front-student-zone') }}">Our Student Zone</a>--}}
                        <a class="dropdown-item"
                           href="{{ route('front-student-zone-batch') }}">{{ __('nav.batch_details') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('front-student-zone-fee') }}">{{ __('nav.fee_details') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('front-student-zone-book') }}">{{ __('nav.books_and_notes') }}</a>
                        <a class="dropdown-item" href="{{ route('page', 'faqs') }}">{{ __('nav.upse_faqs') }}</a>
                        <a class="dropdown-item" href="{{ route('front-student-zone-exam') }}">{{ __('nav.exam') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('front-student-zone-brochure') }}">{{ __('nav.brochure_prospectus') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('front-student-zone-notification') }}">{{ __('nav.latest_notification') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('front-student-zone-result') }}">{{ __('nav.test_series_result') }}</a>
                    </div>
                </div>

                <div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="{{ route('front-affairs') }}" aria-expanded="false">
                        {{ __('nav.study_material') }}</a>
                    <div class="dropdown-menu shadow-sm mb-5 rounded" style="background-color: lightyellow">
                        {{--                        <a class="dropdown-item" href="{{ route('front-affairs') }}">Our Current Affairs</a>--}}
                        <a class="dropdown-item"
                           href="{{ route('front-affairs','daily-pre-pare') }}">{{ __('nav.daily_prepare') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('front-affairs','daily-current-affairs') }}">{{ __('nav.daily_news_analysis') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('front-affairs','daily-mcqs') }}">{{ __('nav.daily_mcqs') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('daily_static_mcqs') }}">{{ __('nav.daily_static_mcqs') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('front-affairs','Info-paedia') }}">{{ __('nav.info_pedia') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('brain-booster','brain-booster') }}">{{ __('nav.brain_booster') }}</a>
                        <a class="dropdown-item"
                           href="{{ route('front-affairs','air-debate') }}">{{ __('nav.daily_air_debate') }}</a>
                    </div>
                </div>

                <div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="{{route("download-page")}}"
                       aria-expanded="false">{{ __('nav.downloads') }}</a>
                    <div class="dropdown-menu shadow-sm mb-5 rounded" style="background-color: lightyellow">
                        {{--                        <a class="dropdown-item" href="{{route("download-page")}}">Download Section</a>--}}
                        <a class="dropdown-item"
                           href="{{route("class_notes")}}">{{ __('nav.class_notes') }}</a>
                        <a class="dropdown-item"
                           href="{{route("ncert_books")}}">{{ __('nav.ncert_books') }}</a>
                        <a class="dropdown-item"
                           href="{{route("magazine","perfect-7")}}">{{ __('nav.magazine.perfect') }}</a>
                        <a class="dropdown-item"
                           href="{{route("magazine","yojana-monthly-gist")}}">{{ __('nav.magazine.yojana') }}</a>
                        <a class="dropdown-item"
                           href="{{route("magazine","kurukshetra-monthly-gist")}}">{{ __('nav.magazine.kurukshetra') }}</a>
                        <a class="dropdown-item"
                           href="{{route("papers-archive")}}">{{ __('nav.papers') }}</a>
                        @foreach($primary_download_cat_slug as $category)
                            @if(!in_array($category->category_slug,["Class-Notes","NCERT-Books","magazine","papers"]))
                                <a class="dropdown-item"
                                   href="{{route("download-detail",$category->category_slug)}}">{{$category->category_name}}</a>
                            @endif
                        @endforeach
                    </div>
                </div>

                <a class="nav-link px-2" href="{{route('contact')}}" aria-expanded="false" href="#">{{ __('nav.contacts') }}</a>
                {{--<div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="{{route('contact')}}" aria-expanded="false"
                       href="#">{{ __('nav.contacts') }}</a>
                    <div class="dropdown-menu shadow-sm mb-5 rounded" style="background-color: lightyellow">
                        --}}{{--                        <a class="dropdown-item" aria-current="page" href="{{route('contact')}}">Contact Us</a>--}}{{--
                        --}}{{--                        <a class="dropdown-item" aria-current="page" href="{{ route('career') }}">{{ __('nav.career') }}</a>--}}{{--
                        --}}{{--                        <a class="dropdown-item" style="text-wrap: balance" aria-current="page" href="{{ route('dizvik') }}">{{ __('nav.join_dizvik_technologies') }}</a>--}}{{--
                        --}}{{--                        <a class="dropdown-item" href="{{ route('front-centers') }}">{{ __('nav.centers') }}</a>--}}{{--
                    </div>
                </div>--}}

                <div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="{{ route('dlp') }}">{{ __('nav.distance_learning') }}</a>
                    <div class="dropdown-menu shadow-sm mb-5 rounded end-0" style="background-color: lightyellow">
                        {{--                        <a class="dropdown-item" aria-current="page" href="{{route('contact')}}">Contact Us</a>--}}
                        <a class="dropdown-item" aria-current="page"
                           href="{{ route('dlp_upsc') }}">{{ __('nav.dlp_for_upsc') }}</a>
                        <a class="dropdown-item" aria-current="page"
                           href="{{ route('dlp_uppcs') }}">{{ __('nav.dlp_for_uppcs') }}</a>
                        <a class="dropdown-item" aria-current="page"
                           href="{{ route('dlp_bpsc') }}">{{ __('nav.dlp_for_bpsc') }}</a>
                    </div>
                </div>


                <a class="nav-link px-2 hide-min-992" aria-current="page" href="https://dhyeyaonlinestore.com/">
                    {{ __('nav.dhyeya_store') }}</a>
                <a class="nav-link px-2 hide-min-992" aria-current="page"
                   href="https://play.google.com/store/apps/details?id=co.shield.qzgct&pli=1">{{ __('nav.dhyeya_academy') }}</a>
            </div>
        </div>
    </div>
</nav>


<!--OffCanvas Menu-->
@include('front.off-canvas')
