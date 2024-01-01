    <style>
        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: var(--bs-white); /* Use the white color from :root */
            color: var(--bs-primary); /* Use the primary color from :root */
            font-size: 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: var(--bs-secondary); /* Use the secondary color from :root */
            color: var(--bs-white); /* Use the white color from :root */
        }
    </style>
<div class="container">
    <h2 class="h2 text-primary text-center mt-4 mb-3 pt-2">
        <span class="text-secondary fw-600" data-aos="fade-up">{{ __('homepage.student') }} </span>{{ __('homepage.zone') }}
    </h2>

    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/batch.png')}}" alt="image">
                <div class="card-body">
                    <h5 class="card-title fw-600 text-primary">{{ __('homepage.batch_details') }}</h5>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{route("front-student-zone-batch")}}" role="button">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/fee.png')}}" alt="image">
                <div class="card-body">
                    <h5 class="card-title fw-600 text-primary">{{ __('homepage.fee_details') }}</h5>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{ route('front-student-zone-fee') }}" role="button">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/cross.png')}}" alt="image">
                <div class="card-body">
                    <h5 class="card-title fw-600 text-primary">{{ __('homepage.upsc_faqs') }}</h5>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{ route('page', 'faqs') }}" role="button">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/exam.png')}}" alt="image">
                <div class="card-body">
                    <h5 class="card-title fw-600 text-primary">{{ __('homepage.exam') }}</h5>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{ route('front-student-zone-exam') }}" role="button">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/book.png')}}" alt="image">
                <div class="card-body">
                    <h5 class="card-title fw-600 text-primary">{{ __('homepage.prospectus') }}</h5>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{ route('front-student-zone-brochure') }}" role="button">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card px-2 py-4 my-2 text-center border-0 box-shadow-1 icon-box">
                <img class="card-img-top img-1 m-auto" src="{{asset('img/books.png')}}" alt="image">
                <div class="card-body">
                    <h5 class="card-title fw-600 text-primary">{{ __('homepage.books_and_notes') }}</h5>
                    <a class="btn btn-ex-blue-outline fs-8 px-3 py-1 shadow-sm" href="{{ route('front-student-zone-book') }}" role="button">{{ __('homepage.view_details') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-bg-primary rounded d-flex align-items-center justify-content-center py-2">
        <div class="d-flex align-items-center mx-2">
            <i class="fa-brands fa-android mx-2 shake-20n" style="color: #0da061;font-size:48px"></i>
            <div class="">
                <h3 class="mb-0">{{ __('homepage.download_our_android_app') }}</h3>
                <p class="mb-0">{{ __('homepage.get_full_access') }}</p>
            </div>
        </div>
        <a href="{{ $social_media_links->app_link }}" class="cta-button mx-2">{{ __('homepage.download_now') }}</a>
    </div>
</div>
