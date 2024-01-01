@php($title_front = ucfirst($type))
@extends('front.current-affairs.single_affair')
@section('page-content')
    <p class="card-text mb-0">
        {{--                    Category_type and updated_at info here--}}
        <small class="text-secondary fw-bold">{{ucfirst($type)}}</small> /
        <small class="text-muted">{{$attachment->updated_at->format('d M Y')}}</small>
    </p>

    <h2 class="mb-3"> {{$attachment->title}}</h2>
    <div class="text-center">
        @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
            <img src="{{asset("radio.webp")}}" class="img-fluid" alt="image">
        @else
            <img src="{{asset("radio-hindi.webp")}}" class="img-fluid" alt="image">
        @endif
    </div>

    {{--                ------------------------------------------------------- Air Debate start---------------------------------------------------------}}
    <div class="text-center my-2">
        <audio src="{{asset('storage/media/'.$attachment->filename)}}" class="w-100 text-primary" preload="none"
               controls="controls">

        </audio>
    </div>
    <h5 class="mt-3">{{ __('currentAffairs.spotlight_news_analysis') }} ({{$attachment->updated_at->format('d M Y')}}
        ):</h5>
    <ul style="text-align: justify">
        <li><b>{{ __('currentAffairs.topic_of_discussion') }}</b> <?php echo $attachment->meta->key ?></li>
        <li><b>{{ __('currentAffairs.expert_panel') }}</b> <?php echo $attachment->meta->val ?></li>
    </ul>
    {{--                ------------------------------------------------------- End Air Debate---------------------------------------------------------}}
@endsection
