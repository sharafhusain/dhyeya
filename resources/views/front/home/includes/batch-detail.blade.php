@if(count($batchimgs))
<div class="container position-relative">
    <h2 class="h2 text-primary text-center my-4 pt-3"><span class="text-secondary fw-600" data-aos="fade-up">{{ __('homepage.batch_details') }}</span>
        {{ __('homepage.online_offline') }}</h2>

    <div class="owl-carousel batch-carousel owl-theme">
        @foreach($batchimgs as $imgs)
            <div class="item icon-box">
                <img src="{{asset('storage/media/'.$imgs)}}" class="rounded img-fluid" alt="batch details" style="height:310px">
            </div>
        @endforeach
    </div>

    <div class="row text-center mt-3">
        <div class="col align-self-center">
            <a href="{{ route('front-student-zone-batch') }}" class="btn btn-ex-blue btn-sm">{{ __('homepage.view_all') }}</a>
            <a href="{{ route('front-student-zone-fee') }}" class="btn btn-secondary btn-sm text-light">{{ __('homepage.download_fee_details') }}</a>
        </div>
    </div>
</div>
@endif
