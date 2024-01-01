@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Create New User</h5>
            </div>
            <div class="card-body">
                <form action="{{route('create-user')}}" method="post" enctype="multipart/form-data">
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
                                <input class="form-control" type="password" id="password" name="password"
                                       value="{{old('password')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                                <input class="form-control" type="password" id="password_confirmation"
                                       name="password_confirmation" value="{{old('password_confirmation')}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        {{--<div class="col-md-6">
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="" selected disabled>Choose Status</option>
                                    <option value="Active" @selected(old('status') == 'Active')>Active</option>
                                    <option value="Inactive" @selected(old('status') == 'Inactive')>Inactive</option>
                                </select>
                            </div>
                        </div>--}}

                        {{--<div class="col-md-6">
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select" id="role" name="role">
                                    <option value="" disabled selected>Choose Role</option>
                                    <option value="admin" @selected(old('role') == 'admin')>admin</option>
                                    <option value="editor" @selected(old('role') == 'editor')>editor</option>
                                    <option value="manager" @selected(old('role') == 'manager')>manager</option>
                                </select>
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
