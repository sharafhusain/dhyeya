@extends('front.team.index')
@section('team-content')
    <section class="my-4">
        @foreach($directors as $director)
            @if($loop->odd)
                {{--<div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/media/'.$director->image) }}" class="img-fluid rounded-start" alt="image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $director->first_name.' '.$director->last_name }}</h5>
                                <p class="card-text">{{ $director->description }}</p>
--}}{{--                                <p class="card-text"><small class="text-muted">{{ $director->updated_at }}</small></p>--}}{{--
                            </div>
                        </div>
                    </div>
                </div>--}}
                <div class="card card-body border-0 shadow-sm my-4 icon-box">
                    <div class="clearfix">
                        <img src="{{ asset('storage/media/'.$director->image) }}" alt="image"
                             class="float-md-start me-md-3 img-thumbnail" style="width:240px">
                        <h5 class="fw-600 text-primary mb-0">{{ $director->name }}</h5>
                        <p class="text-secondary fs-9 fst-italic text-uppercase">{{ $director->position }}</p>
                        <span class="fs-7"><?= $director->description ?></span>
                    </div>
                </div>
            @else
                <div class="card card-body border-0 shadow-sm my-3 icon-box">
                    <div class="clearfix">
                        <img src="{{ asset('storage/media/'.$director->image) }}" alt="image"
                             class="float-md-end ms-md-3 img-thumbnail" style="width:240px">
                        <h5 class="fw-600 text-primary mb-0 text-end">{{ $director->name }}</h5>
                        <p class="text-secondary fs-9 fst-italic text-end text-uppercase">{{ $director->position }}</p>
                        <span class="fs-7"><?= $director->description ?></span>
                    </div>
                </div>
            @endif
        @endforeach
    </section>
@endsection
