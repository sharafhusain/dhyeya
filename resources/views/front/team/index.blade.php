@extends('layouts.front')
@section('content_ui')
    {{--    @dd(\Illuminate\Support\Facades\Route::currentRouteName())--}}
    @if(request()->route()->getName() == 'front-teams')
        <section class="my-5" id="team">
            <div class="row justify-content-center g-4">

                <div class="col-md-4">
                    <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                        <img class="card-img-top img-3 m-auto" src="{{asset('img/directors.png')}}" alt="image">
                        <div class="card-body">
                            <h5 class="card-title fw-600 text-primary">{{ __('team.directors') }}</h5>
                            <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{route("directors")}}">
                                {{ __('team.view_details') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                        <img class="card-img-top img-3 m-auto" src="{{asset('img/advisory.png')}}" alt="image">
                        <div class="card-body">
                            <h5 class="card-title fw-600 text-primary">{{ __('team.advisory_board') }}</h5>
                            <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{route("advisory")}}">
                                {{ __('team.view_details') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                        <img class="card-img-top img-3 m-auto" src="{{asset('img/administration.png')}}" alt="image">
                        <div class="card-body">
                            <h5 class="card-title fw-600 text-primary">{{ __('team.administrators') }}</h5>
                            <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{route("administration")}}">
                                {{ __('team.view_details') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                        <img class="card-img-top img-3 m-auto" src="{{asset('img/faculty.png')}}" alt="image">
                        <div class="card-body">
                            <h5 class="card-title fw-600 text-primary">{{ __('team.faculty') }}</h5>
                            <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{route("faculty")}}">
                                {{ __('team.view_details') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                        <img class="card-img-top img-3 m-auto" src="{{asset('img/panelist.png')}}" alt="image">
                        <div class="card-body">
                            <h5 class="card-title fw-600 text-primary">{{ __('team.mock_interview_panelist') }}</h5>
                            <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{route("team-panelist")}}">
                                {{ __('team.view_details') }}</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @else
        @yield('team-content')
    @endif
@endsection
