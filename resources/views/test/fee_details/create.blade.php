@php($title = 'Create Fee Detail ')
@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="d-inline">Create Fee Detail for <span
                        class="badge text-bg-success">{{$test->post->title}}</span>
                </h5>
                <span class="float-end badge text-bg-primary">Test ID - {{$test->id}}</span>
            </div>
            <div class="card-body">
                <form action="{{route('create-fee-detail',$test)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="student_type" class="form-label">Student Type</label>
                                <select class="form-select" id="student_type" name="student_type">
                                    <option value="" disabled selected>Choose Mode</option>
                                    <option value="dhyeya" @selected(old('student_type') == 'dhyeya')>Dhyeya
                                    </option>
                                    <option value="non_dhyeya" @selected(old('student_type') == 'non_dhyeya')>
                                        Non_dhyeya
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="mode" class="form-label">Mode</label>
                                <select class="form-select" id="mode" name="mode">
                                    <option value="" disabled selected>Choose Mode</option>
                                    <option value="online" @selected(old('mode') == 'online')>Online</option>
                                    <option value="offline" @selected(old('mode') == 'offline')>Offline</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input class="form-control" type="text" id="amount" name="amount"
                                   value="{{old('amount')}}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-ex-blue mx-2">Create</button>
                    <a href="{{route('fee-detail',$test->id)}}" class="btn btn-sm btn-warning px-3">Cancel</a>

                </form>
            </div>
        </div>
    </div>
@endsection
