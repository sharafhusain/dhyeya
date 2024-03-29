@php($title = 'Edit Batch')
@extends('layouts.dashboard')
@section("style")
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
@endsection
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Edit Batch</h5>
            </div>
            <div class="card-body">
                <form action="{{route('edit-batch', $batch->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="image" class="form-label">Image (en)</label>
                                <img style="height: 150px;" class="cus-img-op m-2 img-thumbnail"
                                     src="{{asset('storage/media/'.$batch->translate("en")->image)}}">
                                <input class="form-control cus-img" type="file" name="en[image]">
                            </div>

                            <div class="mb-3">
                                <label for="en.title" class="form-label">Batch Title (en)</label>
                                <input class="form-control" type="text" id="en.title" name="en[title]"
                                       value="{{old('en.title', $batch->translate("en")->title)}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="image" class="form-label">Image (hi)</label>
                                <img style="height: 150px;"
                                     class="cus-img-op m-2 img-thumbnail"
                                     src="{{asset('storage/media/'.$batch->translate("hi")->image)}}">
                                <input class="form-control cus-img" type="file" name="hi[image]">
                            </div>

                            <div class="mb-3">
                                <label for="en.title" class="form-label">Batch Title (hi)</label>
                                <input class="form-control" type="text" id="en.title" name="hi[title]"
                                       value="{{old('hi.title',$batch->translate("hi")->title)}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="medium" class="form-label">Medium</label>
                                <select class="form-select" id="medium" name="medium">
                                    <option value="" selected disabled>Choose Medium</option>
                                    <option value="english" @selected(old('medium', $batch->medium) == 'english')>
                                        English
                                    </option>
                                    <option value="hindi" @selected(old('medium', $batch->medium) == 'hindi')>Hindi
                                    </option>
                                    <option value="both" @selected(old('medium', $batch->medium) == 'both')>
                                        English/Hindi
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="center" class="form-label">Center</label>
                                <select class="form-select" id="center" name="center_id">
                                    <option value="" selected disabled>Choose Center</option>
                                    @foreach($centers as $center)

                                        <option
                                            value="{{$center->id}}" @selected(old('center_id', $batch->center_id) == $center->id)>{{$center->title}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input class="form-control" type="text" id="datepicker" name="datepicker"
                                       value="{{old('datepicker')}}">

                                <input type="hidden" id="date" name="date"
                                       value="{{old('date', $batch->date)}}">
                                <input type="hidden" id="time" name="time"
                                       value="{{old('time', $batch->time)}}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="center" class="form-label">Active/Inactive</label>
                                <select class="form-select" name="status">
                                    <option value="active" @selected(old("status", $batch->status) == "active")>Active
                                    </option>
                                    <option value="inactive" @selected(old("status", $batch->status) == "inactive")>
                                        Inactive
                                    </option>
                                </select>
                            </div>
                        </div>

                    </div>


                    <button type="submit" class="btn btn-sm btn-ex-blue">Update</button>
                    <a href="{{route('batch')}}" class="btn btn-sm btn-warning px-3">Cancel</a>
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
                timePicker: true,
                autoUpdate: false,
                startDate: $("#date").val() + " " + $("#time").val(),
                showDropdowns: true,
                locale: {
                    format: 'YYYY-MM-DD HH:mm'
                }
            }, function (start, end, label) {
                $("#date").val(start.format('YYYY-MM-DD'));
                $("#time").val(start.format('HH:mm'));
            });
        });
    </script>
@endsection
