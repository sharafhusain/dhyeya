<div class="container">
    <h2 class="h2 text-primary text-center pt-2">{{ __('homepage.our') }}
        <span class="text-secondary fw-600" data-aos="fade-up">{{ __('homepage.courses') }}</span>
    </h2>
    <p class="text-body-tertiary fs-9 text-center">{{ __('homepage.about_courses') }}</p>

    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-4 text-center border-0 box-shadow-1 my-2 icon-box">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/classroom.png')}}" alt="image" style="height: 80px">
                <div class="card-body">
                    <h6 class="card-title text-nowrap">{{ __('homepage.classroom_programme') }}</h6>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                       href="{{ route('page', 'classroom-programme') }}" role="button">
                        {{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-4 text-center border-0 box-shadow-1 my-2 icon-box">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/udaan.jpeg')}}" alt="image" style="height: 80px">
                <div class="card-body">
                    <h6 class="card-title">{{ __('homepage.dhyeya_ias_udaan') }}</h6>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{ route('dhyeya-ias-udaan') }}"
                       role="button">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-4 text-center border-0 box-shadow-1 my-2 icon-box">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/pendrive.png')}}" alt="image" style="height: 80px">
                <div class="card-body">
                    <h6 class="card-title">{{ __('homepage.online_pen_drive') }}</h6>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                       href="{{ route('front-pendrive-course') }}" role="button">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-4 text-center border-0 box-shadow-1 my-2 icon-box">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/distance-learning.png')}}" alt="image" style="height: 80px">
                <div class="card-body">
                    <h6 class="card-title">{{ __('homepage.distance_learning') }}</h6>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{ route('dlp') }}"
                       role="button">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-4 text-center border-0 box-shadow-1 my-2 icon-box">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/online-lesson.png')}}" alt="image" style="height: 80px">
                <div class="card-body">
                    <h6 class="card-title">{{ __('homepage.online_courses') }}</h6>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                       href="{{ route('front-online-courses') }}" role="button">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-4 text-center border-0 box-shadow-1 my-2 icon-box">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/books.png')}}" alt="image" style="height: 80px">
                <div class="card-body">
                    <h6 class="card-title">{{ __('homepage.offline_courses') }}</h6>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                       href="{{ route('front-student-zone-batch') }}" role="button">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
