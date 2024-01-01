@php($title = 'Edit Test Schedule')
@extends('layouts.dashboard')
@section("style")
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="d-inline">Edit Test Schedule for <span
                        class="badge text-bg-success">{{$paper->test_name}}</span></h5>
                <span class="badge text-bg-primary float-end">Test ID - {{$test->id}} </span>
            </div>
            <div class="card-body ">
                <form action="{{route('edit-schedule', [$test->id, $paper->id, $schedule->id])}}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="en.subject" class="form-label">Subject Name (en)</label>
                                <input class="form-control" type="text" id="en.subject" name="en[subject]"
                                       value="{{old('en.subject', $schedule->translate("en")->subject)}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hi.subject" class="form-label">Subject Name (hi)</label>
                                <input class="form-control" type="text" id="hi.subject" name="hi[subject]"
                                       value="{{old('hi.subject', $schedule->translate("hi")->subject)}}">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-ex-blue mx-2">Update</button>
                    <a href="{{route('schedule', [$test->id, $paper->id])}}"
                       class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
