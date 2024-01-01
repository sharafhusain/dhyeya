<div class="container">
    <h2 class="h2 text-primary text-center my-4 pt-3">{{ __('homepage.meet_our') }}
        <span class="text-secondary fw-600" data-aos="fade-up">{{ __('homepage.team') }}</span>
    </h2>
    <p class="text-body-tertiary fs-9 text-center">{{ __('homepage.about_team') }}</p>

    <div class="row justify-content-center g-4">

        <div class="col-md-4">
            <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                <img class="card-img-top m-auto" src="{{asset('img/directors.png')}}" alt="image" style="width:125px;">
                <div class="card-body">
                    <h5 class="card-title fw-600 text-primary">{{ __('homepage.directors') }}</h5>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{route("directors")}}">
                        {{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                <img class="card-img-top m-auto" src="{{asset('img/advisory.png')}}" alt="image" style="width:125px;">
                <div class="card-body">
                    <h5 class="card-title fw-600 text-primary">{{ __('homepage.advisory_board') }}</h5>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{route("advisory")}}">
                        {{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                <img class="card-img-top m-auto" src="{{asset('img/administration.png')}}" alt="image" style="width:125px;">
                <div class="card-body">
                    <h5 class="card-title fw-600 text-primary">{{ __('homepage.administration') }}</h5>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{route("administration")}}">
                        {{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                <img class="card-img-top m-auto" src="{{asset('img/faculty.png')}}" alt="image" style="width:125px;">
                <div class="card-body">
                    <h5 class="card-title fw-600 text-primary">{{ __('homepage.faculty') }}</h5>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{route("faculty")}}">
                        {{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                <img class="card-img-top m-auto" src="{{asset('img/panelist.png')}}" alt="image" style="width:125px;">
                <div class="card-body">
                    <h5 class="card-title fw-600 text-primary">{{ __('homepage.mock_interview_panelist') }}</h5>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{route("team-panelist")}}">
                        {{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>

    </div>
</div>
