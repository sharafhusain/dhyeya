@php($title = 'Batch Details')
@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>Batches List</h5>
            <a href="{{route('create-batch')}}" class="btn btn-sm btn-ex-blue" data-bs-toggle="tooltip"
               data-bs-title="Add New Batch Detail">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($batches as $batch)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card border-0 box-shadow-1 my-2 position-relative">
                            @if($batch->image)
                                <img src="{{ asset('storage/media/'.$batch->image)}}" alt="Image" class="card-img-top"
                                     style="height:350px;object-fit:cover;">
                            @else
                                <img src="{{ asset('img/placeholder.png')}}" alt="Image" class="card-img-top"
                                     style="height:350px;object-fit:cover;">
                            @endif
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5>{{$batch->title}}</h5>
                                    @if($batch->status == "active")
                                        <span class="badge text-bg-success">Active</span>
                                    @else
                                        <span class="badge text-bg-warning">Inactive</span>
                                    @endif
                                </div>
                                <p>{{$batch->center->title}}<span class="text-muted float-end">Center</span></p>
                                <p>{{$batch->medium}} <span class="text-muted float-end">Medium</span></p>
                                <p>{{$batch->date}} <span class="text-muted float-end">Date</span></p>
                                <p>{{$batch->time}} <span class="text-muted float-end">Time</span></p>
                                <div class="position-absolute top-0 start-0 m-2"
                                     style="width:96%">
                                    <a href="{{route('edit-batch', $batch->id)}}"
                                       class="btn btn-success btn-sm" data-bs-toggle="tooltip"
                                       data-bs-title="Edit Batch Detail">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$batch->id}}"
                                            data-bs-toggle="tooltip" data-bs-title="Delete Batch Detail">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{--            <table--}}
            {{--                class="table table-bordered table-striped table-hover table-sm table-responsive align-middle text-center">--}}
            {{--                <thead>--}}
            {{--                <tr>--}}
            {{--                    <th scope="col" style="width:50px;">#</th>--}}
            {{--                    <th scope="col">Tile</th>--}}
            {{--                    <th scope="col">Center</th>--}}
            {{--                    <th scope="col">Image</th>--}}
            {{--                    <th scope="col">Medium</th>--}}
            {{--                    <th scope="col">Date</th>--}}
            {{--                    <th scope="col">Time</th>--}}
            {{--                    <th scope="col" style="width:200px;">Action</th>--}}
            {{--                </tr>--}}
            {{--                </thead>--}}
            {{--                <tbody>--}}
            {{--                @foreach($batches as $batch)--}}
            {{--                    <tr>--}}
            {{--                        <td>{{$batch->id}}</td>--}}
            {{--                        <td>--}}
            {{--                            {{$batch->title}}--}}
            {{--                            @if($batch->status == "active")--}}
            {{--                                <span class="badge text-bg-success">Active</span>--}}
            {{--                            @else--}}
            {{--                                <span class="badge text-bg-warning">Inactive</span>--}}
            {{--                            @endif--}}
            {{--                        </td>--}}
            {{--                        <td>{{$batch->center->title}}</td>--}}
            {{--                        <td>--}}
            {{--                            <img src="{{ asset('storage/media/'.$batch->image)}}" alt="Image" class="img-thumbnail"--}}
            {{--                                 style="height:100px;">--}}
            {{--                        </td>--}}
            {{--                        <td>{{$batch->medium}}</td>--}}
            {{--                        <td>{{$batch->date}}</td>--}}
            {{--                        <td>{{$batch->time}}</td>--}}
            {{--                        <td>--}}
            {{--                            <a href="{{route('edit-batch', $batch->id)}}" class="btn btn-success btn-sm">Edit</a>--}}
            {{--                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$batch->id}}">--}}
            {{--                                Delete--}}
            {{--                            </button>--}}
            {{--                        </td>--}}
            {{--                    </tr>--}}
            {{--                @endforeach--}}
            {{--                </tbody>--}}
            {{--            </table>--}}
        </div>
        <div class="card-footer">
            {{ $batches->links() }}
        </div>
    </div>

    <!-- MODEL DELETE  -->
    <div class="modal fade" id="delete-batch" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted">
                    <p>Are you sure you want to Permanently delete batch ...</p>
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
            const del_url = '{{route('delete-batch', ':del_id')}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-batch').modal('show');
                return false;
            });
        });
    </script>
@endsection
