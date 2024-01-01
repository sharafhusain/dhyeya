@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Edit User <span class="badge bg-success">{{$user->username}}</span></h5>
            </div>
            <div class="card-body">
                <form action="{{route('edit-user', $user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input class="form-control" type="text" id="name" name="name" value="{{old('name', $user->name)}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input class="form-control" type="text" id="username" name="username"
                                       value="{{old('username', $user->username)}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input class="form-control" type="email" id="email" name="email"
                                       value="{{old('email', $user->email)}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input class="form-control" type="tel" id="phone" name="phone" value="{{old('phone', $user->phone)}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password" class="form-label">Change Password <span class="text-muted">( optional )</span></label>
                                <input class="form-control" type="password" id="password" name="password"
                                       value="{{old('password')}}">
                            </div>
                        </div>
                        {{--<div class="col-md-6">
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                                <input class="form-control" type="password" id="password_confirmation"
                                       name="password_confirmation" value="{{old('password_confirmation')}}">
                            </div>
                        </div>--}}
                    </div>

                    <button type="submit" class="btn btn-sm btn-ex-blue">Create</button>
                    <a href="{{route('users')}}" class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
