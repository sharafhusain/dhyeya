@extends('layouts.front')
@section('content_ui')
    {{--    <h2 class="mt-4">Dhyeya IAS <span class="text-secondary">Downloads</span></h2>--}}
    {{--    <p>Home / Downloads</p>--}}

    <section class="my-4" id="contact">
        <div class="row">
            <div class="col-lg-8">

                <div class="d-flex flex-column mt-4">
                    <h4 class="mb-0">{{ __('contact.contact_us') }}</h4>
                    <p class="text-muted fw-light sidebar-text-bellow-line mb-4">{{ __('contact.guide_to_you') }}</p>

                    <div class="row">
                        {{--                        <div class="col-md-6">--}}
                        {{--                            <div class="card border-0 box-shadow-1">--}}
                        {{--                                <div class="card-body">--}}
                        {{--                                    <h5 class="card-title fw-bold">Delhi (Mukherjee Nagar)</h5>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        @foreach($contacts as $contact)
                            <div class="col-md-6 g-4">
                                <div class="card h-100 border-0 shadow-sm" role="button">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold sidebar-text-bellow-line mb-4">{{$contact->title}}</h5>
                                        {{--                                        <span class="line bg-dark bg-opacity-10 mb-3"></span>--}}
                                        <p class="text-muted d-flex mb-2">
                                            <i class="fa-solid fa-location-dot p-1 text-primary fs-5"></i>
                                            <span class="ms-2">{{$contact->address}}</span>
                                        </p>
                                        <p class="text-muted d-flex">
                                            <i class="fa-solid fa-phone p-1 text-primary fs-5"></i>
                                            <a href="tel:{{$contact->phone_number}}"
                                               class="text-muted nav-link bold-hover ms-2">{{$contact->phone_number}}</a>
                                        </p>
                                        <p class="text-muted d-flex">
                                            <i class="fa fa-envelope p-1 text-primary fs-5"></i>
                                            <a href="{{$contact->email}}"
                                               class="text-muted nav-link bold-hover ms-2">{{$contact->email}}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{--Side Bar--}}
            <div class="col-lg-4">
                @include('front.sidebar')
            </div>
        </div>

        {{--Map--}}
        <div class="row">
            <div class="col mt-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d133347.95671690995!2d-2.1166304031292693!3d52.88994339239338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1687873715398!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection
