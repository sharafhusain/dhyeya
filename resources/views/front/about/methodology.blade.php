@php($title_front = 'Methodology and Mechanism')
@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="methodology">
        <div class="row">
            <div class="col-lg-9">

                <div class="d-flex flex-column my-4">
                    <h3 class="mb-3 sidebar-text-bellow-line">Methodology and Mechanism</h3>
                    <p class="text-muted ps-3">The institute has been very successful in making potential aspirants
                        realize their dreams which is evident from the success stories of the previous years.</p>

                    <div class="m-2 text-muted">
                        <li>Counseling</li>
                        <li>Class Training Programme</li>
                        <li>Test Evaluation Programme</li>
                        <li>Study Material Development and Improvement</li>
                        <li>Administrative Management and Human Resources Development Centre</li>
                        <li>Distance Education and Learning Programme</li>
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
