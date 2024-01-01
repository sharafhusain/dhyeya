@php($student_zone_category = 'Download Section')
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
                        <h5>{{$cat->category_name}}</h5>

                        @foreach($cat->children as $child)
                            <ul class="my-3 fs-75 fw-500">
                                <a href="{{route("download-page",$child->category_slug)}}"
                                   class="text-primary nav-link bold-hover p-1 w-responsive">
                                    <li>{{$child->category_name}}</li>
                                </a>
                                </a>
                            </ul>
                        @endforeach

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
                            <a href="{{route("single-post",["download",$child->id])}}" class="text-primary nav-link bold-hover p-1 w-responsive">
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
