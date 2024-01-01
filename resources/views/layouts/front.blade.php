<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Home - Dhyeya IAS</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/site_logo.jpg') }}">
    <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owlcarousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/audio_player/css/jquery.mb.miniAudioPlayer.css')}}"
          title="style" media="screen"/>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="{{ asset('css/print.min.css') }}">
    <script src="https://kit.fontawesome.com/5953db568d.js" crossorigin="anonymous"></script>

</head>

<body class="bg-light position-relative">

{{--Social Media Icons--}}
{{--<div class="position-fixed end-0 bg-light shadow-sm p-2 text-center z-1000 opacity6 cus-rounded"
     style="top:200px;font-size:24px;">
    <a href="{{$social_media_links->app_link}}" class="text-decoration-none d-block my-2 hover-scale" title="Android">
        <i class="fa-brands fa-android" style="color: #0da061;"></i>
    </a>
    <a href="{{$social_media_links->facebook_link}}" class="text-decoration-none d-block my-2 hover-scale" title="Facebook">
        <i class="fa-brands fa-facebook-f" style="color: #075ea2;"></i>
    </a>
    <a href="{{$social_media_links->twitter_link}}" class="text-decoration-none d-block my-2 hover-scale" title="Twitter">
        <i class="fa-brands fa-twitter" style="color: #24abff;"></i>
    </a>
    <a href="{{$social_media_links->telegram_link}}" class="text-decoration-none d-block my-2 hover-scale" title="Telegram">
        <i class="fa-solid fa-paper-plane" style="color: #3884ff;"></i>
    </a>
    <a href="{{$social_media_links->youtube_link}}" class="text-decoration-none d-block my-2 hover-scale" title="Youtube">
        <i class="fa-brands fa-youtube" style="color: #c20000;"></i>
    </a>
    <a href="{{$social_media_links->instagram_link}}" class="text-decoration-none d-block my-2 hover-scale" title="Instagram">
        <i class="fa-brands fa-instagram" style="color: #ed0260;"></i>
    </a>
</div>--}}

{{--header Section--}}
<section id="header">
    <!--NAVBAR START HERE-->
    <header class="position-relative">

        @include('front.topbar')
        @if(request()->route()->getName() != 'landing-page')
            @include('front.nav')
        @endif

        <!-- SEARCH BAR -->
        <div class="p-1 me-5 collapse animated position-absolute end-0 w-75" id="search" style="top:50px;">
            <form class="d-flex position-relative fs-9" role="search">
                <input class="form-control ps-5 rounded-0" type="search"
                       placeholder="{{ __('nav.search') }}" aria-label="Search" id="searchInput">
                <button class="btn text-light bg-secondary h-auto px-2 rounded-0 position-absolute start-0"
                        type="submit">
                    <i class="fa-solid fa-magnifying-glass fa-xs"></i></button>
            </form>
        </div>
    </header>
    <!--NAVBAR END HERE-->
</section>


@if(in_array(request()->route()->getName(), ['front-home', 'landing-page']))

    @yield('content_ui')

@elseif(in_array(request()->route()->getName(), ['dhyeya-ias-udaan', 'dlp']))

    <div class="d-flex flex-column justify-content-center ps-5" style="height:150px;background-color:#eee">
        <h2 class="mt-3">
            <a href="{{route('front-home')}}" class="text-decoration-none">{{ __('about.dhyeya_ias') }}</a> >
            <span class="text-secondary"><?= $title_front ?></span>
        </h2>
        <p>{{ __('about.home') }} &gt; <span class="text-secondary"><?= $title_front ?></span></p>
    </div>
    @yield('content_ui')

@elseif(request()->route()->getName() == 'download-detail')

    <div class="container" style="min-height:60vh;">
        @yield('content_ui')
    </div>

@else

    <div class="d-flex flex-column justify-content-center ps-5" style="height:150px;background-color:#eee">
        <h2 class="mt-4">
            <a href="{{route('front-home')}}" class="text-decoration-none">{{ __('about.dhyeya_ias') }}</a> >
            <span class="text-secondary"><?= $title_front ?></span>
        </h2>
        <p>
            <a href="{{route('front-home')}}" class="text-decoration-none">{{ __('about.home') }}</a> &gt;
            <span class="text-secondary"><?= $title_front ?></span>
        </p>
    </div>
    <div class="container" style="min-height:60vh;">
        @if ($errors->any())
            <div class="alert mt-2 alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        @if (session('status'))
            <div class="mt-3 alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @yield('content_ui')
    </div>

