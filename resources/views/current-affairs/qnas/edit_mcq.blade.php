@php($title = 'Create '.ucwords(str_replace("-"," ",$type). " | subject= ".$subject->title))
@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Edit MCQ</h5>
            </div>
            <div class="card-body">
                <form action="{{route("updatemcq",[$type,$subject->id,$mcq->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="en.question" class="form-label">Question<span
                                        class="text-muted">(en)</span></label>
                                <textarea class="form-control mySmallEditor" type="text" id="enquestion" name="en[question]"
                                >{{old("en.question",$mcq->translate("en")->question)}}</textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="hi.question" class="form-label">Question <span
                                        class="text-muted">(hi)</span></label>
                                <textarea class="form-control  mySmallEditor" type="text" id="hiquestion" name="hi[question]"
                                >{{old("hi.question",$mcq->translate("hi")->question)}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="en.more_info" class="form-label">More Info <small>Optional</small><span
                                        class="text-muted">(en)</span></label>
                                <textarea class="form-control " type="text" id="enmore_info" name="en[more_info]"
                                >{{old("en.more_info",$mcq->translate("en")->more_info)}}</textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="hi.more_info" class="form-label">More Info <small>Optional</small> <span
                                        class="text-muted">(hi)</span></label>
                                <textarea class="form-control  " type="text" id="himore_info" name="hi[more_info]"
                                >{{old("hi.more_info",$mcq->translate("hi")->more_info)}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="en.option_a" class="form-label">Option A<span
                                        class="text-muted">(en)</span></label>
                                <input class="form-control" type="text" id="ena" name="en[option_a]" value="{{old("en.option_a",$mcq->translate("en")->option_a)}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="hi.option_a" class="form-label">Option A <span
                                        class="text-muted">(hi)</span></label>
                                <input class="form-control" type="text" id="hia" name="hi[option_a]" value="{{old("hi.option_a",$mcq->translate("hi")->option_a)}}">
                            </div>
                        </div>
                    </div>
                    {{--                        b--}}
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="en.option_b" class="form-label">Option B<span
                                        class="text-muted">(en)</span></label>
                                <input class="form-control" type="text" id="enb" name="en[option_b]" value="{{old("en.option_b",$mcq->translate("en")->option_b)}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="hi.option_b" class="form-label">Option B <span
                                        class="text-muted">(hi)</span></label>
                                <input class="form-control" type="text" id="hib" name="hi[option_b]" value="{{old("hi.option_b",$mcq->translate("hi")->option_b)}}">
                            </div>
                        </div>
                    </div>
                    {{--                        c--}}
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="en.option_c" class="form-label">Option C<span
                                        class="text-muted">(en)</span></label>
                                <input class="form-control" type="text" id="enc" name="en[option_c]" value="{{old("en.option_c",$mcq->translate("en")->option_c)}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="hi.option_c" class="form-label">Option C <span
                                        class="text-muted">(hi)</span></label>
                                <input class="form-control" type="text" id="hic" name="hi[option_c]" value="{{old("hi.option_c",$mcq->translate("hi")->option_c)}}">
                            </div>
                        </div>
                    </div>
                    {{--                        d--}}
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="en.option_d" class="form-label">Option D<span
                                        class="text-muted">(en)</span></label>
                                <input class="form-control" type="text" id="end" name="en[option_d]" value="{{old("en.option_d",$mcq->translate("en")->option_d)}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="hi.option_d" class="form-label">Option D <span
                                        class="text-muted">(hi)</span></label>
                                <input class="form-control" type="text" id="hid" name="hi[option_d]" value="{{old("hi.option_d",$mcq->translate("hi")->option_d)}}">
                            </div>
                        </div>
                    </div>
                    {{--                        Answer--}}
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="en.answer" class="form-label">Answer<span
                                        class="text-muted">(en)</span></label>
                                <input class="form-control" type="text" id="enanswer" name="en[answer]" value="{{old("en.answer",$mcq->translate("en")->answer)}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="hi.answer" class="form-label">Anser <span
                                        class="text-muted">(hi)</span></label>
                                <input class="form-control" type="text" id="hianswer" name="hi[answer]" value="{{old("hi.answer",$mcq->translate("hi")->answer)}}">
                            </div>
                        </div>
                    </div>
                    {{--                        Explanation--}}
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="en.description" class="form-label">Description<span
                                        class="text-muted">(en)</span></label>
                                <textarea class="form-control mySmallEditor" type="text" id="endescription" name="en[description]"
                                >{{old("en.description",$mcq->translate("en")->description)}}</textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="hi.description" class="form-label">Description <span
                                        class="text-muted">(hi)</span></label>
                                <textarea class="form-control mySmallEditor" rows="5" type="text" id="hidescription" name="hi[description]"
                                >{{old("hi.description",$mcq->translate("hi")->description)}}</textarea>
                            </div>
                        </div>
                    </div>

                    <button class="btn  btn-danger" type="subbmit" id="submitbtn">Update</button>
                    <a href="{{route('qnas',[$type,$subject->id])}}" class="btn btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
