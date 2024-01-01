@php($title = 'Centers')
@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>Slider List</h5>
            <a href="{{route('create-center')}}" class="btn btn-sm btn-ex-blue"
               data-bs-toggle="tooltip" data-bs-title="Add New Center">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($centers as $center)
                    <div class="col-md-4">
                        <div class="card border-0 box-shadow-1 my-2 position-relative">
                            @if($center->image)
                                <img src="{{ asset('storage/media/'.$center->image)}}" alt="Image" class="card-img-top" style="height:250px;object-fit:cover;">
                            @else
                                <img src="{{ asset('img/placeholder.png')}}" alt="Image" class="card-img-top" style="height:250px;object-fit:cover;">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title mb-3">{{$center->title}}</h5>
                                <p class="d-flex justify-content-between">
                                    <span class="text-muted">Email</span>
                                    <span>{{$center->email}}</span>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span class="text-muted">Phone number</span>
                                    <span>{{$center->phone_number}}</span>
                                </p>
                                {{--}}<p class="d-flex justify-content-between">
                                    <span class="text-muted">Address</span>
                                    <span>{{$center->address}}</span>
                                </p>{{--}}
                                <p class="d-flex justify-content-between">
                                    <span class="text-muted">Center Type</span>
                                    <span>{{$center->center_type}}</span>
                                </p>

                                <div class="d-flex justify-content-between position-absolute top-0 start-0 m-2" style="width:96%;">
                                    <a href="{{route('edit-center', $center->id)}}" class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-title="Edit Center">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm remove"
                                            data-id="{{$center->id}}" data-bs-toggle="tooltip" data-bs-title="Delete Center">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{--<table
                class="table table-bordered table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Center Type</th>
                    <th scope="col" style="width: 18%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($centers as $center)
                    <tr>
                        <th scope="row">{{$center->id}}</th>
                        <td>
                            <img src="{{ asset('storage/media/'.$center->image)}}" alt="Image" class="img-thumbnail" style="height:100px;object-fit:cover;">
                        </td>
                        <td>{{$center->title}}</td>
                        <td>{{$center->email}}</td>
                        <td>{{$center->phone_number}}</td>
                        <td>{{$center->address}}</td>
                        <td>{{$center->center_type}}</td>
                        <td>
                            <a href="{{route('edit-center', $center->id)}}" class="btn btn-success btn-sm">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$center->id}}">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>--}}
        </div>
        <div class="card-footer">
            {{ $centers->links() }}
        </div>
    </div>

    <!-- MODEL DELETE  -->
    <div class="modal fade" id="delete-center" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted">
                    <p>Are you sure you want to Permanently delete Center ...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Close</button>
                    <a href="#" id="delete-record" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
    </div>
    {{--        MODEL DELETE--}}

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            const del_url = '{{route('delete-center', ':del_id')}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-center').modal('show');
                return false;
            });
        });
    </script>
@endsection
