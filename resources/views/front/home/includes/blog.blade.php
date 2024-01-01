@if(count($blogs))
    <div class="container">
        <h2 class="h2 text-primary text-center mt-4 pt-2">{{ __('homepage.our_recent') }} <span class="text-secondary fw-600"
                                                                           data-aos="fade-up">{{ __('homepage.blogs') }}</span>
        </h2>
        <p class="text-body-tertiary px-2 fs-9 text-center">{{ __('homepage.about_blog') }}</p>

        <div class="row justify-content-center">
            @foreach($blogs as $blog)
                <div class="col-lg-3 col-sm-6">
                    {{--<div class="text-center border-0 box-shadow-1 card overflow-hidden rounded-0 h-100 icon-box">
                        <a href="#blog" class="text-decoration-none">
                            @if($blog->image)
                                <img src="{{asset('storage/media/'.$blog->image)}}"
                                     class="card-img-top img-fluid rounded-0" alt="image" style="height: 210px;">
                            @else
                                <img src="{{asset('img/placeholder.png')}}"
                                     class="card-img-top img-fluid rounded-0" alt="image" style="height: 210px;">
                            @endif
                            --}}{{--<div class="d-flex mt-3 fs-95">
                                <a href="#blog" class="d-flex flex-column text-decoration-none mx-auto">
                                    <i class="fa-solid fa-user text-secondary"></i>
                                    <span class="text-body-tertiary fw-600 text-uppercase">Admin</span>
                                </a>
                                <a href="#blog" class="d-flex flex-column text-decoration-none mx-auto">
                                    <i class="fa-regular fa-calendar-days text-secondary"></i>
                                    <span
                                        class="text-body-tertiary fw-600 text-uppercase">{{$blog->created_at}}</span>
                                </a>
                                <a href="#blog" class="d-flex flex-column text-decoration-none mx-auto">
                                    <i class="fa-solid fa-comment text-secondary"></i>
                                    <span class="text-body-tertiary fw-600 text-uppercase">Comments</span>
                                </a>
                            </div>--}}{{--
                            <div class="card-body">
                                <h5 class="card-title text-start">{{$blog->title}}</h5>
                                <p class="card-text text-start text-body-tertiary">{{str($blog->seofield?$blog->seofield->excerpt:"")->limit(80)}}</p>
                            </div>

                                <span class="float-end fs-9 p-2">
                                    <i class="fa-regular fa-calendar-days text-secondary"></i>
                                    <span class="text-body-tertiary text-uppercase">{{ $blog->created_at }}</span>
                                </span>
                        </a>
                    </div>--}}
                    <a href="#" class="nav-link icon-hover">
                        <div class="card h-100 border-0 shadow-sm rounded-0">
                            @if($blog->image)
                                <img src="{{asset('storage/media/'.$blog->image)}}"
                                     class="img-fluid" alt="image" style="height: 210px;">
                            @else
                                <img src="{{asset('img/placeholder.png')}}"
                                     class="img-fluid" alt="image" style="height: 210px;">
                            @endif
                            <div class="card-body" style="min-height:150px;">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <p class="text-muted fs-75">{{ str($blog->seofield?$blog->seofield->excerpt:"")->limit(60) }}</p>
                            </div>
                            <div class="text-muted fs-9">
                                <i class="fa-regular fa-calendar-days text-secondary"></i>
                                <span class="float-end p-1 px-3 fst-italic">{{ $blog->updated_at }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

            <div class="text-center">
                <a href="{{ route('front-blogs') }}" class="btn btn-ex-blue btn-sm mt-2">{{ __('homepage.view_all') }}</a>
            </div>
        </div>
    </div>
@endif
