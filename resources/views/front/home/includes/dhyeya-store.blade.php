<div class="container">
    <h2 class="h2 text-primary text-center mt-4 mb-2 pt-3">{{ __('homepage.dhyeya') }}
        <span class="text-secondary fw-600" data-aos="fade-up"> {{ __('homepage.store') }}</span>
    </h2>

    <div class="row justify-content-center">
        @if($books)
        @foreach($books as $book)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card p-2 text-center border-0 box-shadow-1 my-2 overflow-hidden img-hover">
                    <img class="img-fluid" src="{{ asset('storage/media/'.$book["filename"]) }}" alt="image">
                </div>
            </div>
        @endforeach
        @endif
        {{--<div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-2 text-center border-0 box-shadow-1 my-2 overflow-hidden img-hover">
                <img class="img-fluid" src="{{asset('img/placeholder.png')}}" alt="image" style="height: 320px;">
                <p class="p-2 m-0">Science & Technology</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-2 text-center border-0 box-shadow-1 my-2 overflow-hidden img-hover">
                <img class="img-fluid" src="{{asset('img/placeholder.png')}}" alt="image" style="height: 320px;">
                <p class="p-2 m-0">Internal Security</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-2 text-center border-0 box-shadow-1 my-2 overflow-hidden img-hover">
                <img class="img-fluid" src="{{asset('img/placeholder.png')}}" alt="image" style="height: 320px;">
                <p class="p-2 m-0">Science & Technology</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card p-2 text-center border-0 box-shadow-1 my-2 overflow-hidden img-hover">
                <img class="img-fluid" src="{{asset('img/placeholder.png')}}" alt="image" style="height: 320px;">
                <p class="p-2 m-0">Indian Economy</p>
            </div>
        </div>--}}
    </div>
    <div class="text-center my-3">
        <a href="{{ route('front-student-zone-book') }}" class="btn btn-sm btn-ex-blue">{{ __('homepage.find_out_more') }}></a>
    </div>
</div>
