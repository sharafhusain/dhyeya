<div class="card-body">
    <form action="{{route("signup-guest")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" type="text" id="name" name="name" value="{{old('name')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input class="form-control" type="text" id="username" name="username"
                           value="{{old('username')}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input class="form-control" type="email" id="email" name="email"
                           value="{{old('email')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input class="form-control" type="tel" id="phone" name="phone" value="{{old('phone')}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input class="form-control" type="password" id="password" name="password">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Password Confirmation</label>
                    <input class="form-control" type="password" id="password_confirmation"
                           name="password_confirmation">
                </div>
            </div>
        </div>
        <div class="py-3">
            <button type="submit" class="btn btn-primary btn-sm font-12 w-100 py-2 color-gradient-200">Signup</button>
            <div class="d-flex justify-content-between my-2">
            </div>
        </div>
    </form>
</div>
