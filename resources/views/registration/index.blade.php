@php($title = 'Registered Students')
@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>Registered Student's List</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col" style="width:50px;">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Course Medium</th>
                    <th scope="col">Course Mode</th>
                    <th scope="col">Address</th>
                    <th scope="col" style="width:160px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registrations as $registration)
                    <tr>
                        <td>{{$registration->id}}</td>
                        <td>{{$registration->name}}</td>
                        <td>{{$registration->email}}</td>
                        <td>{{$registration->phone}}</td>
                        <td>{{$registration->course_name}}</td>
                        <td>{{$registration->course_medium}}</td>
                        <td>{{$registration->course_mode}}</td>
                        <td>{{$registration->address}}</td>
                        <td>
                            <a href="{{route('edit-registeredStudent', $registration->id)}}"
                               class="btn btn-success btn-sm" data-bs-toggle="tooltip"
                               data-bs-title="Edit Student Details">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$registration->id}}"
                                    data-bs-toggle="tooltip" data-bs-title="Delete Student Details">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- MODEL DELETE  -->
        <div class="modal fade" id="delete-registration" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-muted">
                        <p>Are you sure you want to Permanently delete Team Member ...</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Close</button>
                        <a href="#" id="delete-record" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        {{--        MODEL DELETE--}}

        <div class="card-footer">
            {{ $registrations->links() }}
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            const del_url = '{{route('delete-registeredStudent', ':del_id')}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-registration').modal('show');
                return false;
            });
        });
    </script>
@endsection
