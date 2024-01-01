@php($title_front = ucfirst($type))
@extends('front.current-affairs.single_affair')
@section('page-content')
    <p class="card-text mb-0">
        {{--        Category_type and updated_at info here--}}
        <small class="text-secondary fw-bold">{{ucfirst($type)}}</small> /
        {{--        @dd($post)--}}
        <?php $updated_at_time = $post->updated_at ?>
        <small class="text-muted">{{$updated_at_time->format('d M Y')}}</small>
    </p>

    <h3 class="mb-3"> {{$post->title}}</h3>

    {{--    ------------------------------------------------------- POST TYPE COURSE---------------------------------------------------------}}
    {{--    DESCRIPTION if available--}}
    <article class="my-4 mb-5" class="text-muted">
        <?php echo $post->description ?>
    </article>

    {{--    ATTACHMENTS here if available--}}
{{--    @if($post->attachments) @endif--}}
    <div class="my-4 text-center">
        <a href="#" class="btn btn-info">{{ __('currentAffairs.attachments_pdf') }}</a>
    </div>
@endsection
