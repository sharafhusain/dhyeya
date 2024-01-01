@php($title_front = __('about.our_mission'))
@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="batch">
        <div class="row">
            <div class="col-lg-9">

                <div class="d-flex flex-column my-4">
                    <h3 class="mb-3 sidebar-text-bellow-line">Our Mission</h3>
                    <p class="text-muted px-3">Our aim is to develop & nurture competitive attitude amongst student. We
                        empower you to stay
                        ahead a step in life by offering qualitative teaching. At DhyeyaIAs, we believe that
                        “Geniuses are made, not born”. They can be made with sheer commitment, dogged determination
                        in tandem with qualitative guidance and practice. We prepare you for the future.</p>
                </div>
            </div>

            {{--Side Bar--}}
            <div class="col-lg-3">
                @include('front.sidebar')
            </div>
        </div>
    </section>
@endsection
