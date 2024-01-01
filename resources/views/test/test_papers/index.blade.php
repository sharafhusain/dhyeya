@php($title = 'Test Papers')
@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header d-inline">
            <h5 class="d-inline">Test Paper for <span class="badge text-bg-success">{{$test->post->title}}</span></h5>
            <a href="{{route('create-test-paper',$test->id)}}" class="btn btn-sm btn-ex-blue mx-2"
               data-bs-toggle="tooltip" data-bs-title="Add New Test Paper">
                <i class="fa-solid fa-plus"></i>
            </a>
            <a href="{{route('test')}}" class="btn btn-sm btn-warning mx-2">Cancel</a>
            <form action="{{route('publish_results')}}" method="post">
                @csrf
                <input type="hidden" value="{{$test->id}}" name="testid">
                <input type="hidden" value="{{$test->result_published?0:1}}" name="result_published">
            <button type="submit" class="btn mx-2 float-end {{ $test->result_published?"btn-danger":"btn-primary" }}">{{ $test->result_published?"UNPUBLISH RESULT":"PUBLISH RESULT" }}</button>
            </form>
            <span class="badge text-bg-primary float-end">Test ID - {{$test->id}}</span>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col" style="width:50px;">#</th>
                    <th scope="col">Test Name</th>
                    <th scope="col" style>Test Schedule</th>
                    <th scope="col">Test Date</th>
                    <th scope="col" style="width:180px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($papers as $paper)
                    <tr>
                        <td>{{$paper->id}}</td>
                        <td>{{$paper->test_name}}</td>
                        <td>
                            <a href="{{route('schedule', [$test->id, $paper->id])}}"
                               class="btn badge btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-title="View Test Schedule">schedule</a>
                        </td>
                        <td>{{$paper->date}}</td>
                        <td>
                            <button type="button" class="btn btn-dark btn-sm uploadFilebtn" data-test-id="{{$paper->id}}"
                                    data-bs-target="#uploadFile" data-bs-toggle="tooltip" data-bs-title="Upload Test Result">
                                <i class="fa-solid fa-upload"></i>
                            </button>
                            <a href="{{route('edit-test-paper', [$test->id, $paper->id])}}"
                               class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-title="Edit Test Paper">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$paper->id}}" data-bs-toggle="tooltip" data-bs-title="Delete Test Paper">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $papers->links() }}
        </div>
    </div>


    <!-- MODEL DELETE  -->
    <div class="modal fade" id="delete-paper" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted">
                    <p>Are you sure you want to Permanently delete Test Papers ...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Close</button>
                    <a href="#" id="delete-record" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <!-- UPLOAD FILE MODEL -->
    <div class="modal fade" id="uploadFile" tabindex="-1" aria-labelledby="uploadFileLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="uploadFileLabel">Upload File</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="uploadForm" action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control" type="file" id="filename" name="filename"
                                   accept="application/pdf">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-ex-blue btn-sm">upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            const del_url = '{{route('delete-test-paper', [$test->id,':del_id'])}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-paper').modal('show');
                return false;
            });

            $('.uploadFilebtn').on('click', function () {
                const uploadFile = new bootstrap.Modal('#uploadFile')
                const uploadUrl = '{{route('test-paper', ":test_paper_id")}}';
                let test_id = $(this).data('test-id');
                $('#uploadForm').attr('action', uploadUrl.replace(':test_paper_id', test_id));
                uploadFile.show();
                return false;
            });
        });
    </script>
@endsection
