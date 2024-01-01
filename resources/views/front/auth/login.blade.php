<div class="my-3">
    <form action="{{route("login-guest")}}" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" min="0" class="form-control w-75 focus-none font-12 py-2" value="{{old("email")}}" name="email" placeholder="Email">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control font-12 py-2 focus-none" id="password" name="password" placeholder="Password">
        </div>
        <div class="py-3">
            <button type="submit" class="btn btn-primary btn-sm font-12 w-100 py-2 color-gradient-200">Login</button>

        </div>
    </form>
</div>
