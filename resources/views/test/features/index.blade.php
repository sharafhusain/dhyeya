@php($title = 'Features')
@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="d-inline">Features For <span class="badge text-bg-success">{{$test->post->title}}</span></h5>
            <a href="{{route('create-test-feature', $test->id)}}" class="btn btn-sm btn-ex-blue mx-2"
               data-bs-toggle="tooltip" data-bs-title="Add New Feature">
                <i class="fa-solid fa-plus"></i>
            </a>
            <a href="{{route('test')}}" class="btn btn-sm btn-warning mx-2">Cancel</a>
            <span class="float-end badge text-bg-primary">Test ID - {{$test->id}}</span>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col" style="width:7%;">#</th>
                    <th scope="col">Features</th>
                    <th scope="col" style="width:150px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($features as $feature)
                    <tr>
                        <td>{{$feature->id}}</td>
                        <td>{{$feature->title}}</td>
                        <td>
                            <a href="{{route('edit-test-feature', [$test->id, $feature->id])}}"
                               class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-title="Edit Feature">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm remove"
                                    data-id="{{$feature->id}}" data-bs-toggle="tooltip" data-bs-title="Delete Feature">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer mt-3">
            {{$features->links()}}
        </div>
    </div>


    <!-- MODEL DELETE  -->
    <div class="modal fade" id="delete-features" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted">
                    <p>Are you sure you want to Permanently delete Features ...</p>
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
            const del_url = '{{route('delete-test-feature', [$test->id,':del_id'])}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-features').modal('show');
                return false;
            });
        });

    </script>
@endsection
