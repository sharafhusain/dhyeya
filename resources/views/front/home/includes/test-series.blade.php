@if(count($tests_first))
    <div class="container">
        <h2 class="h2 text-primary text-center mt-4 pt-3">
            <span class="text-secondary fw-600" data-aos="fade-up">{{ __('homepage.epfo') }} </span>&
            <span class="text-secondary fw-600" data-aos="fade-up" data-aos-duration="2000"> {{ __('homepage.bpse') }} </span>{{ __('homepage.mains') }}
            <span class="text-secondary fw-600" data-aos="fade-up" data-aos-duration="2000"> {{ __('homepage.test') }} </span>{{ __('homepage.series') }}
        </h2>
        <p class="text-body-tertiary fs-9 text-center">{{ __('homepage.about_epfo_test_series') }}</p>

        <div class="row justify-content-center">
            @foreach($tests_first as $test)
                <div class="col-lg-4 col-sm-6">
                    <div class="card p-4 mt-5 text-center border-0 box-shadow-1 position-relative m-3 icon-box">
                        <div
                            class="position-absolute translate-middle start-50 top-0 rounded-circle bg-white d-flex border"
                            style="width:6.1rem;height:6.1rem;z-index:-1"></div>
                        <div class="position-absolute translate-middle start-50 top-0 rounded-circle bg-white d-flex"
                             style="width:6rem;height:6rem;">
                            <img class="card-img-top img-1 m-auto p-2" src="{{asset('img/test.png')}}" alt="image">
                        </div>
                        <div class="card-body mt-3">
                            {{--                        <pre>@dd($test->post->title)</pre>--}}
                            <h6 class="card-title mb-0">{{ $test->post->title }}</h6>
                            <p><span class="text-secondary fs-8 fst-italic">{{ $test->starting_date }}</span></p>
                            <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                               href="{{ route('front-test',$test->post->slug) }}" role="button">{{ __('homepage.view_details') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif

@if(count($tests_last))
    <div class="container">
        <h2 class="h2 text-primary text-center mt-4 pt-3">
            <span class="text-secondary fw-600" data-aos="fade-up">{{ __('homepage.upsc') }} </span>,
            <span class="text-secondary fw-600" data-aos="fade-up" data-aos-duration="2000"> {{ __('homepage.ias') }} </span>{{ __('homepage.and_state_psc') }}
            <span class="text-secondary fw-600" data-aos="fade-up" data-aos-duration="2000"> {{ __('homepage.test') }} </span>{{ __('homepage.series') }}
        </h2>
        <p class="text-body-tertiary fs-9 text-center">{{ __('homepage.about_test_series') }}</p>

        <div class="row justify-content-center">
            @foreach($tests_last as $test)
                <div class="col-lg-3 col-sm-6">
                    <div class="card p-4 mt-5 text-center border-0 box-shadow-1 position-relative m-3 icon-box">
                        <div
                            class="position-absolute translate-middle start-50 top-0 rounded-circle bg-white d-flex border"
                            style="width:6.1rem;height:6.1rem;z-index:-1"></div>
                        <div class="position-absolute translate-middle start-50 top-0 rounded-circle bg-white d-flex"
                             style="width:6rem;height:6rem;">
                            <img class="card-img-top img-1 m-auto p-2" src="{{asset('img/test.png')}}" alt="image">
                        </div>
                        <div class="card-body mt-3">
                            <h6 class="card-title mb-0">{{ $test->post->title }}</h6>
                            <p><span class="text-secondary fs-8 fst-italic">{{ $test->starting_date }}</span></p>
                            <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm"
                               href="{{ route('front-test', $test->post->slug) }}" role="button">{{ __('homepage.view_details') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
