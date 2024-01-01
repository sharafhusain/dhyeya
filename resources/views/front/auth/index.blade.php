@php($title_front = 'User Login')
@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="batch">
        <div class="row">
            <section id="Login">
                <div class="px-2 py-1">
                    <div class="py-2">
                        <nav>
                            <div class="nav nav-pills bg-light p-1 border border-light-subtle rounded" id="nav-tab"
                                 role="tablist">
                                <button
                                    class="nav-link focus-none w-50 lh-1 btn-tabs-gradient-200 active"
                                    id="nav-mobile-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-mobile" type="button" role="tab"
                                    aria-controls="nav-mobile" aria-selected="true">
                                    Login
                                </button>
                                <button
                                    class="nav-link focus-none w-50 lh-1 btn-tabs-gradient-200"
                                    id="nav-email-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-email"
                                    aria-controls="nav-email" aria-selected="false">
                                    Signup
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active"
                                 id="nav-mobile" role="tabpanel"
                                 aria-labelledby="nav-mobile-tab" tabindex="0">
                                @include('front.auth.login')
                            </div>
                            <div class="tab-pane fade"
                                 id="nav-email" role="tabpanel"
                                 aria-labelledby="nav-email-tab"
                                 tabindex="0">
                                @include('front.auth.signup')
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    </div>
    </section>
@endsection
