@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>User List</h5>
            <a href="{{route('create-user')}}" class="btn btn-sm btn-ex-blue" data-bs-toggle="tooltip"
               data-bs-title="Add New User">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col" style="width:50px;">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
{{--                    <th scope="col">status</th>--}}
                    <th scope="col">Role</th>
                    <th scope="col" style="width:300px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{ucwords($user->name)}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        {{--<td>
                            @if($user->status == "Active")
                                <span class="badge text-bg-success">Active</span>
                            @else
                                <span class="badge text-bg-warning">Inactive</span>
                            @endif
                        </td>--}}
                        <td>{{$user->role}}</td>
                        <td>
                            <a href="{{route('edit-user', $user->id)}}" class="btn btn-success btn-sm"
                               data-bs-toggle="tooltip" data-bs-title="Edit User">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            @if(auth()->user()->id != $user->id)
                                <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$user->id}}"
                                        data-bs-toggle="tooltip" data-bs-title="Delete User">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $users->links() }}
        </div>
    </div>

    <!------------------------------------- MODEL DELETE  ------------------------------------->
    <div class="modal fade" id="delete-user" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted delete-msg">
                    <p class="delete-msg">Are you sure you want to Permanently delete this User ...</p>
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
            const del_url = '{{route('delete-user', ':del_id')}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-user').modal('show');
                return false;
            });
        });
    </script>
@endsection
