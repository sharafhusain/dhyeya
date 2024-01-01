@php($title = 'Login Page')
@extends('layouts.form')
@section('forms')
    <div class="row justify-content-center align-items-center" style="min-height:80vh">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5 mb-3">
                <div class="card-title"><h3 class="text-center my-4">Login</h3></div>
                <div class="card-body">
                    <form method="post" action="{{route('login')}}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" id="email" type="email" value="{{old('email')}}">
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="password" name="password" type="password"/>
                            <label for="password">Password</label>
                        </div>
                        {{--}}<div class="form-check mb-3">
                            <input class="form-check-input" id="remember" type="checkbox"
                                   value=""/>
                            <label class="form-check-label" for="remember">Remember
                                Password</label>
                        </div>{{--}}
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
{{--                            <a class="small" href="#">Forgot Password?</a>--}}
                            <button type="submit" class="btn btn-ex-blue btn-sm">Login</button>
                        </div>
                    </form>
                </div>
                {{--}}<div class="text-center py-3">
                    <div class="small"><a href="#">Need an account? Sign up!</a></div>
                </div>{{--}}
            </div>
        </div>
    </div>
@endsection
