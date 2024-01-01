@php($title = 'Edit Team')
@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Edit Team Member</h5>
            </div>
            <div class="card-body">
                <form action="{{route('edit-team', $team->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="image" class="form-label ms-3">Image</label>
                                <img src="{{ asset('storage/media/'.$team->image)}}" alt="Image"
                                     class="cus-img-op img-thumbnail m-2" style="height:150px;">
                                <input class="form-control cus-img" type="file" id="image" name="image">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="my-3">
                                <label for="team_type" class="form-label">Team Member View On Pages</label>
                                <select class="form-select select-multiple" name="team_category[]"
                                        aria-label="Team Type"
                                        data-placeholder="Select pages on which Team Member is visible" multiple>
                                    @foreach($teamCategories as $teamCat)
                                        {{--                                        @selected(old('team_category', $teamCat->id) == $teamCat->id)--}}
                                        <option @selected(in_array($teamCat->id, $selected_teamCat_id))
                                                value="{{ $teamCat->id }}">{{ $teamCat->team_category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="en.name" class="form-label">Team Member Name (en)</label>
                                <div class="d-flex">
                                    <input class="form-control me-2" type="text" id="en.name"
                                           name="en[name]"
                                           value="{{old('en.name', $team->translate('en')->name)}}">
{{--                                    <input class="form-control" type="text" id="en.last_name" name="en[last_name]"--}}
{{--                                           value="{{old('en.last_name', $team->translate('en')->last_name)}}">--}}
                                </div>
                            </div>
                            @if($team->translate('en')->description)
                                {{--Todo: Description used for Team Directors only--}}
                                <div class="mb-3">
                                    <label for="en.description" class="form-label">Description (en) <span
                                            class="text-muted">optional</span></label>
                                    <textarea class="form-control mySecondaryEditor" type="text" id="en.description"
                                              name="en[description]"
                                              rows="3">{{old('en.description', $team->translate('en')->description)}}</textarea>
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="en.position" class="form-label">Team Member Position (en)</label>
                                <input class="form-control" type="text" id="en.position" name="en[position]"
                                       value="{{old('en.position', $team->translate('en')->position)}}">
                            </div>
                            {{--<div class="mb-3">
                                <label for="en.title" class="form-label">Title (en)</label>
                                <input class="form-control" type="text" id="en.title" name="en[title]"
                                       value="{{old('en.title', $team->translate('en')->title)}}">
                            </div>--}}
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="hi.name" class="form-label">Team Member Name (hi)</label>
                                <div class="d-flex">
                                    <input class="form-control me-2" type="text" id="hi.name"
                                           name="hi[name]"
                                           value="{{old('hi.name', $team->translate('hi')->name)}}">
{{--                                    <input class="form-control" type="text" id="hi.last_name" name="hi[last_name]"--}}
{{--                                           value="{{old('hi.last_name', $team->translate('hi')->last_name)}}">--}}
                                </div>
                            </div>
                            @if($team->translate('hi')->description)
                                {{--Todo: Description used for Team Directors only--}}
                                <div class="mb-3">
                                    <label for="hi.description" class="form-label">Description (hi) <span
                                            class="text-muted">optional</span></label>
                                    <textarea class="form-control mySecondaryEditor" type="text" id="hi.description"
                                              name="hi[description]"
                                              rows="3">{{old('hi.description', $team->translate('hi')->description)}}</textarea>
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="hi.position" class="form-label">Team Member Position (hi)</label>
                                <input class="form-control" type="text" id="hi.position" name="hi[position]"
                                       value="{{old('hi.position', $team->translate('hi')->position)}}">
                            </div>
                            {{--<div class="mb-3">
                                <label for="hi.title" class="form-label">Title (hi)</label>
                                <input class="form-control" type="text" id="hi.title" name="hi[title]"
                                       value="{{old('hi.title', $team->translate('hi')->title)}}">
                            </div>--}}
                        </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-ex-blue">Update</button>
                    <a href="{{route('team')}}" class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
