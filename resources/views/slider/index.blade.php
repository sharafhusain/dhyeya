@php($title = 'Slider')
@extends('layouts.dashboard')
@section('content')

    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>Slider List</h5>
            <a href="{{route('create-slider')}}" class="btn btn-sm btn-ex-blue" data-bs-toggle="tooltip" data-bs-title="Add New Slider">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                @foreach($slider as $st)
                    <div class="col-md-6">
                        <div class="card border-0 box-shadow-1 my-2 p-2">
                            <div class="position-absolute end-0 top-0 m-3">
                                <a href="{{route('edit-slider', $st->id)}}" class="btn btn-success btn-sm"
                                   data-bs-toggle="tooltip" data-bs-title="Edit Slider">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$st->id}}"
                                        data-bs-toggle="tooltip" data-bs-title="Delete Slider">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </div>
                            @if($st->image)
                                <img src="{{ asset('storage/media/'.$st->image)}}" alt="Image" class="card-img"
                                     style="height:350px;object-fit:cover;">
                            @else
                                <img src="{{ asset('img/placeholder.png')}}" alt="Image" class="card-img"
                                     style="height:350px;object-fit:cover;">
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            {{--<table class="table table-bordered table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col" style="width:50px;">#</th>
                    <th scope="col">Image</th>
                    <th scope="col" style="width: 250px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($slider as $st)
                    <tr>
                        <th scope="row">{{$st->id}}</th>
                        <td>
                            <img src="{{ asset('storage/media/'.$st->image)}}" alt="Image" class="img-thumbnail" style="height:350px;margin:10px">
                        </td>
                        <td>
                            <a href="{{route('edit-slider', $st->id)}}" class="btn btn-success btn-sm">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$st->id}}">Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>--}}
        </div>
        <div class="card-footer">
            {{ $slider->links() }}
        </div>
    </div>

    {{--MODEL DELETE--}}
    <div class="modal fade" id="delete-slider" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted">
                    <p>Are you sure you want to Permanently delete slider ...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Close</button>
                    <a href="#" id="delete-record" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
    </div>
    {{--MODEL DELETE--}}

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            const del_url = '{{route('delete-slider', ':del_id')}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-slider').modal('show');
                return false;
            });
        });
    </script>
@endsection
