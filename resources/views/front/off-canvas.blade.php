<div class="offcanvas offcanvas-start hide-min-992" data-bs-scroll="true" tabindex="-1" id="mobileMenu"
     aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <a class="navbar-brand ms-1" href="{{route('front-home')}}">
            <img src="{{asset('img/en_Logo.png')}}" alt="Logo" style="max-width:150px"></a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <nav class="navbar fs-8">
            <div class="navbar-nav">

                <a class=" nav-link p-2 py-2" aria-current="page" href="{{ route('front-home') }}">{{ __('offcanvas.home') }}</a>

                <div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">{{ __('offcanvas.about') }}</a>
                    <div class="dropdown-menu fs-8">
                        <a class="dropdown-item py-2" href="{{ route('page', 'about-us') }}">{{ __('offcanvas.learn_about_us') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-achievers') }}">{{ __('offcanvas.achievements') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('page', 'our-mission') }}">{{ __('offcanvas.our_mission') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('page', 'aims-and-objectives') }}">{{ __('offcanvas.aims_and_objectives') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('page', 'methodology-and-mechanism') }}">{{ __('offcanvas.methodology_and_mechanism') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('page', 'why-dhyeya-ias') }}">{{ __('offcanvas.why_dhyeya_ias') }}</a>
                    </div>
                </div>

                <div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">{{ __('offcanvas.team') }}</a>
                    <div class="dropdown-menu fs-8">
                        <a class="dropdown-item py-2" href="{{ route('front-teams') }}">{{ __('offcanvas.our_team') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('directors') }}">{{ __('offcanvas.directors') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('advisory') }}">{{ __('offcanvas.advisory') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('administration') }}">{{ __('offcanvas.administration') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('faculty') }}">{{ __('offcanvas.faculty') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('team-panelist') }}">{{ __('offcanvas.mock_interview_panelist') }}</a>
                    </div>
                </div>

                <div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">{{ __('offcanvas.courses') }}</a>
                    <div class="dropdown-menu fs-8">
                        <a class="dropdown-item py-2" href="{{ route('front-courses') }}">{{ __('offcanvas.our_courses') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('page', 'classroom-programme') }}">{{ __('offcanvas.classroom_programme') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('dhyeya-ias-udaan') }}">{{ __('offcanvas.dhyeya_ias_udaan') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-pendrive-course') }}">{{ __('offcanvas.online_pen_drive') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('dlp') }}">{{ __('offcanvas.distance_learning') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-online-courses') }}">{{ __('offcanvas.online_courses') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-student-zone-batch') }}">{{ __('offcanvas.offline_courses') }}</a>
                    </div>
                </div>

                <a class=" nav-link p-2 py-2" aria-current="page" href="{{ route('front-tests') }}">{{ __('offcanvas.test_series') }}</a>

                <a class=" nav-link p-2 py-2" aria-current="page" href="{{ route('front-centers') }}">{{ __('offcanvas.centers') }}</a>

                <div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">{{ __('offcanvas.student_zone') }}</a>
                    <div class="dropdown-menu fs-8">
                        <a class="dropdown-item py-2" href="{{ route('front-student-zone') }}">{{ __('offcanvas.explore_student_zone') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-student-zone-batch') }}">{{ __('offcanvas.batch_details') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-student-zone-fee') }}">{{ __('offcanvas.fee_details') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-student-zone-book') }}">{{ __('offcanvas.books_and_notes') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('page', 'faqs') }}">{{ __('offcanvas.upse_faqs') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-student-zone-exam') }}">{{ __('offcanvas.exam') }}</a>
                    </div>
                </div>

                <div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">{{ __('offcanvas.current_affairs') }}</a>
                    <div class="dropdown-menu fs-8">
                        <a class="dropdown-item py-2" href="{{ route('front-affairs') }}">{{ __('offcanvas.explore_current_affairs') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-affairs','daily-mcqs') }}">{{ __('offcanvas.daily_mcqs') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-affairs','Info-paedia') }}">{{ __('offcanvas.info_pedia') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-affairs','daily-pre-pare') }}">{{ __('offcanvas.daily_prepare') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-affairs','brain-booster') }}">{{ __('offcanvas.brain_booster') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-affairs','air-debate') }}">{{ __('offcanvas.daily_air_debate') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-affairs','daily-static-mcqs') }}">{{ __('offcanvas.daily_static_mcqs') }}</a>
                        <a class="dropdown-item py-2" href="{{ route('front-affairs','daily-current-affairs') }}">{{ __('offcanvas.daily_news_analysis') }}</a>
                    </div>
                </div>

                <div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">{{ __('offcanvas.downloads') }}</a>
                    <div class="dropdown-menu fs-8">
                        {{--                        <a class="dropdown-item" href="{{route("download-page")}}">Download Section</a>--}}
                        <a class="dropdown-item py-2"
                           href="{{route("class_notes")}}">{{ __('offcanvas.class_notes') }}</a>
                        <a class="dropdown-item py-2"
                           href="{{route("ncert_books")}}">{{ __('offcanvas.ncert_books') }}</a>
                        <a class="dropdown-item py-2"
                        <a class="dropdown-item" href="{{route("magazine","perfect-7")}}">{{ __('nav.magazine.perfect') }}</a>

                        <a class="dropdown-item" href="{{route("magazine","yojana-monthly-gist")}}">{{ __('nav.magazine.yojana') }}</a>
                        <a class="dropdown-item" href="{{route("magazine","kurukshetra-monthly-gist")}}">{{ __('nav.magazine.kurukshetra') }}</a>
                        <a class="dropdown-item py-2"
                           href="{{route("papers")}}">{{ __('offcanvas.papers') }}</a>
                        @foreach($primary_download_cat_slug as $category)
                            @if(!in_array($category->category_slug,["Class-Notes","NCERT-Books","magazine","papers"]))
                                <a class="dropdown-item py-2"
                                   href="{{route("download-detail",$category->category_slug)}}">{{$category->category_name}}</a>
                            @endif
                        @endforeach
                    </div>
                </div>

                {{--<div class="dropdown px-2">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">{{ __('offcanvas.contacts') }}</a>
                    <div class="dropdown-menu fs-8">
                        <a class="dropdown-item py-2" href="{{ route('contact')}}">{{ __('offcanvas.contact_us') }}</a>
                        <a class="dropdown-item py-2" aria-current="page" href="{{ route('career') }}">{{ __('offcanvas.career') }}</a>
                        <a class="dropdown-item py-2" aria-current="page" href="{{ route('dizvik') }}">{{ __('offcanvas.join_dizvik_technologies') }}</a>
                    </div>
                </div>--}}

                <a class="nav-link p-2 py-2" href="{{ route('contact')}}">{{ __('offcanvas.contact_us') }}</a>
                <a class="nav-link p-2 py-2" aria-current="page" href="{{ route('career') }}">{{ __('offcanvas.career') }}</a>
                <a class="nav-link p-2 py-2" aria-current="page" href="{{ route('dizvik') }}">{{ __('offcanvas.join_dizvik_technologies') }}</a>
                <a class="nav-link p-2 py-2 hide-min-992" aria-current="page" href="https://dhyeyaonlinestore.com/">
                    {{ __('offcanvas.dhyeya_store') }}</a>
                <a class="nav-link p-2 py-2 hide-min-992" aria-current="page"
                   href="https://play.google.com/store/apps/details?id=co.shield.qzgct&pli=1">{{ __('offcanvas.dhyeya_academy') }}</a>

            </div>
        </nav>
    </div>
</div>
