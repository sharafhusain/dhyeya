<div class="position-fixed bottom-0 start-0 bg-white w-100 box-shadow-2" style="z-index:999">

    <div class="d-flex justify-content-evenly py-3">
        <a type="button" class="nav-link text-center fs-8 fw-600 text-muted mx-2" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
            <i class="fa-regular fa-comment-dots fs-4 text-primary"></i>
            <p class="mb-0 text-nowrap fs-95">Message</p>
        </a>

        <a href="{{ route('front-courses') }}" class="nav-link text-center fs-8 fw-600 text-muted mx-2">
            <i class="fa-solid fa-chalkboard-user fs-4 text-primary"></i>
            <p class="mb-0 text-nowrap fs-95">Courses</p>
        </a>

        <a href="{{ route('front-tests') }}" class="nav-link text-center fs-8 fw-600 text-muted mx-2">
            <i class="fa-solid fa-file-signature fs-4 text-primary"></i>
            <p class="mb-0 text-nowrap fs-95">Test Series</p>
        </a>

        <a href="{{ route('front-affairs','daily-mcqs') }}" class="nav-link text-center fs-8 fw-600 text-muted mx-2">
            <i class="fa-solid fa-list-check fs-4 text-primary"></i>
            <p class="mb-0 text-nowrap fs-95">Daily MCQs</p>
        </a>

        <a href="{{ $whatsapp_link }}" class="nav-link text-center fs-8 fw-600 text-muted mx-2">
            <i class="fa-brands fa-whatsapp fs-4 text-primary"></i>
            <p class="mb-0 text-nowrap fs-95">Whatsapp</p>
        </a>
    </div>

</div>
