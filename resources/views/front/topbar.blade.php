<div class="nav nav-pills bg-primary p-2 fs-8 fw-500 justify-content-center justify-content-lg-between pad-pills">

    <div class="d-flex">
        <a class="nav-link px-2 py-1 mx-1" href="tel:{{explode(",",$mobilenumber)[0]}}" role="button"
           aria-expanded="false">
            <i class="fa-solid fa-phone"></i> {{ __('nav.call') }}</a>
        @if(app()->getLocale() == 'en')
            <a class="nav-link px-2 py-1 mx-1 bg-warning locale" href="{{route('front-home', ['locale' => 'hi'])}}" aria-expanded="false">अ</a>
        @else
            <a class="nav-link px-2 py-1 mx-1 bg-warning locale" href="{{route('front-home', ['locale' => 'en'])}}" aria-expanded="false">A</a>
        @endif

        <a class="nav-link px-2 py-1 mx-1" href="https://play.google.com/store/apps/details?id=co.shield.qzgct&pli=1"
           role="button"
           aria-expanded="false"><i class="fa-solid fa-users"></i> {{ __('nav.dhyeya_ias_online') }}</a>
    </div>
    <div class="d-flex hide-max-992">
        {{--        <div class="nav-item dropdown">--}}
        {{--            <a class="nav-link dropdown-toggle px-2 py-1 mx-1" data-bs-toggle="dropdown" href="#" role="button"--}}
        {{--               aria-expanded="false">Current Affairs</a>--}}
        {{--            <ul class="dropdown-menu">--}}
        {{--                <li><a class="dropdown-item" href="#">MCQs</a></li>--}}
        {{--                <li><a class="dropdown-item" href="#">Articles</a></li>--}}
        {{--            </ul>--}}
        {{--        </div>--}}
        <a class="nav-link px-2 py-1 mx-1" aria-current="page" href="{{ route('career') }}">{{ __('nav.career') }}</a>
        <a class="nav-link px-2 py-1 mx-1" style="text-wrap: balance" aria-current="page" href="{{ route('dizvik') }}">{{ __('nav.join_dizvik_technologies') }}</a>
        <a class="nav-link px-2 py-1 mx-1" aria-current="page" href="https://dhyeyaonlinestore.com/">{{ __('nav.dhyeya_store') }}</a>
        <a class="nav-link px-2 py-1 mx-1" aria-current="page" href="#">{{ __('nav.dhyeya_academy') }}</a>
        <a class="nav-link px-2 py-1 mx-1 rounded-1 searchButton" role="button" data-bs-toggle="collapse"
           data-bs-target="#search" aria-expanded="false" aria-controls="search">
            <i class="fa-solid fa-magnifying-glass fa-sm"></i>
        </a>
        {{--        @auth()--}}
        @if(!Auth::check())
            <a class="nav-link px-2 py-1 mx-1" aria-current="page" href="{{route(("login-guest"))}}">
                Login
            </a>
        @elseif(Auth::check())
            <a class="nav-link px-2 py-1 mx-1" aria-current="page" href="{{route(("logout-guest"))}}">
                Logout
            </a>
        @endif
    </div>
</div>
