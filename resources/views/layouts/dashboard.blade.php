<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title> {{$title}} - Dhyeya IAS</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/site_logo.jpg') }}">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .breadcrumb .breadcrumb-item a {
            text-decoration: none !important;
            color: #E71D36;
        }

        .breadcrumb .breadcrumb-item a:hover {
            color: #b6818a;
        }
    </style>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    @yield("style")
</head>
<body class="sb-nav-fixed">

@include('layouts.navbar')

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('layouts.sidebar')
    </div>
    <div id="layoutSidenav_content" style="top: 30px">
        <main>
            <div class="container-fluid px-4">
                <h3 class="my-4 mt-5">Dhyeya IAS <span class="text-secondary">{{$title}}</span></h3>
{{--                <div class="text-decoration-none">{{Breadcrumbs::render()}}</div>--}}
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

                @yield('content')
            </div>
        </main>

        <footer class="py-2 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@yield('script')
<script>
    let tooltipList;
    let tooltipTriggerList;
    tinymce.init({
        selector: 'textarea.myTinyEditor',
        plugins: 'code table lists link fullscreen',
        toolbar: 'undo redo | link | blocks | bold italic underline | alignleft aligncenter alignright alignjustify | indent outdent | bullist numlist | code | table | fullscreen',
        height: 600,
        menubar: true,
        promotion: false,
        content_style: 'p{ margin: 0px; padding: 1px; }'
    });
    tinymce.init({
        selector: 'textarea.mySecondaryEditor',
        plugins: 'lists link fullscreen',
        toolbar: 'undo redo | link | blocks | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | fullscreen',
        height: 400,
        menubar: true,
        promotion: false,
        content_style: 'p{ margin: 0px; padding: 1px; }'
    });

    tinymce.init({
        selector: 'textarea.mySmallEditor',
        plugins: 'code lists link fullscreen',
        toolbar: 'undo redo | image | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | code | fullscreen',
        height: 400,
        menubar: false,
        promotion: false,
        content_style: 'p{ margin: 0px; padding: 1px; }'
    });

    $(document).ready(() => {
        $('.cus-img').change(function () {
            const $this = this;
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    $($this).siblings(".cus-img-op").attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });

         tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
         tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))



    });
    function reinit_tooltip() {
        tooltipList.map(tooltipTriggerEl => {
            tooltipTriggerEl.dispose()
        });

        tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    }

    $(document).ready(function () {
        $('.select-multiple').select2({
            placeholder: 'Select an Option'
        });
    });
</script>
</body>
</html>
