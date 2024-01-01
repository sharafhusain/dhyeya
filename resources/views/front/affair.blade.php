@php($title_front = __('homepage.study').' '.__('homepage.material'))
{{--@dd($head->title)--}}
@extends('layouts.front')
@section('content_ui')

    <section class="my-4" id="affairs">
        {{--        <div class="row">--}}
        {{--            <div class="col-md-12 order-1 order-md-0">--}}

        @if($type != 'current-affairs')
            <h4>{{$head->title}}</h4>
            <p class="text-muted fw-light"><?php echo $head->description ?></p>
            @if($type == "daily-current-affairs")
                <div class="d-flex flex-wrap flex-wrap justify-content-center">
                @foreach($categories as $category)
                    <a href="{{route("daily_news_analisis_sub_category",$category->category_slug)}}" class="btn btn-ex-blue-outline btn-sm m-2">{{$category->category_name}}</a>
                @endforeach
                </div>
            @endif
        @else
            @include('front.affair-includes')
        @endif

        {{--############################################################# For Sub Post or Child-of-* Type #########################################################################--}}
        <?php $thoseTypesThatHasSubPostsOnly = ["daily-current-affairs", "Info-paedia", "brain-booster"] ?>
        @if(in_array($type,$thoseTypesThatHasSubPostsOnly))
            @foreach($posts as $post)
                <div class="d-flex flex-column">
                    <div class="card my-4 border-0 shadow-sm">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="{{asset('storage/media/'.$post->image)}}" class="img-fluid" alt="image"
                                     style="height:100%;width:100%;">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <p class="card-text">
                                        <small class="text-secondary fw-bold"><?php echo $head->title ?></small>
                                        /
                                        <small class="text-muted">{{$post->updated_at->format('d M Y')}}</small>
                                    </p>
                                    <h4 class="card-title mb-3">{{$post->title}}</h4>
                                    <p class="card-text text-muted mb-3">{{$post->seofield->excerpt??''}}.</p>
                                    <a href="{{ route('affair-single-post',[$type, $post->slug]) }}"
                                       class="btn btn-ex-blue btn-sm">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$posts->links()}}
        @endif
        {{--            </div>--}}
        {{--############################################################# For Sub Post or Child-of-* Type #########################################################################--}}

        {{--############################################################# For Attachment pdf audio or Child-of-* Type ################################################################--}}
        <?php $thoseTypesThatHasAttachments = ["air-debate", "daily-pre-pare", 'daily-static-mcqs', "daily-mcqs"]; ?>
        {{--            we are using 'daily-static-mcqs',"daily-mcqs" because they have MCQs as their attachments--}}

        @if(in_array($type,$thoseTypesThatHasAttachments))
            <table class="table">
                <thead class="text-center">
                <tr>
                    <th scope="col" style="width:150px;">{{ __('front.post_date') }}</th>
                    <th scope="col" class="text-start">{{ __('front.title') }}</th>

                    @if($type === 'daily-pre-pare')
                        <th scope="col">{{ __('front.download') }}</th>
                    @endif
                    @if($type === 'air-debate' || $type === 'daily-static-mcqs' || $type === 'daily-mcqs')
                        <th scope="col">{{ __('front.view') }}</th>
                    @endif
                </tr>
                </thead>
                <tbody class="fs-7">
                @foreach($attachments as $att)
                    <tr>
                        <td scope="row" class="fw-500 fst-italic">{{$att->updated_at->format('d M Y')}}</td>


                        <td>
                        @switch ($type)
                            @case('daily-static-mcqs')
                                {{"Daily Static MCQs for UPSC & State PSC Exams- ".$att->title}}
                                @break
                            @case('daily-mcqs')
                                {{"Current Affairs MCQs for UPSC & State PSC Exams- ".$att->title}}
                                @break
                            @default
                                {{$att->title}}
                        @endswitch()

                        @if($type === 'daily-pre-pare')
                            <td class="text-center"><a class="btn btn-ex-blue btn-sm " aria-current="page"
                                                       href="{{route("downloadfile",$att->id)}}">{{ __('front.download') }}</a>
                            </td>
                        @endif
                        @if($type === 'air-debate')
                            <td><a class="btn btn-ex-blue btn-sm" aria-current="page"
                                   href="{{route('air-debate',[$att->slug])}}"
                                   target="_blank">{{ __('front.view') }}</a></td>
                        @endif
                        @if($type === 'daily-static-mcqs'|| $type === "daily-mcqs")
                            <td><a class="btn btn-ex-blue btn-sm" aria-current="page"
                                   href="{{route('affair-single-post',[$type,$att->slug])}}">{{ __('front.view') }}</a>
                            </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
                {{$attachments->links()}}
            </table>
        @endif
        {{--############################################################# For Attachment pdf audio Post Type #########################################################################--}}


        {{--        </div>--}}
    </section>
@endsection
