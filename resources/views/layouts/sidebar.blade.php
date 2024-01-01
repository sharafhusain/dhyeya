<nav class="sb-sidenav accordion sb-sidenav-dark bg-primary" id="sidenavAccordion">
    <div class="sb-sidenav-menu fs-8">
        <div class="nav">
            <a class="nav-link @if( request()->routeIs('dashboard')) active @endif" href="{{route('dashboard')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <a class="nav-link @if( request()->routeIs('slider', 'create-slider', 'edit-slider')) active @endif"
               href="{{route('slider')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-sliders"></i></div>
                Slider
            </a>

            <a class="nav-link @if( request()->routeIs('gallery', 'create-gallery', 'edit-gallery')) active @endif"
               href="{{route('gallery')}}">
                <div class="sb-nav-link-icon"><i class="fa-regular fa-image"></i></div>
                Gallery
            </a>

            <a class="nav-link @if( request()->routeIs('achievers', 'create-achievers', 'edit-achievers')) active @endif"
               href="{{route('achievers',"achiever")}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-trophy"></i></div>
                Achievers
            </a>

            <a class="nav-link @if( request()->routeIs('courses', 'create-courses', 'edit-courses', 'courses-installment', 'create-courses-installment', 'edit-courses-installment', 'feature', 'create-feature', 'edit-feature', 'courses-faq', 'create-courses-faq', 'edit-courses-faq')) active @endif"
               href="{{route('courses')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Courses
            </a>

            <a class="nav-link @if( request()->routeIs('notification', 'create-notification', 'edit-notification')) active @endif"
               href="{{route('notification')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-bell"></i></div>
                Notifications
            </a>

            <a class="nav-link @if( request()->routeIs('batch', 'create-batch', 'edit-batch')) active @endif"
               href="{{route('batch')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-certificate"></i></div>
                Batch Details
            </a>

            <a class="nav-link @if( request()->routeIs('test', 'create-test', 'edit-test', 'test-paper', 'create-test-paper', 'edit-test-paper', 'schedule', 'create-schedule', 'edit-schedule','fee-detail', 'create-fee-detail', 'edit-fee-detail', 'test-feature', 'create-test-feature', 'edit-test-feature', '')) active @endif"
               href="{{route('test')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-pen"></i></div>
                Test Series
            </a>

            <div class="btn-group">
                <a class="nav-link w-75 @if( request()->routeIs('affairs', 'create-affairs', 'edit-affairs')) active @endif"
                   href="#">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-clock"></i></div>
                    Current Affairs
                </a>
                <button class="btn btn-primary dropdown-toggle dropdown-toggle-split collapsed"
                        data-bs-toggle="collapse" data-bs-target="#collapseAffairs"
                        aria-expanded="false" aria-controls="collapseAffairs">
                </button>
            </div>
            <div class="collapse @if( request()->route()->type || request()->routeIs('books')) show @endif"
                 id="collapseAffairs" aria-labelledby="headingOne"
                 data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link @if(request()->route()->type == 'daily-pre-pare')) active @endif" href="{{route('affairs',"daily-pre-pare")}}">- Prepare</a>
                    <a class="nav-link @if(request()->route()->type == 'daily-current-affairs')) active @endif" href="{{route('affairs',"daily-current-affairs")}}">- Daily News Analysis</a>
                    <a class="nav-link @if(request()->route()->type == 'daily-mcqs')) active @endif" href="{{route('affairs',"daily-mcqs")}}">- Daily Current MCQS</a>
                    <a class="nav-link @if(request()->route()->type == 'daily-static-mcqs')) active @endif" href="{{route('affairs',"daily-static-mcqs")}}">- Daily Static MCQs</a>
                    <a class="nav-link @if(request()->route()->type == 'Info-paedia')) active @endif" href="{{route('affairs',"Info-paedia")}}">- Info-paedia</a>
                    <a class="nav-link @if(request()->route()->type == 'brain-booster')) active @endif" href="{{route('affairs',"brain-booster")}}">- Brain Booster</a>
                    <a class="nav-link @if(request()->route()->type == 'air-debate')) active @endif" href="{{route('affairs',"air-debate")}}">- AIR-Debate</a>
                    {{--                    <a class="nav-link" href="{{route('affairs',"current-affairs")}}">- Current-Affairs</a>--}}
                    <a class="nav-link @if(request()->routeIs('books')) active @endif" href="{{route("books")}}">- Book Section</a>
                </nav>
            </div>
            {{--            <div class="btn-group">--}}
            {{--                <a class="nav-link w-75 @if( request()->routeIs('downloads', 'create-downloads', 'edit-downloads')) active @endif"--}}
            {{--                   href="#">--}}
            {{--                    <div class="sb-nav-link-icon"><i class="fa-solid fa-clock"></i></div>--}}
            {{--                    Downloads--}}
            {{--                </a>--}}
            {{--                <button class="btn btn-primary dropdown-toggle dropdown-toggle-split collapsed"--}}
            {{--                        data-bs-toggle="collapse"--}}
            {{--                        data-bs-target="#collapseDownloads"--}}
            {{--                        aria-expanded="false" aria-controls="collapseDownloads">--}}
            {{--                </button>--}}
            {{--            </div>--}}
            {{--            <div class="collapse" id="collapseDownloads" aria-labelledby="headingOne"--}}
            {{--                 data-bs-parent="#sidenavAccordion">--}}
            {{--                <nav class="sb-sidenav-menu-nested nav">--}}
            {{--                    <a class="nav-link" href="{{route('affairs',"daily-pre-pare")}}">- Class Notes PDF</a>--}}
            {{--                    <a class="nav-link" href="{{route('affairs',"daily-current-affairs")}}">- NCERT Books</a>--}}
            {{--                    <a class="nav-link" href="{{route('affairs',"Info-paedia")}}">- Percent-7 Magazine</a>--}}
            {{--                    <a class="nav-link" href="{{route('affairs',"current-affairs")}}">- Current-Affairs</a>--}}
            {{--                    <a class="nav-link" href="{{route('affairs',"air-debate")}}">- Yojana Gist</a>--}}
            {{--                    <a class="nav-link" href="{{route('affairs',"daily-mcqs")}}">- Kurukshetra Gist</a>--}}
            {{--                    <a class="nav-link" href="{{route('affairs',"daily-static-mcqs")}}">- Papers</a>--}}
            {{--                    <a class="nav-link" href="{{route('affairs',"brain-booster")}}">- Exam Syllabus</a>--}}
            {{--                    <a class="nav-link" href="{{route('affairs',"brain-booster")}}">- UPSC Topper Answer Copies</a>--}}
            {{--                </nav>--}}
            {{--            </div>--}}

            <div class="btn-group">
                <a class="nav-link w-75 @if( request()->routeIs('exam', 'create-exam', 'edit-exam', 'exam-category', 'exam-create-category', 'exam-edit-category')) active @endif"
                   href="{{route('exam')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard"></i></div>
                    Exams
                </a>
                <button class="btn btn-primary dropdown-toggle dropdown-toggle-split collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseExams"
                        aria-expanded="false" aria-controls="collapseExams">
                    {{--                    <i class="fas fa-angle-down"></i>--}}
                </button>
            </div>

            <div
                class="collapse @if( request()->routeIs('exam-category', 'exam-create-category', 'exam-edit-category')) show @endif"
                id="collapseExams" aria-labelledby="headingOne"
                data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    {{--                    <a class="nav-link" href="{{route('exam')}}">Exams</a>--}}
                    <a class="nav-link @if( request()->routeIs('exam-category', 'exam-create-category', 'exam-edit-category')) active @endif"
                       href="{{route('exam-category')}}">- Manage Exam Category</a>
                </nav>
            </div>

            <a class="nav-link @if( request()->routeIs('center', 'create-center', 'edit-center')) active @endif"
               href="{{route('center')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-circle"></i></div>
                Centers
            </a>

            {{--}}<a class="nav-link @if( request()->routeIs('youtube', 'create-youtube', 'edit-youtube')) active @endif"
               href="{{route('youtube')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Youtube Playlist
            </a>

            <a class="nav-link @if( request()->routeIs('store', 'create-store', 'edit-store')) active @endif"
               href="{{route('store')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Store
            </a>{{--}}

            <a class="nav-link @if( request()->routeIs('team', 'create-team', 'edit-team')) active @endif"
               href="{{route('team')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"></i></div>
                Team
            </a>

