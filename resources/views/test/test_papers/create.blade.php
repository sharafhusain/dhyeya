@php($title = 'Create Test Papers')
@extends('layouts.dashboard')
@section("style")
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-inline">
                <h5 class="d-inline">Create Test Paper for <span
                        class="badge text-bg-success">{{$test->post->title}}</span></h5>
                <span class="badge text-bg-primary float-end">Test ID - {{$test->id}}</span>
            </div>
            <div class="card-body ">
                <form action="{{route('create-test-paper', $test->id)}}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="en.test_name" class="form-label">Test Name (en)</label>
                                <input class="form-control" type="text" id="en.test_name" name="en[test_name]"
                                       value="{{old('en.test_name')}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hi.test_name" class="form-label">Test Name (hi)</label>
                                <input class="form-control" type="text" id="hi.test_name" name="hi[test_name]"
                                       value="{{old('hi.test_name')}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input class="form-control" type="text" id="datepicker" name="datepicker"
                                       value="{{old('datepicker')}}">
                                <input type="hidden" id="date" name="date"
                                       value="{{old('date')}}">
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-sm btn-ex-blue mx-2">Create</button>
                    <a href="{{route('test-paper', $test->id)}}" class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
@section("script")
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>

        $(function () {
            $('input[name="datepicker"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                drops: "down",
                locale: {
                    format: 'MM/DD/YYYY'
                }
            }, function (start, end, label) {
                $("#date").val(start.format('YYYY-MM-DD'));
            });
        });
    </script>
@endsection
