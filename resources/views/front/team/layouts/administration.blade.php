@extends('front.team.index')
@section('team-content')
    <section class="my-4">
        <div class="row justify-content-center g-4">
            @foreach($administrators as $administrator)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="overflow-hidden p-2 mx-auto">
                        <div class="card border-0 shadow-sm position-relative">
                            <div class="strip-reverse bg-primary text-center text-light p-1 px-4 fs-8">{{ __('team.administrators') }}</div>
                            <div class="card-body text-center">
                                <div class="card-img my-3 mx-auto">
                                    @if($administrator->image)
                                        <img src="{{asset('storage/media/'.$administrator->image)}}" alt="image"
                                             class="rounded-circle shadow-lg img-3" style="height:160px;">
                                    @else
                                        <img src="{{asset('img/placeholder.png')}}" alt="image"
                                             class="rounded-circle shadow-lg img-3" style="height:160px;">
                                    @endif
                                </div>
                                <div class="card-title">
                                    <p class="h5">{{ucfirst($administrator->name)}}</p>
                                </div>
                                <div class="card-text fs-8">
                                    <p class="text-secondary m-0">{{$administrator->position}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
