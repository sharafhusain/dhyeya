@php($title = 'Fee Detail')
@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header d-inline">
            <h5 class="d-inline">Fee Detail for <span class="badge text-bg-success">{{$test->post->title}}</span></h5>
            <a href="{{route('create-fee-detail',$test->id)}}" class="btn btn-sm btn-ex-blue mx-2"
               data-bs-toggle="tooltip" data-bs-title="Add New Fee Detail">
                <i class="fa-solid fa-plus"></i>
            </a>
            <a href="{{route('test')}}" class="btn btn-sm btn-warning mx-2">Cancel</a>
            <span class="badge text-bg-primary float-end">Test ID - {{$test->id}}</span>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Type</th>
                    <th scope="col">Mode</th>
                    <th scope="col">Amount</th>
                    <th scope="col" style="width:130px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($feeDetails as $feeDetail)
                    <tr>
                        <td>{{$feeDetail->id}}</td>
                        <td>{{$feeDetail->student_type}}</td>
                        <td>{{$feeDetail->mode}}</td>
                        <td>{{$feeDetail->amount}}</td>
                        <td>
                            <a href="{{route('edit-fee-detail', [$test->id,$feeDetail->id])}}"
                               class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-title="Edit Fee Detail">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm remove"
                                    data-id="{{$feeDetail->id}}" data-bs-toggle="tooltip" data-bs-title="Delete Fee Detail">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">{{$feeDetails->links()}}</div>
    </div>


    <!-- MODEL DELETE  -->
    <div class="modal fade" id="delete-feedetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted">
                    <p>Are you sure you want to Permanently delete Fee Details ...</p>
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
            const del_url = '{{route('delete-fee-detail', [$test->id,':del_id'])}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-feedetail').modal('show');
                return false;
            });
        });
    </script>
@endsection
