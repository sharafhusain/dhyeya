@php($title_front = ucfirst($type))
@extends('front.current-affairs.single_affair')
@section('page-content')
    <div id="printJS-content">
        <p class="card-text mb-0">
            {{--        Category_type and updated_at info here--}}
            <small class="text-secondary fw-bold">{{ucfirst($type)}}</small> /
            {{--        @dd($exam)--}}
            <?php $updated_at_time = $exam->updated_at ?>
            <small class="text-muted">{{$updated_at_time->format('d M Y')}}</small>
        </p>

        <h3 class="mb-3"> {{$exam->title}}</h3>

        {{--    ------------------------------------------------------- POST TYPE COURSE---------------------------------------------------------}}
        {{--    DESCRIPTION if available--}}
        <article class="my-4 mb-5" class="text-muted">
            <?php echo $exam->description ?>
        </article>

        <div class="my-4">
            @if(($post_links->count()>0) || ($category_links->count()>0))
                <h5 class="text-bg-danger">{{ __('currentAffairs.important_link') }}</h5>
            @endif

            @foreach($post_links as $link)
                <ul class="my-3 fs-75 fw-500">
                    <a href="{{route("single-post",["exam",$link->post->id])}}"
                       class="text-primary nav-link bold-hover p-1 w-responsive">
                        <li>{{$link->post->title}}</li>
                    </a>
                    </a>
                </ul>
            @endforeach

            @foreach($category_links as $link)
                <ul class="my-3 fs-75 fw-500">
                    <a href="{{route("front-student-zone-exam",[$link->category_slug])}}"
                       class="text-primary nav-link bold-hover p-1 w-responsive">
                        <li>{{$link->category_name}}</li>
                    </a>
                    </a>
                </ul>
            @endforeach

        </div>
        {{--    ATTACHMENTS here if available--}}
        {{-- <div class="my-4 text-center">
            <a href="#" class="btn btn-info">Attachments like pdf or result if available></a>
        </div> --}}
    </div>
@endsection
