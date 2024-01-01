@php($title = 'Edit Features')
@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="d-inline">Edit Features For <span class="badge text-bg-success">{{$test->post->title}}</span>
                </h5>
                <span class="float-end badge text-bg-primary">Test ID - {{$test->id}}</span>
            </div>
            <div class="card-body">
                <form action="{{route('edit-test-feature', [$test->id, $feature->id])}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">

                            <div class="mb-3">
                                <label for="en.title" class="form-label">Features <span
                                        class="text-muted">(en)</span></label>
                                <input class="form-control" type="text" id="en.title" name="en[title]"
                                       value="{{old('en.title', $feature->translate('en')->title)}}">
                            </div>

                            <div class="mb-3">
                                <label for="hi.title" class="form-label">Features <span
                                        class="text-muted">(hi)</span></label>
                                <input class="form-control" type="text" id="hi.title" name="hi[title]"
                                       value="{{old('hi.title', $feature->translate('hi')->title)}}">
                            </div>

                        </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-ex-blue">Update</button>
                    <a href="{{route('test-feature', $test->id)}}" class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
            <div class="card-footer mt-3">
            </div>
        </div>
    </div>
@endsection
