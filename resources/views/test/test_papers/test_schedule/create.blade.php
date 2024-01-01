@php($title = 'Create Test Schedule')
@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="d-inline">Create Test Schedule for <span
                        class="badge text-bg-success">{{$paper->test_name}}</span></h5>
                <span class="badge text-bg-primary float-end">Test ID - {{$test->id}} </span>
            </div>
            <div class="card-body ">
                <form action="{{route('create-schedule', [$test->id, $paper->id])}}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="en.subject" class="form-label">Subject Name (en)</label>
                                <input class="form-control" type="text" id="en.subject" name="en[subject]"
                                       value="{{old('en.subject')}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hi.subject" class="form-label">Subject Name (hi)</label>
                                <input class="form-control" type="text" id="hi.subject" name="hi[subject]"
                                       value="{{old('hi.subject')}}">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-ex-blue mx-2">Create</button>
                    <a href="{{route('schedule', [$test->id, $paper->id])}}"
                       class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

