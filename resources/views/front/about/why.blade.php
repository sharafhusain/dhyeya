@php($title_front = 'Why Dhyeya IAS')
@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="why">
        <div class="row">
            <div class="col-lg-9">

                <div class="d-flex flex-column my-4">
                    <h3 class="mb-3 sidebar-text-bellow-line">Why Dhyeya IAS</h3>
                    <p class="text-muted ps-3">The institute has been very successful in making potential aspirants
                        realize their dreams which is evident from the success stories of the previous years.</p>

                    <div class="row g-4">

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Lead By Example</h5>
                                    <p class="text-muted fs-7 px-2">At DhyeyaIAS, we believe in leading by example. Our
                                        strength is our consistent result-oriented performance. It is our commitment,
                                        competitiveness and consistency in delivery that has made DhyeyaIAS India’s No.1
                                        Institute for Civil Services and State Services since past 10 years.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Nurturing and Shaping Talent</h5>
                                    <p class="text-muted fs-7 px-2">Because, your Talent determines what you can do.
                                        Your Motivation determines how much you are willing to do, but your Attitude
                                        determines how well you do it. Success comes when you learn the art of balancing
                                        your ATM.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Enhancing Capacity and building Capability</h5>
                                    <p class="text-muted fs-7 px-2">At DhyeyaIAS, our objective is to enhance student’s
                                        capacity and build desired capabilities. Each one is important and involves
                                        different set of strategies. Our expert team helps you to transform ordinary
                                        things into extraordinary opportunity.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Best Study material</h5>
                                    <p class="text-muted fs-7 px-2">At DhyeyaIAS, our guiding principle is “don’t study
                                        to earn, rather study to learn”. We, too, learn and grow with our Students. The
                                        more we learn the better we understand student’s requirement. With this idea
                                        and ideology, we develop and design relevant study materials.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Dedicated Team of Academic associates</h5>
                                    <p class="text-muted fs-7 px-2">We encourage Students to engage and evolve. Because,
                                        all of us may not have equal talent but all of us must have equal opportunity to
                                        learn and perform. Therefore, we get you available the round the clock facility
                                        of Academic help. We have dedicated team of Academic Associates – people who
                                        appeared in interview 2-3 times, to demolish your doubts and discuss with
                                        relevant subject.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Teacher</h5>
                                    <p class="text-muted fs-7 px-2">Student bonding – No significant learning can occur
                                        without a significant relationship. We have teachers who learn more than they
                                        teach. In the process of learning, our faculty involves with Students and form
                                        everlasting bonding. The idea is to develop effective Student-Teacher
                                        involvement and make learning easy.</p>
                                    <p class="text-muted fs-7 px-2">To focus at the aspirants belongs to the weaker
                                        section of the society and help them to be the part of the mainstream of the
                                        society.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Art of Writing Mains Answer</h5>
                                    <p class="text-muted fs-7 px-2">Knowledge, of course, matters, but what matters most
                                        is how you present your knowledge on paper. Those who don’t able to qualify
                                        Mains Exam doesn't possess iota of less knowledge than who qualify. Writing is
                                        not merely penning down your thoughts. Rather, it is an art, which can be
                                        improved by focused guidance and with constant practice.</p>
                                    <p class="text-muted fs-7 px-2">How to develop Emotional and Intelligence
                                        quotient.</p>
                                    <p class="text-muted fs-7 px-2">Use of cutting Edge technologies.</p>
                                    <a href="https://www.dhyeyaias.com/centers" class="nav-link bold-hover fs-7 px-2">Pan India Centre Available.</a>
                                </div>
                            </div>
                        </div>

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
