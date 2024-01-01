@php($title_front = 'Blog')
@extends('layouts.front')
@section('content_ui')
    <section class="my-4" id="blog">
        <div class="row">
            <div class="col-lg-9">

                <div class="d-flex flex-column mt-4">
                    <h3 class="mb-0">{{ __('front.our_blogs') }}</h3>
                    <p class="text-muted fw-light sidebar-text-bellow-line mb-5">{{ __('front.explore_dhyeya_ias_blogs') }}</p>

                    <div class="row g-4">
                        @foreach($blogs as $blog)

                            <div class="col-md-4">
                                <a href="#" class="nav-link card-hover">
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
                                        <div class="text-muted fs-8">
                                            <span
                                                class="float-end p-1 px-3 fst-italic">{{ __('front.updated') }} {{$blog->updated_at}}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="my-3">{{ $blogs->links() }}</div>
                </div>
            </div>

            {{--Side Bar--}}
            <div class="col-lg-3">
                <div class="sticky-top" style="z-index:1;padding-top:4.5rem">

                    {{--Sidebar Widgets 1--}}
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-body">
                            <h5 class="card-title fw-600 mb-4 sidebar-text-bellow-line">{{ __('front.recent_article') }}</h5>

                            {{--List Group For CATEGORY--}}
                            <ol class="nav my-3 text-muted">
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    Latest blog posts here with fdsdgs news sdlv isnv kb kskvdbkla gndk dfbfdklbn
                                </a>
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    Afbsdnbdfnbf ncdbn dfknb xdc sdngsbv skldbvsjk jklsfbjks gndk dfbfdklbn
                                </a>
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    Fsdb ndb d b fjb jsv ks sbjdfn bdf bsdvgbb sdkbvsdj jsdbvjk jd gndk dfbfdklbn
                                </a>
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    Sdgb dkfbkb sbjkgdbn bsjbdbbsbd sdfv sdvcv sdsd. gndk dfbfdklbn
                                </a>
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    Sjkgbjvb jsbdjkgbjbvjsdbgskjb sjkdbgbjvsjdbv jksdbs gndk dfbfdklbn
                                </a>
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    Dgbn sndb sdbb jbsjkdjbj bsdjvajVh bsdbdsjb jsjdb gndk dfbfdklbn
                                </a>
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    Cdsnb nbvsd jsb dvd xcjvjsdb jsb bbsdsv sdksv gndk dfbfdklbn
                                </a>
                                <a href="#" class="nav-link bold-hover p-1 mb-2 border-top w-responsive">
                                    Bk nbk bdsnlkn gndk dfbfdklbn
                                </a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
