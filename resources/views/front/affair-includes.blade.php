<div class="row justify-content-center g-4 my-5">
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card p-3 text-center border-0 box-shadow-1 icon-box" style="min-height:186px;">
            <img class="card-img-top img-1 m-auto" src="{{asset('img/preparation.png')}}" alt="image">
            <div class="card-body p-2">
                <h6 class="card-title">{{ __('front.daily_pre_pare') }}</h6>
                <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                   href="{{route('front-affairs','daily-pre-pare')}}">{{ __('front.view_details') }}</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card p-3 text-center border-0 box-shadow-1 icon-box" style="min-height:186px;">
            <img class="card-img-top img-1 m-auto" src="{{asset('img/cross.png')}}" alt="image">
            <div class="card-body p-2">
                <h6 class="card-title">{{ __('front.daily_mcqs') }}</h6>
                <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                   href="{{route('front-affairs','daily-mcqs')}}">{{ __('front.view_details') }}</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card p-3 text-center border-0 box-shadow-1 icon-box" style="min-height:186px;">
            <img class="card-img-top img-1 m-auto" src="{{asset('img/infopedia.png')}}" alt="image">
            <div class="card-body p-2">
                <h6 class="card-title">{{ __('front.info_pedia') }}</h6>
                <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                   href="{{ route('front-affairs','Info-paedia') }}">{{ __('front.view_details') }}</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card p-3 text-center border-0 box-shadow-1 icon-box" style="min-height:186px;">
            <img class="card-img-top img-1 m-auto" src="{{asset('img/brain.png')}}" alt="image">
            <div class="card-body p-2">
                <h6 class="card-title">{{ __('front.brain_booster') }}</h6>
                <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                   href="{{ route('front-affairs','brain-booster') }}">{{ __('front.view_details') }}</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card p-3 text-center border-0 box-shadow-1 icon-box" style="min-height:186px;">
            <img class="card-img-top img-1 m-auto" src="{{asset('img/debate.png')}}" alt="image">
            <div class="card-body p-2">
                <h6 class="card-title">{{ __('front.daily_air_debate') }}</h6>
                <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                   href="{{ route('front-affairs','air-debate') }}">{{ __('front.view_details') }}</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card p-3 text-center border-0 box-shadow-1 icon-box" style="min-height:186px;">
            <img class="card-img-top img-1 m-auto" src="{{asset('img/static_mcq.png')}}" alt="image">
            <div class="card-body p-2">
                <h6 class="card-title">{{ __('front.daily_static_mcqs') }}</h6>
                <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                   href="{{ route('front-affairs','daily-static-mcqs') }}">{{ __('front.view_details') }}</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card p-3 text-center border-0 box-shadow-1 icon-box" style="min-height:186px;">
            <img class="card-img-top img-1 m-auto" src="{{asset('img/article.png')}}" alt="image">
            <div class="card-body p-2">
                <h6 class="card-title">{{ __('front.daily_news_analysis') }}</h6>
                <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                   href="{{ route('front-affairs','daily-current-affairs') }}">{{ __('front.view_details') }}</a>
            </div>
        </div>
    </div>
</div>
