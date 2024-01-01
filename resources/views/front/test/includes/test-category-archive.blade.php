@extends('front.test.index')
@section('tests')
    @foreach($tests as $group => $test_collections)
        {{--            @dd(explode("/",$group)[1])--}}
        <div class="mt-5">
            <h4 class="mb-0">{{$group}}</h4>

            <p class="text-muted fw-light sidebar-text-bellow-line mb-4">{{ __('test.explore_dhyeya') }}
                {{$group}} {{ __('test.test_series') }}</p>
            <div class="row g-4">
                {{--                                    only to display only three cards on screen --}}
                    <?php $display_test_card_on_Screen = 0 ?>
                @foreach($test_collections as $test)
                        <?php $display_test_card_on_Screen += 1 ?>
                    <div class="col-md-6 col-lg-4">
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
                                    <div class="px-3 text-nowrap">
                                        <div class="row">
                                            <div class="col-6 p-0">
                                                <p class="mb-0 text-end">{{ __('test.starting_date') }} :</p>
                                            </div>
                                            <div class="col-6 p-0">
                                                <span class="text-muted fw-light">{{$test["starting_date"]}}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 p-0">
                                                <p class="mb-0 text-end">{{ __('test.total_no_of_test') }} :</p>
                                            </div>
                                            <div class="col-6 p-0">
                                                <span class="text-muted fw-light">{{$test["total_no_of_test"]}}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 p-0">
                                                <p class="mb-0 text-end">{{ __('test.test_medium') }} :</p>
                                            </div>
                                            <div class="col-6 p-0">
                                                <span class="text-muted fw-light">{{$test["medium"]}}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 p-0">
                                                <p class="mb-0 text-end">{{ __('test.test') }} :</p>
                                            </div>
                                            <div class="col-6 p-0">
                                                <span class="text-muted fw-light">{{$test["mode"]}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @if($display_test_card_on_Screen==3)
                        @break
                    @endif

                @endforeach
            </div>
            @if($test_collections->count()>3)
                <div class="my-3 text-center">
                    @php( $search_str = explode("/",$group)[1]  ?? explode("/",$group)[0])
                        <a href="{{route("front-tests-archive",$search_str)}}" class="btn btn-sm btn-ex-blue">{{ __('test.view_more') }}</a>
                </div>
            @endif
        </div>
    @endforeach
@endsection
