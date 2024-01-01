@extends('layouts.dashboard')
@section('content')
    <section id="settings" class="my-3">
        <nav>
            <div class="nav" id="nav-tab" role="tablist">
{{--                @php({{Session::has("tab")?Session::get("tab"):""}})--}}
                @php($tab = Session::has("tab")?Session::get("tab"):"social-media")

                <button class="btn btn-outline-primary btn-sm mx-2 @if($tab=="social-media") active @endif" id="social-media-tab" data-bs-toggle="tab" data-bs-target="#social-media" type="button" role="tab" aria-controls="social-media" aria-selected="true">Social Media Settings</button>
                <button class="btn btn-outline-primary btn-sm mx-2 @if($tab=="side-settings") active @endif" id="site-settings-tab" data-bs-toggle="tab" data-bs-target="#site-settings" type="button" role="tab" aria-controls="site-settings" aria-selected="false">Site Settings</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade  @if($tab=="social-media")show active @endif" id="social-media" role="tabpanel" aria-labelledby="social-media-tab" tabindex="0">
                <div class="my-3">
                    <div class="container">
                        <div class="card border-0 box-shadow-2 my-4" >
                            <div class="card-body">
                                <form action="{{route("social-media-settings")}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="en.name" class="form-label">Facebook Link</label>
                                                <input class="form-control" type="text" id="en.name" name="facebook_link"
                                                       value="{{$socialMediaSettingssettings->facebook_link}}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="hi.name" class="form-label">Twitter Link</label>
                                                <input class="form-control" type="text" id="hi.name" name="twitter_link"
                                                       value="{{$socialMediaSettingssettings->twitter_link}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="en.name" class="form-label">Youtube Link</label>
                                                <input class="form-control" type="text" id="en.name" name="youtube_link"
                                                       value="{{$socialMediaSettingssettings->youtube_link}}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="hi.name" class="form-label">Telegram Link</label>
                                                <input class="form-control" type="text" id="hi.name" name="telegram_link"
                                                       value="{{$socialMediaSettingssettings->telegram_link}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="en.name" class="form-label">Instagram Link</label>
                                                <input class="form-control" type="text" id="en.name" name="instagram_link"
                                                       value="{{$socialMediaSettingssettings->instagram_link}}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="hi.name" class="form-label">Androaid App Link</label>
                                                <input class="form-control" type="text" id="hi.name" name="app_link"
                                                       value="{{$socialMediaSettingssettings->app_link}}" required>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-sm btn-ex-blue">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade @if($tab=="side-settings") show active @endif" id="site-settings" role="tabpanel" aria-labelledby="site-settings-tab" tabindex="0">
                <div class="my-3">
                    <div class="container">
                        <div class="card border-0 box-shadow-2 my-4">
                            <div class="card-body">
                                <form action="{{route("side-settings")}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="en.header_logo_en" class="d-block form-label">Logo (en)</label>
                                                <img class="w-25 cus-img-op mb-2 d-block mx-auto" src="{{asset("storage/media/$siteSetting->header_logo_en")}}" alt="">
                                                <input id="header_logo_en" class="cus-img form-control" type="file" id="en.header_logo_en" name="header_logo_en">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="hi.header_logo_hi" class="form-label">Logo (hi)</label>
                                                <img class="w-25 cus-img-op mb-2 d-block mx-auto" src="{{asset("storage/media/$siteSetting->header_logo_hi")}}" alt="">
                                                <input class="cus-img form-control" type="file" id="hi.header_logo_hi" name="header_logo_hi">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="en.footer_logo_en" class="form-label">Footer Logo (en)</label>
                                                <input class="form-control" type="file" id="en.footer_logo_en" name="footer_logo_en"
                                                       value="{{$siteSetting->footer_logo_en}}" >
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="hi.footer_logo_hi" class="form-label">Footer Logo (hi)</label>
                                                <input class="form-control" type="file" id="hi.footer_logo_hi" name="footer_logo_hi"
                                                       value="{{$siteSetting->footer_logo_hi}}" >
                                            </div>
                                        </div>
                                    </div>

{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="mb-3">--}}
{{--                                                <label for="en.sidebar_img_en" class="form-label">Side-Bar Image (en)</label>--}}
{{--                                                <input class="form-control" type="file" id="en.sidebar_img_en" name="sidebar_img_en"--}}
{{--                                                       value="{{$siteSetting->sidebar_img_en}}" >--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="mb-3">--}}
{{--                                                <label for="hi.sidebar_img_hi" class="form-label">Side-Bar Image (hi)</label>--}}
{{--                                                <input class="form-control" type="file" id="hi.sidebar_img_hi" name="sidebar_img_hi"--}}
{{--                                                       value="{{$siteSetting->sidebar_img_hi}}" >--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="en.address_en" class="form-label">Address (en)</label>
                                                <input class="form-control" type="text" id="en.address_en" name="address_en"
                                                       value="{{$siteSetting->address_en}}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="hi.address_hi" class="form-label">Address (hi)</label>
                                                <input class="form-control" type="text" id="hi.address_hi" name="address_hi"
                                                       value="{{$siteSetting->address_hi}}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="en.mobile_no" class="form-label">Mobile Number <small>(Comma Saparated)</small></label>
                                                <input class="form-control" type="text" id="en.mobile_no" name="mobile_no"
                                                       value="{{$siteSetting->mobile_no}}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-sm btn-ex-blue">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{--@section("script")--}}
{{--    <script>--}}
{{--        let logo = document.querySelector("#header_logo_en")--}}
{{--        logo.addEventListener("change",function (event) {--}}
{{--            console.log(this.files)--}}
{{--        })--}}
{{--    </script>--}}
{{--@endsection--}}
