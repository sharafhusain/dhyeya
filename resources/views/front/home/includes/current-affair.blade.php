<style>
    .cta-button {
        display: inline-block;
        padding: 15px 30px;
        background-color: var(--bs-white); /* Use the white color from :root */
        color: var(--bs-primary); /* Use the primary color from :root */
        font-size: 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .cta-button:hover {
        background-color: var(--bs-secondary); /* Use the secondary color from :root */
        color: var(--bs-white); /* Use the white color from :root */
    }
</style>
<div class="container">
    <h2 class="h2 text-primary text-center mt-4 pt-3">{{ __('homepage.study') }} <span class="text-secondary fw-600"
                                                                    data-aos="fade-up">{{ __('homepage.material') }}</span>
    </h2>
    <p class="text-body-tertiary fs-9 text-center">{{ __('homepage.about_study') }}</p>

    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-3 my-2 text-center border-0 box-shadow-1 icon-box" style="min-height:186px;">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/preparation.png')}}" alt="image">
                <div class="card-body p-2">
                    <h6 class="card-title">{{ __('homepage.daily_pre_pare') }}</h6>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                       href="{{route('front-affairs','daily-pre-pare')}}">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-3 my-2 text-center border-0 box-shadow-1 icon-box" style="min-height:186px;">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/cross.png')}}" alt="image">
                <div class="card-body p-2">
                    <h6 class="card-title">{{ __('homepage.daily_mcqs') }}</h6>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                       href="{{route('front-affairs','daily-mcqs')}}">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-3 my-2 text-center border-0 box-shadow-1 icon-box" style="min-height:186px;">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/infopedia.png')}}" alt="image">
                <div class="card-body p-2">
                    <h6 class="card-title">{{ __('homepage.info_pedia') }}</h6>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                       href="{{ route('front-affairs','Info-paedia') }}">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-3 my-2 text-center border-0 box-shadow-1 icon-box" style="min-height:186px;">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/brain.png')}}" alt="image">
                <div class="card-body p-2">
                    <h6 class="card-title">{{ __('homepage.brain_booster') }}</h6>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                       href="{{ route('front-affairs','brain-booster') }}">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-3 my-2 text-center border-0 box-shadow-1 icon-box" style="min-height:186px;">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/debate.png')}}" alt="image">
                <div class="card-body p-2">
                    <h6 class="card-title">{{ __('homepage.daily_air_debate') }}</h6>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                       href="{{ route('front-affairs','air-debate') }}">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-3 my-2 text-center border-0 box-shadow-1 icon-box" style="min-height:186px;">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/static_mcq.png')}}" alt="image">
                <div class="card-body p-2">
                    <h6 class="card-title">{{ __('homepage.daily_static_mcqs') }}</h6>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                       href="{{ route('front-affairs','daily-static-mcqs') }}">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-3 my-2 text-center border-0 box-shadow-1 icon-box" style="min-height:186px;">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/article.png')}}" alt="image">
                <div class="card-body p-2">
                    <h6 class="card-title">{{ __('homepage.daily_news_analysis') }}</h6>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                       href="{{ route('front-affairs','daily-current-affairs') }}">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-3 my-3 text-center bg-primary">
        <div class="d-flex align-items-center justify-content-center flex-column mx-2">
            <i class="fa-brands fa-android mx-2 shake-20n" style="color: #0da061;font-size:100px"></i>
            <div class="text-white">
                <h1 class="mb-0">{{ __('homepage.download_our_android_app') }}</h1>
                <p class="mb-0 text-body-tertiary">{{ __('homepage.get_full_access') }}</p>
            </div>
        </div>
        <a href="{{ $social_media_links->app_link }}" class="btn btn-ex-blue-outline mt-2" target="_blank">{{ __('homepage.download_now') }}</a>
    </div>

</div>
