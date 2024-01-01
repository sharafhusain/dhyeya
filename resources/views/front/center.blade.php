@php($title_front = __('nav.centers'))
@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="center">
        {{--        <div class="row">--}}
        {{--            <div class="col-lg-8">--}}

        <div class="d-flex flex-column mt-4">
            {{--            <h4 class="mb-0">Our Centers</h4>--}}
            {{--            <p class="text-muted fw-light sidebar-text-bellow-line mb-4">Explore Dhyeya IAS Center.</p>--}}

            {{-- FACE TO FACE --}}
            @foreach($center_typess as $type => $centers)
            <div class="my-3">
                <div class="bellow-line-parent text-center mt-4">
                    <h4 class="mb-0 bellow-line-center mx-auto">{{ $type }} {{ __('front.center') }}</h4>
                </div>
                <div class="row justify-content-center">
                    @foreach($centers as $center)
                        <div class="col-md-4 g-4">
                            <div class="card h-100 border-0 shadow-sm p-3">
                                @if($center->image)
                                    <img src="{{asset('storage/media/'.$center->image)}}"
                                         class="card-img-top img-fluid rounded"
                                         alt="image" style="height:180px;">
                                @else
                                    <img src="{{asset('img/placeholder.png')}}"
                                         class="card-img-top img-fluid rounded"
                                         alt="image" style="height:250px;">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title fw-bold sidebar-text-bellow-line mb-4">{{$center->title}}</h5>
                                                                            <span class="line bg-dark bg-opacity-10 mb-3"></span>
                                    <p class="text-muted d-flex mb-2">
                                        <i class="fa-solid fa-location-dot p-1 text-primary fs-5"></i>
                                        <span class="ms-2">{{$center->address}}</span>
                                    </p>
                                    <p class="text-muted d-flex">
                                        <i class="fa-solid fa-phone p-1 text-primary fs-5"></i>
                                        <a href="tel:{{$center->phone_number}}"
                                           class="text-muted nav-link bold-hover ms-2">{{$center->phone_number}}</a>
                                    </p>
                                    <p class="text-muted d-flex flex-wrap">
                                        <i class="fa fa-envelope p-1 text-primary fs-5"></i>
                                        <a href="mailto:{{$center->email}}"
                                           class="text-muted nav-link bold-hover ms-2">{{$center->email}}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
                    @endforeach

            {{--            <div class="my-3">{{ $centers->links() }}</div>--}}
        </div>
        {{--            </div>--}}

        {{--Side Bar--}}
        {{-- <div class="col-lg-4"></div> --}}

        {{--</div>--}}
    </section>
@endsection
