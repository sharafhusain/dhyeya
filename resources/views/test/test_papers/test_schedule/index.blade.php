@php($title = 'Test Schedule')
@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="d-inline">Test Schedule for <span class="badge text-bg-success">{{$paper->test_name}}</span></h5>
            <a href="{{route('create-schedule',[$test->id,$paper->id])}}" class="btn btn-sm btn-ex-blue mx-2"
               data-bs-toggle="tooltip" data-bs-title="Add New Test Schedule">
                <i class="fa-solid fa-plus"></i>
            </a>
            <a href="{{route('test-paper',$test->id )}}" class="btn btn-sm btn-warning mx-2">Cancel</a>
            <span class="badge text-bg-primary float-end">Test ID - {{$test->id}} </span>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Subject</th>
                    <th scope="col" style="width:150px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($schedules as $schedule)
                    <tr>
                        <td>{{$schedule->id}}</td>
                        <td>{{$schedule->subject}}</td>
                        <td>
                            <a href="{{route('edit-schedule', [$test->id, $paper->id,$schedule->id])}}"
                               class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-title="Edit Test Schedule">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$schedule->id}}" data-bs-toggle="tooltip" data-bs-title="Delete Test Schedule">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $schedules->links() }}
        </div>
    </div>


    <!-- MODEL DELETE  -->
    <div class="modal fade" id="delete-schedule" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted">
                    <p>Are you sure you want to Permanently delete Schedule ...</p>
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
            const del_url = '{{route('delete-schedule', ["test" => $test->id,"paper" => $paper->id,"schedule" =>':del_id'])}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-schedule').modal('show');
                return false;
            });
        });

    </script>
@endsection
