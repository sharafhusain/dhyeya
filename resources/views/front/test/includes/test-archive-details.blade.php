@extends('front.test.index')
@section('tests')
    {{--    @dd($tests->pluck('test_type')->first())--}}
    <div>
        <a href="{{ route('front-tests') }}" class="btn btn-sm fs-9 p-0 bold-hover">
            <i class="fa-solid fa-arrow-left"></i> {{ __('test.back') }}
        </a>
    </div>   
    <div class="mt-4">
        <h4 class="mb-0">{{ $tests->pluck('test_type')->first() }}</h4>
        <p class="text-muted fw-light sidebar-text-bellow-line mb-4">{{ __('test.explore_dhyeya') }}
            {{$tests->pluck('test_type')->first()}} {{ __('test.test_series') }}</p>
        <div class="row g-4">    
            @foreach($tests as $test)
                <div class="col-md-4">
                    <a href="{{ route('front-test',$test->post->slug) }}" class="nav-link">
                        <div
                            class="card py-4 mt-5 text-center border-0 box-shadow-1 position-relative">
                            <div
                                class="position-absolute translate-middle start-50 top-0 rounded-circle bg-white d-flex border"
                                style="width:6.1rem;height:6.1rem;z-index:-1"></div>
                            <div
                                class="position-absolute translate-middle start-50 top-0 rounded-circle bg-white d-flex"
                                style="width:6rem;height:6rem;">
                                <img class="card-img-top img-1 m-auto p-2"
                                     src="{{asset('img/test.png')}}"
                                     alt="image">
                            </div>
                            <div class="card-body mt-3">
                                <h5 class="card-title mb-3">{{$test["post"]["title"]}}</h5>
                                <div class="px-3">
                                    <div class="row">
                                        <div class="col-6 p-0">
                                            <p class="mb-0 text-end">{{ __('test.starting_date') }} :</p>
                                        </div>
                                        <div class="col-6 p-0">
                                                                <span
                                                                    class="text-muted fw-light">{{$test["starting_date"]}}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 p-0">
                                            <p class="mb-0 text-end">{{ __('test.total_no_of_test') }} :</p>
                                        </div>
                                        <div class="col-6 p-0">
                                                                <span
                                                                    class="text-muted fw-light">{{$test["total_no_of_test"]}}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 p-0">
                                            <p class="mb-0 text-end">{{ __('test.test_medium') }} :</p>
                                        </div>
                                        <div class="col-6 p-0">
                                                                <span
                                                                    class="text-muted fw-light">{{$test["medium"]}}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 p-0">
                                            <p class="mb-0 text-end">{{ __('test.test') }} :</p>
                                        </div>
                                        <div class="col-6 p-0">
                                                                <span
                                                                    class="text-muted fw-light">{{$test["mode"]}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