{{--            <a class="nav-link @if( request()->routeIs('menu')) active @endif"--}}
{{--               href="{{route('menu')}}">--}}
{{--                <div class="sb-nav-link-icon"><i class="fa-solid fa-grip-lines"></i></div>--}}
{{--                Menu--}}
{{--            </a>--}}

            <a class="nav-link @if( request()->routeIs('toppers', 'create-toppers', 'edit-toppers')) active @endif"
               href="{{route('toppers',["topper"])}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                Toppers
            </a>

            <a class="nav-link @if( request()->routeIs('post', 'create-post', 'edit-post')) active @endif"
               href="{{route('post')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-thumbtack"></i></div>
                Posts
            </a>
            <a class="nav-link @if( request()->routeIs('pages', 'create-page', 'edit-page')) active @endif"
               href="{{route('pages')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-layer-group"></i></div>
                Page
            </a>
            <a class="nav-link @if( request()->routeIs('static_pages', 'create-page', 'edit-page')) active @endif"
               href="{{route('static-pages')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-layer-group"></i></div>
                Static Page
            </a>

            <a class="nav-link @if( request()->routeIs('category', 'create-category', 'edit-category')) active @endif"
               href="{{route('category')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Category
            </a>

            {{--            <a class="nav-link @if( request()->routeIs('view-downloads', 'create-downloads', 'edit-downloads')) active @endif"--}}
            {{--               href="{{route('view-downloads')}}">--}}
            {{--                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>--}}
            {{--                Downloads Section--}}
            {{--            </a>--}}

            {{--            ------------------------------}}
            <div class="btn-group">
                <a class="nav-link w-75 @if( request()->routeIs('view-downloads', 'download-category', 'download-create-category', 'download-edit-category')) active @endif">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard"></i></div>
                    Downloads
                </a>
                <button class="btn btn-primary dropdown-toggle dropdown-toggle-split collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseDownloads"
                        aria-expanded="false" aria-controls="collapseDownloads">
                </button>
            </div>
{{--@dd($download_section_categories->pluck('id')->first())--}}
            <div class="collapse @if(in_array(request()->route()?->parent_category?->id, $download_section_categories->pluck('id')->toArray())) show @endif"
                 id="collapseDownloads" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                @foreach($download_section_categories as $cat)
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link @if(request()->route()?->parent_category?->id == $cat->id) active @endif"
                           href="{{route('view-downloads',[$cat->id])}}">{{$cat->category_name}}</a>
                    </nav>
                @endforeach
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('download-category')}}">- Manage Page & Category</a>
                </nav>
            </div>
            {{--            ------------------------------}}

            <a class="nav-link @if( request()->routeIs('vacancies', 'create-vacancies', 'edit-vacancies')) active @endif"
               href="{{route('vacancies')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-briefcase"></i></div>
                Job Vacancies
            </a>

            <a class="nav-link @if( request()->routeIs('subject', 'create-subject', 'edit-subject')) active @endif"
               href="{{route('subject')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-book"></i></div>
                Subjects
            </a>

            <a class="nav-link @if( request()->routeIs('registeredStudent', 'edit-registeredStudent')) active @endif"
               href="{{route('registeredStudent')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-address-card"></i></div>
                Registered Student's
            </a>


        </div>
    </div>

</nav>
