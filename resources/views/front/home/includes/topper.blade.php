@if(count($toppers))
    <div class="container">
        <h2 class="h2 text-primary text-center my-4 pt-3">{{ __('homepage.our') }}
            <span class="text-secondary fw-600" data-aos="fade-up"> {{ __('homepage.toppers') }}</span> {{ __('homepage.words') }}
        </h2>
        <p class="text-body-tertiary fs-9 text-center">{{ __('homepage.about_topper') }}</p>

        <div class="owl-carousel topper-carousel owl-theme">

            @foreach($toppers as $topper)
                <div class="item">
                    <div class="card p-4 bg-white border-0 box-shadow-2 icon-box">
                        <a href="#topper" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-evenly">
                                @if($topper->image)
                                    <img src="{{asset('storage/media/'.$topper->image)}}" class="rounded-circle"
                                         alt="image" style="width:140px;height:140px;">
                                @else
                                    <img src="{{asset('img/placeholder.png')}}" class="rounded-circle"
                                         alt="image" style="width:140px;height:140px;">
                                @endif
                                <h6 class="card-title text-center fw-700">{{$topper->name}}</h6>
                            </div>
                            <div class="card-body p-0 my-3 ms-3">
                                <p class="card-text text-start text-body-tertiary">{{str($topper->achievement)->limit(100)}}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
