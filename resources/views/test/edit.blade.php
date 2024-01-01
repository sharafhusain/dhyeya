@php($title = 'Edit Test Series')
@extends('layouts.dashboard')
@section("style")
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
@endsection
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Edit Test Series</h5>
            </div>
            <div class="card-body">
                <form action="{{route('edit-test', $test->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="en.title" class="form-label">Title (en)</label>
                                <input class="form-control" type="text" id="en.title" name="en[title]"
                                       value="{{old('en.title', $test->post->translate("en")->title)}}">
                            </div>

                            <div class="mb-3">
                                <label for="en.objective" class="form-label">Objective (en)</label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="en.objective"
                                          name="en[objective]"
                                          rows="3">{{old('en.objective', $test->translate("en")?->objective)}}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="en.analysis" class="form-label">Analysis (en)</label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="en.analysis"
                                          name="en[analysis]"
                                          rows="3">{{old('en.analysis', $test->translate("en")?->analysis)}}</textarea>
                            </div>

{{--                            <div class="mb-3">--}}
{{--                                <label for="en.test_structure" class="form-label">Test Structure (en)</label>--}}
{{--                                <textarea class="form-control" type="text" id="en.test_structure"--}}
{{--                                          name="en[test_structure]"--}}
{{--                                          rows="3">{{old('en.test_structure', $test->translate("en")->test_structure)}}</textarea>--}}
{{--                            </div>--}}
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hi.title" class="form-label">Title (hi)</label>
                                <input class="form-control" type="text" id="hi.title" name="hi[title]"
                                       value="{{old('hi.title', $test->post->translate("hi")?->title)}}">
                            </div>

                            <div class="mb-3">
                                <label for="hi.objective" class="form-label">Objective (hi)</label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="hi.objective"
                                          name="hi[objective]"
                                          rows="3">{{old('hi.objective', $test->translate("hi")?->objective)}}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="hi.analysis" class="form-label">Analysis (hi)</label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="hi.analysis"
                                          name="hi[analysis]"
                                          rows="3">{{old('hi.analysis', $test->translate("hi")?->analysis)}}</textarea>
                            </div>

{{--                            <div class="mb-3">--}}
{{--                                <label for="hi.test_structure" class="form-label">Test Structure (hi)</label>--}}
{{--                                <textarea class="form-control" type="text" id="hi.test_structure"--}}
{{--                                          name="hi[test_structure]"--}}
{{--                                          rows="3">{{old('hi.test_structure', $test->translate("hi")->test_structure)}}</textarea>--}}
{{--                            </div>--}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="medium" class="form-label">Medium</label>
                                <select class="form-select" id="medium" name="medium">
                                    <option value="" selected disabled>Choose Medium</option>
                                    <option value="english" @selected(old('medium', $test->medium) == 'english')>
                                        English
                                    </option>
                                    <option value="hindi" @selected(old('medium', $test->medium) == 'hindi')>Hindi</option>
                                    <option value="English & Hindi" @selected(old('medium', $test->medium) == 'English & Hindi')>English & Hindi</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="mode" class="form-label">Mode</label>
                                <select class="form-select" id="mode" name="mode">
                                    <option value="" disabled selected>Choose Mode</option>
                                    <option value="online" @selected(old('mode', $test->mode) == 'online')>Online
                                    </option>
                                    <option value="offline" @selected(old('mode', $test->mode) == 'offline')>Offline
                                    </option>
                                    <option value="Offline & Online" @selected(old('mode', $test->mode) == 'Offline & Online')>Offline & Online</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="center" class="form-label">Active/Inactive</label>
                                <select class="form-select" name="status">
                                    <option value="active"
                                            @selected(old("status", $test->post->status) == "active") selected>Active
                                    </option>
                                    <option
                                        value="inactive" @selected(old("status", $test->post->status) == "inactive")>
                                        Inactive
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="total_no_of_test" class="form-label">Total no of test</label>
                                <input class="form-control" type="number" id="total_no_of_test" name="total_no_of_test"
                                       value="{{old('total_no_of_test', $test->total_no_of_test)}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="test_type" class="form-label">Exam Type</label>
                                <select class="form-select" name="test_type">
                                    <option value="" selected disabled>Choose Exam type</option>
                                    <option @selected(old('test_type', $test->test_type) == 'State PSC/PCS Mains')>
                                        State PSC/PCS Mains
                                    </option>
                                    <option @selected(old('test_type', $test->test_type) == 'UPSC/IAS Mains')>
                                        UPSC/IAS Mains
                                    </option>
                                    <option @selected(old('test_type', $test->test_type) == 'State PSC/PCS Prelims')>
                                        State PSC/PCS Prelims
                                    </option>
                                    <option @selected(old('test_type', $test->test_type) == 'UPSC/IAS Prelims')>
                                        UPSC/IAS Prelims
                                    </option>
                                    <option @selected(old('test_type', $test->test_type) == 'UPSC & State PCS Mains (Optional)')>
                                        UPSC & State PCS Mains (Optional)
                                    </option>
                                    <option @selected(old('test_type', $test->test_type) == 'EPFO Mains EO/AO')>
                                        EPFO Mains EO/AO
                                    </option>
                                    <option @selected(old('test_type', $test->test_type) == 'BPSE Mains')>
                                        BPSE Mains
                                    </option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input class="form-control" type="text" id="datepicker" name="datepicker"
                                       value="{{old('datepicker')}}">
                                <input type="hidden" id="date" name="starting_date"
                                       value="{{old('starting_date', $test->starting_date)}}">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input class="form-control" type="text" id="slug" name="slug" value="{{old('slug', $test->post->slug)}}">
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-sm btn-ex-blue">Update</button>
                    <a href="{{route('test')}}" class="btn btn-sm btn-warning px-3">Cancel</a>
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
                startDate: $("#date").val(),
                showDropdowns: true,
                locale: {
                    format: 'YYYY-MM-DD'
                }
            }, function (start, end, label) {
                $("#date").val(start.format('YYYY-MM-DD'));
            });
        });
    </script>
@endsection
