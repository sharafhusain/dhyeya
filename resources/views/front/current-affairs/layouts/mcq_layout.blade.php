@php($title_front = ucfirst($type))
@extends('front.current-affairs.single_affair')
@section('page-content')

    <div id="printJS-content">
        <p class="card-text mb-0">
            {{--                        Category_type and updated_at info here--}}
            <small class="text-secondary fw-bold">{{ucfirst($type)}}</small>
            <small class="text-muted">{{$post->updated_at->format('d M Y')}}</small>
        </p>
        <h3 class="mb-3">{{$type=='daily-mcqs'?"Daily Static MCQs for UPSC & State PSC Exams -":"Current Affairs MCQs for UPSC & State PSC Exams -"}} {{$post->title}} {{$post->updated_at->format('d M Y')}}</h3>
        <div class="text-center">
            @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                    <?php $img = $type == 'daily-mcqs' ? "Daily-MCQ-for-UPSC-PCS-Exam.jpg" : "Daily-Static-MCQ-for-UPSC-PCS-Exam.jpg"; ?>
            @else
                    <?php $img = $type == 'daily-mcqs' ? "Daily-Hindi-MCQ-for-UPSC-PCS-Exam.jpg" : "Daily-Static-MCQ-in-Hindi-for-UPSC-PCS-Exam.jpg"; ?>
            @endif
            <img src="{{asset("img/".$img)}}" class="img-fluid" alt="image">
        </div>
        {{--                    ------------------------------------------------------- MCQ start ---------------------------------------------------------}}
        <h5 class="text-center text-danger"> {{$post->title}} </h5>
        <article class="my-4 mb-5" class="text-muted">
            <?php echo $post->description ?>
        </article>
        <div class="card-body">
            {{--        @dd($attachment)--}}
            @foreach($attachment as $i => $q)
                <div class="card my-2">
                    <div class="card-body">
                        <p class="card-title d-inline fw-500"><b>Q{{$i+1}}: </b><?= nl2br($q->question) ?></p>
                        @if($q->more_info)
                            <br>
                            <br>
                            <p class="mb-1"> <?= nl2br($q->more_info) ?></p>
                        @endif
                        <div class="card card-body border-0">
                            <p class="mb-1"><b>A:</b> {{$q->option_a}}</p>
                            <p class="mb-1"><b>B:</b> {{$q->option_b}}</p>
                            <p class="mb-1"><b>C:</b> {{$q->option_c}}</p>
                            <p class="mb-1"><b>D:</b> {{$q->option_d}}</p>
                        </div>
                        <p class="mt-3">
                            <a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#id{{$q->id}}"
                               role="button" aria-expanded="false" aria-controls="collapseExample">
                                {{ __('currentAffairs.show') }}
                            </a>
                        </p>
                        <div class="collapse" id="id{{$q->id}}">
                            <div class="card card-body">
                                <p><b> {{ __('currentAffairs.answer') }} </b> {{$q->answer}}</p>
                                <p><b> {{ __('currentAffairs.explanation') }}</b></p>
                                <p><?= nl2br($q->description) ?></p>
                                <pre class="mb-0"></pre>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{--                    ------------------------------------------------------- End MCQ ---------------------------------------------------------}}
        {{--                    ATTACHMENTS here if available--}}
        {{--    <div class="my-4 text-center">--}}
        {{--        <a href="#" class="btn btn-info">Attachments like pdf or result if available></a>--}}
        {{--    </div>--}}
    </div>
@endsection
