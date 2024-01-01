@php $title_front =  __('about.achievers') @endphp
@extends('layouts.front')
@section('content_ui')
    {{--    <h3 class="mt-4">Dhyeya IAS <span class="text-secondary">Achievers</span></h3>--}}

    <section id="achievers" style="min-height:100vh;" class="my-5">
        <nav>
            <div class="nav nav-tabs border-0 justify-content-center" id="nav-tab" role="tablist">
                @php $ind = 0 @endphp

                @foreach($achievers as $year => $group)
                    <button class="nav-link border-0 {{$ind==0?"active":""}}" id="nav-{{$year}}-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-tab-{{$year}}"
                            type="button" role="tab" aria-controls="nav-home"
                            aria-selected="{{$ind==0?"true":"false"}}">{{$year}}
                    </button>
                    @php $ind += 1 @endphp
                @endforeach
                @php $ind = 0 @endphp
            </div>
        </nav>

        <div class="tab-content bg-white" id="nav-tabContent">
            {{----------------------------------------------------}}
            @foreach($achievers as $year => $groups)
                <div class="tab-pane fade  {{$ind==0?"show active":""}}" id="nav-tab-{{$year}}" role="tabpanel"
                     aria-labelledby="nav-{{$year}}"
                     tabindex="0">
                    @php $ind += 1 @endphp
                    <div class="p-3">
                        @foreach($groups as $groupName => $achiever)
                            <h2 class="mx-auto py-3 bellow-line">{{$groupName}}</h2>
                            <div class="row justify-content-center mx-auto">
                                @foreach($achiever as $person)
                                    <div class="col-md-3">
                                        {{--Achievers box--}}
                                        <div class="text-center mx-auto m-3">
                                            <div class="card-img my-3 img-3 mx-auto">
                                                @if($person->image)
                                                    <img src="{{asset('storage/media/'.$person->image)}}" alt="image"
                                                         class="rounded-circle shadow-sm"
                                                         style="width:140px;height:140px;">
                                                @else
                                                    <img src="{{asset('img/placeholder.png')}}" alt="image"
                                                         class="rounded-circle shadow-sm"
                                                         style="width:140px;height:140px;">
                                                @endif
                                            </div>
                                            <h5 class="h5 mt-2 mb-0 fw-600 text-primary">{{$person->name}}</h5>
                                            <p class="fs-9 m-0 text-secondary">{{$person->achievement}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
            {{------------------------------------------------------------------------------------}}
        </div>
@endsection
