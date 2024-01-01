@if(count($achievers))
    <div class="container position-relative">
        <h2 class="h2 text-primary text-center my-4 pt-3">{{ __('homepage.dhyeya') }}
            <span class="text-secondary fw-600" data-aos="fade-up"> {{ __('homepage.achievers') }} </span>{{ __('homepage.of_cse_2023') }}
        </h2>

        <div class="owl-carousel achievers-carousel owl-theme">
            @foreach($achievers as $achiever)
                <a href="{{route('front-achievers')}}" class="text-decoration-none">
                    <div class="item text-center">
                        <div class="card-img my-3 img-3 mx-auto icon-box">
                            @if($achiever->image)
                                <img src="{{asset('storage/media/'.$achiever->image)}}" alt="image"
                                     class="rounded-circle shadow-sm" style="height:160px;">
                            @else
                                <img src="{{asset('img/placeholder.png')}}" alt="image"
                                     class="rounded-circle shadow-sm" style="height:160px;">
                            @endif
                        </div>
                        <h5 class="h5 mt-2 mb-0 fw-600 text-primary">{{$achiever->name}}</h5>
                        <p class="fs-9 m-0 text-secondary">{{$achiever->achievement}}, {{$achiever->group}} {{$achiever->year}}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endif
