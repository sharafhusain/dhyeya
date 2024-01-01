<div class="container d-flex flex-column ps-1 pe-1 ps-sm-2 pe-sm-2">
    <h2 class="h2 text-primary text-center mt-4 pt-3">
        <span class="text-secondary fw-600" data-aos="fade-up">{{ __('homepage.subscribe') }}</span>
        {{ __('homepage.for_our_latest') }}
        <span class="text-secondary fw-600" data-aos="fade-up">{{ __('homepage.newsletter') }}</span>
    </h2>
    <p class="text-body-tertiary fs-9 text-center mx-auto my-2">{{ __('homepage.about_subscribe') }}</p>
    <form method="" action="">
        <div class="row my-3 mt-5 mx-auto">
            <div class="col-md-3"></div>
            <div class="col-md-6 ps-0 ps-sm-2 pe-0 pe-sm-2">
                <div class="input-group">
                    <input type="email"
                           class="form-control text-muted fs-9 border border-light border-end-0 input-newsletter"
                           id="email" aria-describedby="emailHelp" placeholder="Your email address@example.com">
                    <button type="submit" class="btn btn-ex-blue btn-sm btn-newsletter">{{ __('homepage.submit') }}</button>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </form>
</div>
