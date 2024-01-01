@php($title_front = ucfirst($type))
@extends('front.current-affairs.single_affair')
@section('page-content')
    <div id="printJS-content">
        <p class="card-text mb-0">
            {{--        Category_type and updated_at info here--}}
            <small class="text-secondary fw-bold">{{ucfirst($type)}}</small> /
            <?php $updated_at_time = $post->updated_at ?? $attachment->updated_at ?>
            <small class="text-muted">{{$updated_at_time->format('d M Y')}}</small>
        </p>

        <h3 class="mb-3 h3"> {{$post->title ?? $attachment->title}}</h3>
        <div class="text-center">
            <img src="{{asset("storage/media/".$post->image)}}"
                 class="img-fluid" alt="image">
        </div>

        {{--    ------------------------------------------------------- POST TYPE COURSE---------------------------------------------------------}}
        {{--    DESCRIPTION if available--}}
        <article class="my-4 mb-5 cs-editor">
            <?php echo $post->description ?>
        </article>

        {{--ATTACHMENTS here if available--}}
        @if($post->attachments()->first())
            <div class="my-4 text-center">
                @foreach($post->attachments as $attachment)
                    <a href="{{route("download-attachment",$attachment->slug)}}"
                       class="btn btn-info">{{ __('currentAffairs.download_attachment') }}</a>
                @endforeach
            </div>
        @endif
    </div>
@endsection
