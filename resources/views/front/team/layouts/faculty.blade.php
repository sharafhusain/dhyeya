@extends('front.team.index')
@section('team-content')
    <section class="my-5">
        <div class="row justify-content-center g-4">
            @foreach($subjectGroups as $subject_type => $subjects)
{{--            <div class="col-lg-6">--}}
                <div class="text-center bellow-line-parent">
                    <h4 class="mb-0 bellow-line-center mx-auto mb-2 pb-1">{{ $subject_type }}s</h4>
                    {{--                    <p class="text-muted fw-light bellow-line-center mb-4 d-inline-block">Explore more with Dhyeya IAS Faculties.</p>--}}
                </div>
                @foreach($subjects as $subject)
                    {{--                    <div class="col-md-6">--}}
                    <div class="my-4">
                        <div class="d-flex border rounded-top" style="width:fit-content;">
                            <h5 class="text-center text-capitalize mb-0 text-bg-primary p-2 px-3 rounded-top">{{ $subject->name }}</h5>
                            <h6 class="text-center text-muted p-2 px-3 mb-0 fs-9">Teachers <i
                                    class="fa-solid fa-arrow-down fs-95"></i></h6>
                        </div>
                        <div class="card shadow-sm px-0 mt-0 rounded-0 rounded-bottom border-0">
                            <div class="card-body">
                                {{--                            <h6 class="card-subtitle mb-2 text-muted text-center">Teachers:</h6>--}}
                                <ul class="list-group list-group-horizontal flex-wrap">
                                    @foreach($subject->team as $team)
                                        <li class="list-group-item text-center border rounded my-2 mx-1">
                                            @if($team->image)
                                                <img src="{{ asset('storage/media/'.$team->image) }}" alt="Image"
                                                     class="img-fluid rounded-circle mx-2 img-hover"
                                                     style="height:40px;">
                                            @else
                                                <img src="{{ asset('public/img/user-placeholder.jpeg') }}" alt="Image"
                                                     class="img-fluid rounded-circle mx-2 img-hover"
                                                     style="height:40px;">
                                            @endif
                                            <span class="mt-2">{{ $team->name }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{--                    </div>--}}
                    {{--<div class="col-sm-3 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-header text-bg-primary mb-2">
                                <h5 class="text-center text-capitalize">{{ $subject->name }}</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Teachers:</h6>
                                <ul class="list-group">
                                    @foreach($subject->team as $team)
                                        <li class="list-group-item">
                                            @if($team->image)
                                                <img src="{{ asset('storage/media/'.$team->image) }}" alt="Image"
                                                     class="img-fluid rounded-circle mx-2 img-hover" style="height:40px;">
                                            @else
                                                <img src="{{ asset('public/img/user-placeholder.jpeg') }}" alt="Image"
                                                     class="img-fluid rounded-circle mx-2 img-hover" style="height:40px;">
                                            @endif
                                            <span>{{ $team->name }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>--}}
                @endforeach
{{--            </div>--}}
            @endforeach
        </div>
    </section>
@endsection
