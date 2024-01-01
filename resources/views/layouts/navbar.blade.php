<nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">

    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{route('dashboard')}}">Dhyeya IAS</a>

    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 text-light fs-5" id="sidebarToggle" href="#"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar Search-->

    {{--    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">--}}
    {{--        <div class="input-group">--}}
    {{--            <input class="form-control form-control-sm" type="text" placeholder="Search for..." aria-label="Search for..."--}}
    {{--                   aria-describedby="btnNavbarSearch"/>--}}
    {{--            <button class="btn bg-secondary text-light btn-sm" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i>--}}
    {{--            </button>--}}
    {{--        </div>--}}
    {{--    </form>--}}

    <!-- Navbar-->
    <ul class="navbar-nav ms-auto  me-3 me-lg-4 fs-5">
        @if(auth()->user()->role == 'super admin')
        <li>
            <a class="dropdown-item text-muted mx-3" href="{{route('users')}}">
                <i class="fa-solid fa-user @if(request()->routeIs('users')) text-light @endif"></i>
            <span class="text-light fs-8 fw-600">{{ auth()->user()->name }}</span></a>
        </li>
        <li>
            <a class="dropdown-item text-muted mx-3" href="{{route('settings')}}">
                <i class="fa-solid fa-gear @if(request()->routeIs('settings')) text-light @endif"></i></a>
        </li>
        @endif
        <li>
            <a class="dropdown-item text-muted ms-3" href="{{route('logout')}}">
                <i class="fa-solid fa-right-from-bracket"></i></a>
        </li>
    </ul>

</nav>
