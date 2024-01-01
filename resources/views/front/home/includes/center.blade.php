{{--
<div class="container">
    <h2 class="h2 text-primary text-center my-4 mb-2 pt-3">Our <span class="text-secondary fw-600"
                                                                     data-aos="fade-up">Centers</span>
    </h2>
    <p class="text-body-tertiary fs-9 text-center mb-0">Explore Dhyeya IAS Centers</p>

    <div class="owl-carousel center-carousel owl-theme">
        @foreach($centers as $center)
            <div class="item">
                <a href="{{ route('front-centers') }}" class="nav-link">
                    <div class="card p-3 bg-primary text-light">
                        @if($center->image)
                            <img src="{{asset('storage/media/'.$center->image)}}" class="card-img-top img-fluid rounded"
                                 alt="image" style="height:180px;">
                        @else
                            <img src="{{asset('img/placeholder.png')}}" class="card-img-top img-fluid rounded"
                                 alt="image" style="height:180px;">
                        @endif
                        <div class="card-body p-0">
                            <h6 class="card-title text-center p-2">{{$center->title}}</h6>
                            <span class="line bg-white bg-opacity-10 mb-3"></span>
                            <p class="card-text d-flex fs-9 mb-3">
                                <i class="fa-solid fa-location-dot p-1"></i>
                                <span class="">{{$center->address}}</span>
                            </p>
                            <p class="card-text d-flex fs-9 mb-1">
                                <i class="fa-solid fa-phone p-1"></i>
                                <a href="tel:{{$center->phone_number}}"
                                   class="nav-link bold-hover d-inline">{{$center->phone_number}}</a>
                            </p>
                            <p class="card-text d-flex fs-9 mb-1">
                                <i class="fa fa-envelope p-1"></i>
                                <a href="mailto:{{$center->email}}"
                                   class="nav-link bold-hover d-inline">{{$center->email}}</a>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
--}}
