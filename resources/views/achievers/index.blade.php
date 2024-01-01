@php($title = ucwords($type))
@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>{{ucwords($type)}} List</h5>
            <a href="{{route($type == "achiever"?'create-achievers':"create-toppers",$type)}}"
               class="btn btn-sm btn-ex-blue" data-bs-toggle="tooltip" data-bs-title="Add New {{ucfirst($type)}}">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                @foreach($achievers as $achiever)
                    <div class="col-md-4">
                        <div class="card text-center border-0 box-shadow-1 my-2 position-relative" style="min-height:312px;">
                            @if($achiever->image)
                                <img src="{{ asset('storage/media/'.$achiever->image)}}" alt="Image" class="rounded-circle shadow-sm img-3 mx-auto mt-4" style="height:160px;object-fit:cover;">
                            @else
                                <img src="{{ asset('img/placeholder.png')}}" alt="Image" class="rounded-circle shadow-sm img-3 mx-auto mt-4" style="height:160px;">
                            @endif
                            <div class="card-body">
                                <h5 class="text-primary fw-600">{{ucwords($achiever->name)}}</h5>
                                <p class="text-muted">{{str($achiever->achievement)->limit(80)}}</p>
                                <div class="position-absolute top-0 p-2 d-flex justify-content-between align-items-center" style="width:94%;object-fit:cover;">
                                    @if($type == "achiever")
                                        <span class="text-muted fs-9 fst-italic"> {{$achiever->year}} {{$achiever->group}}</span>
                                    @endif
                                    <span>
                                        <a href="{{route($type == "achiever"?'edit-achievers':"edit-toppers", [$type,$achiever->id])}}"
                                       class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-title="Edit {{ucfirst($achiever->type)}}">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm remove"
                                            data-id="{{$achiever->id}}" data-bs-toggle="tooltip" data-bs-title="Delete {{ucfirst($achiever->type)}}">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{--<table class="table table-bordered table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">{{ucwords($type)}} Name</th>
                    <th scope="col">{{$type == "achiever"? "Achievement":"Description"}}</th>
                    @if($type == "achiever")
                    <th scope="col">Year</th>
                    <th scope="col">Exam</th>
                    @endif
                    <th scope="col" style="width:200px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($achievers as $achiever)
                    <tr>
                        <th scope="row">{{$achiever->id}}</th>
                        <td>
                            <img src="{{ asset('storage/media/'.$achiever->image)}}" alt="Image" class="img-thumbnail" style="height:100px;">
                        </td>
                        <td>{{ucwords($achiever->name)}}</td>
                        <td>{{$achiever->achievement}}</td>
                        @if($type == "achiever")
                        <td>{{$achiever->year}}</td>
                        <td>{{$achiever->group}}</td>
                        @endif
                        <td>
                            <a href="{{route($type == "achiever"?'edit-achievers':"edit-toppers", [$type,$achiever->id])}}" class="btn btn-success btn-sm">Edit</a>
                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$achiever->id}}">Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>--}}
        </div>

        <div class="card-footer">
            {{ $achievers->links() }}
        </div>
    </div>


    <!-- MODEL DELETE  -->
    <div class="modal fade" id="delete-achievers" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted">
                    <p>Are you sure you want to Permanently delete {{ucwords($type)}} ...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Close</button>
                    <a href="#" id="delete-record" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            const del_url = '{{route('delete-achievers', [$type,':del_id'])}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-achievers').modal('show');
                return false;
            });
        });
    </script>
@endsection