@endif

{{--Footer Section--}}
<section class="bg-primary" id="footer">

    <div class="hide-min-768">
        <?php $whatsapp_link = 'https://wa.me/919205274741' ?>
        @include('front.footer-menu')
    </div>

    @include('front.footer')
</section>

<div class="hide-max-768">
    @include('front.floating-icon')
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('front.enquiry_now') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('contact') }}" method="post">
                    @csrf
                    <div class="my-3">
                        <input type="text" class="form-control text-muted py-2 fw-light" id="name"
                               placeholder="Name">
                    </div>
                    <div class="my-3">
                        <input type="number" class="form-control text-muted py-2 fw-light" id="phone"
                               placeholder="Phone">
                    </div>
                    <div class="my-3">
                        <input type="email" class="form-control text-muted py-2 fw-light" id="email"
                               placeholder="Email">
                    </div>
                    <div class="my-3">
                    <textarea class="form-control text-muted py-2 fw-light" id="message" rows="5"
                              placeholder="Write something here..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-ex-blue shadow-sm px-4 mx-2">{{ __('front.send') }}</button>
                </form>
            </div>
            {{--<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>--}}
        </div>
    </div>
</div>

@yield('script')
<script src="{{asset('dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{asset('owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/print.min.js')}}"></script>


<script>
    $(document).ready(function () {
        $('.slider-carousel').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            // autoplaySpeed:600,
            smartSpeed: 600,
            // autoplayHoverPause: true,
            items: 1,
        });

        $('.gallery-carousel').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            smartSpeed: 600,
            autoplayHoverPause: true,
            items: 1,
            nav: true,
        });

        $('.achievers-carousel').owlCarousel({
            center: true,
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                430: {
                    items: 1,
                    margin: 10,
                },
                431: {
                    items: 2,
                    margin: 20,
                },
                768: {
                    items: 3,
                    margin: 20,
                },
                1024: {
                    items: 5,
                },
                1440: {
                    items: 5,
                }
            }
        });

        $('.batch-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                430: {
                    items: 1,
                },
                431: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                1024: {
                    items: 4,
                },
                1440: {
                    items: 4,
                }
            }
        });

        $('.sidebar-batch-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            autoplay: true,
            autoplayHoverPause: true,
            items: 1,
            // responsive: {
            //     0: {
            //         items: 1,
            //     },
            //     430: {
            //         items: 1,
            //     },
            //     431: {
            //         items: 2,
            //     },
            //     768: {
            //         items: 3,
            //     },
            //     1024: {
            //         items: 4,
            //     },
            //     1440: {
            //         items: 4,
            //     }
            // }
        });

        $('.center-carousel').owlCarousel({
            center: true,
            loop: true,
            margin: 30,
            nav: false,
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                430: {
                    items: 1,
                    margin: 10,
                },
                431: {
                    items: 2,
                    margin: 20,
                },
                768: {
                    items: 2,
                    margin: 20,
                },
                1024: {
                    items: 3,
                },
                1440: {
                    items: 4,
                }
            }
        });

        $('.topper-carousel').owlCarousel({
            center: true,
            loop: true,
            margin: 30,
            nav: false,
            // autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                500: {
                    items: 1,
                    margin: 10,
                },
                501: {
                    items: 2,
                    margin: 30,
                },
                768: {
                    items: 2,
                    margin: 30,
                },
                1024: {
                    items: 3,
                    margin: 30,
                },
                1440: {
                    items: 3,
                    margin: 30,
                }
            }
        });

        $('.team-carousel').owlCarousel({
            // center: true,
            loop: true,
            margin: 10,
            nav: false,
            items: 1,
            autoplay: false,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                767: {
                    items: 1,
                    margin: 20,
                },
                768: {
                    items: 2,
                    margin: 20,
                },
                1024: {
                    items: 3,
                },
                1440: {
                    items: 4,
                }
            }
        });

        $('.searchButton').click(function () {
            $('#searchInput').focus();
        });
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 60) {
            $('.menu').addClass("sticky");
        } else {
            $('.menu').removeClass("sticky");
        }
        // if ($(this).scrollTop() > 250) {
        //     console.log($(this).scrollTop())
        //     $('.fixed-archive').addClass("fixed");
        // } else {
        //     $('.fixed-archive').removeClass("fixed");
        // }
    });

</script>
</body>

</html>
