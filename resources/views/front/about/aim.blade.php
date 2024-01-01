@php($title_front = 'Aims and Objectives')
@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="batch">
        <div class="row">
            <div class="col-lg-9">

                <div class="d-flex flex-column my-4">
                    <h3 class="mb-3 sidebar-text-bellow-line">Aims and Objectives</h3>
                    <p class="text-muted ps-3">Since the establishment of Dhyeya IAS, we have followed the modest culture of
                        not commercializing our results but for the sole inspiration of novices we present a list of
                        selected candidates belonging to humble background yet achieving laurels in this most
                        prestigious exam in last pages.</p>

                    <div class="m-2">
                        <h4>Strategy</h4>
                        <p class="text-muted ps-3">To assist the aspirants to frame an accurate and separate strategy and
                            plan at every level of examination, i.e., preliminary, main and Interview.</p>
                    </div>
                    <div class="m-2">
                        <h4>Classroom Programme</h4>
                        <p class="text-muted ps-3">Classroom Programme by the experts of their respective field, in order to
                            assist aspirants to develop the clear and fundamentals of the subject.</p>
                    </div>
                    <div class="m-2">
                        <h4>Society</h4>
                        <p class="text-muted ps-3">To focus at the aspirants belongs to the weaker section of the society and
                            help them to be the part of the mainstream of the society.</p>
                    </div>
                    <div class="m-2">
                        <h4>Economically</h4>
                        <p class="text-muted ps-3">To provide every assistance possible for those who belongs to the
                            economically weaker sections of the society.</p>
                    </div>
                </div>
            </div>

            {{--Side Bar--}}
            <div class="col-lg-3">
                @include('front.sidebar')
            </div>
        </div>
    </section>
@endsection
