@php($title = 'Edit '. ucfirst($type))
@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Edit {{ucfirst($type)}}</h5>
            </div>
            <div class="card-body">
                <form action="{{route($type=="achiever"?'edit-achievers':"edit-toppers", [$type,$achiever->id])}}"
                      method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="image" class="form-label ms-3">Image</label>
                                <img src="{{ asset('storage/media/'.$achiever->image)}}" alt="Image"
                                     class="cus-img-op img-thumbnail m-2" style="height:150px;">
                                <input class="form-control cus-img" type="file" id="image" name="image"
                                       value="{{old('image', $achiever->image)}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="en.name" class="form-label">{{ucfirst($type)}} Name (en)</label>
                                <input class="form-control" type="text" id="en.name" name="en[name]"
                                       value="{{old('en.name', $achiever->translate('en')->name)}}">
                            </div>
                            <div class="mb-3">
                                <label for="en.achievement"
                                       class="form-label">{{$type == "achiever"?"Achievement":"Description"}}
                                    (en)</label>
                                @if($type == 'achiever')
                                    <input class="form-control" type="text" id="en.achievement" name="en[achievement]"
                                           value="{{old('en.achievement', $achiever->translate('en')->achievement)}}">
                                @endif
                                @if($type == 'topper')
                                    <textarea class="form-control" type="text" id="en.achievement"
                                              name="en[achievement]" rows="3">{{old('en.achievement', $achiever->translate('en')->achievement)}}</textarea>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="hi.name" class="form-label">{{ucfirst($type)}} Name (hi)</label>
                                <input class="form-control" type="text" id="hi.name" name="hi[name]"
                                       value="{{old('hi.name', $achiever->translate('hi')->name)}}">
                            </div>
                            <div class="mb-3">
                                <label for="hi.achievement"
                                       class="form-label">{{$type == "achiever"?"Achievement":"Description"}}
                                    (hi)</label>
                                @if($type == 'achiever')
                                    <input class="form-control" type="text" id="hi.achievement" name="hi[achievement]"
                                           value="{{old('hi.achievement', $achiever->translate('hi')->achievement)}}">
                                @endif
                                @if($type == 'topper')
                                    <textarea class="form-control" type="text" id="hi.achievement"
                                              name="hi[achievement]" rows="3">{{old('hi.achievement', $achiever->translate('hi')->achievement)}}</textarea>
                                @endif
                            </div>
                        </div>
                    </div>

                    @if($type=="achiever")
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="year" class="form-label">Year</label>
                                    <input class="form-control" type="number" id="year" name="year"
                                           value="{{old('year', $achiever->year)}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="group" class="form-label">Exam</label>
                                    <select class="form-select" id="group" name="group">
                                        <option value="" selected disabled>Choose Exam</option>
                                        <option value="UP-PCS" @selected(old('group', $achiever->group) == 'UP-PCS')>
                                            UP-PCS
                                        </option>
                                        <option value="UPSC" @selected(old('group', $achiever->group) == 'UPSC')>UPSC
                                        </option>
                                        <option value="Other" @selected(old('group', $achiever->group) == 'Other')>
                                            Other
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    @endif

                    <button type="submit" class="btn btn-sm btn-ex-blue mx-2">Update</button>
                    <a href="{{route($type == "achiever"?'achievers':"toppers",$type)}}"
                       class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
