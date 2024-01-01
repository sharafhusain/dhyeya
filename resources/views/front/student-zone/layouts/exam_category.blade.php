{{--@php($student_zone_category = 'Exam')--}}
@extends('front.student-zone.index')
@section('student_zone_content')
    <section class="my-4" id="student_zone_exam">
        {{-------------------------------------------------------------------------------------------}}
        {{------------------------------------- UPSE FAQs START -------------------------------------}}
        {{-------------------------------------------------------------------------------------------}}
        <div class="my-3">
            {{--            <h3 class="my-4 fw-600">Exams Conducted By UPSC & State PCS</h3>--}}

            @if(isset($cats))
                <div class="my-4">
                    @foreach($cats as $cat)
                        <h5 class="mt-4">{{$cat->category_name}}</h5>


                        <div class="row g-4">
                            @foreach($cat->children as $child)
                                <div class="col-md-4">
                                    <a href="{{route("front-student-zone-exam",$child->category_slug)}}"
                                       class="nav-link h-100">
                                        <div class="card border-0 box-shadow-1 h-100">
                                                <img src="{{asset("storage/media/".$child->image)}}" class="card-img-top img-fluid" alt="image">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary text-center" style="font-size: 18px">{{$child->category_name}}</h5>
                                                <p class="text-grey text-">{{$child->description}}</p>
                                            </div>
                                        </div>
                                        {{--<div class="card h-100 card-body border-0 box-shadow-1">
                                            <div class="card-img-top">
                                                <img src="{{asset("storage/media/".$child->image)}}" class="img-fluid"
                                                     alt="image">
                                            </div>
                                            <h5 class="my-2">{{$child->category_name}}</h5>
                                            <p>{{$child->description}}</p>
                                        </div>--}}
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        {{--<ul class="my-3 fs-75 fw-500">
                            <a href="{{route("front-student-zone-exam",$child->category_slug)}}"
                               class="text-primary nav-link bold-hover p-1 w-responsive">
                                <li>{{$child->category_name}}</li>
                            </a>
                        </ul>--}}

                    @endforeach

                </div>
            @endif

            @if(isset($category))
                <div class="my-4">
                    <h5>{{$category->category_name}}</h5>

                    <div class="text-center">
                        <img src="{{asset("storage/media/".$category->image)}}"
                             class="img-fluid w-25" alt="image">
                    </div>
                    <p>{{$category->description}}</p>

                    <ul class="my-3 fs-75 fw-500">
                        @foreach($category->post as $child)
                            <a href="{{route("single-post",["exam",$child->slug])}}"
                               class="text-primary nav-link bold-hover p-1 w-responsive">
                                <li>{{$child->title}}</li>
                            </a>
                            </a>
                        @endforeach
                    </ul>

                </div>
            @endif


        </div>
        {{-------------------------------------------------------------------------------------------}}
        {{-------------------------------------- UPSE FAQs END --------------------------------------}}
        {{-------------------------------------------------------------------------------------------}}
    </section>
@endsection
