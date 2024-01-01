@php($title = 'Team')
@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>Team List</h5>
            <a href="{{route('create-team')}}" class="btn btn-sm btn-ex-blue"
               data-bs-toggle="tooltip" data-bs-title="Add New Team Member">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($teams as $team)
                    <div class="col-md-4 col-sm-6">
                        <div class="card border-0 box-shadow-1 my-2 text-center position-relative">
                            @if($team->image)
                                <img src="{{ asset('storage/media/'.$team->image)}}" alt="Image"
                                     class="img-3 rounded-circle mx-auto mt-3" style="height:160px;object-fit:cover;">
                            @else
                                <img src="{{ asset('img/placeholder.png')}}" alt="Image"
                                     class="img-3 rounded-circle mx-auto mt-3" style="height:160px;object-fit:cover;">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ucwords($team->name)}}</h5>
{{--                                <p class="text-muted">{{str($team->description)->limit(80)}}</p>--}}
                                <p class="text-secondary mb-0">{{$team->role}}</p>
                                <p style="color:#cccccc">{{$team->title}}</p>

                                <div class="position-absolute top-0 end-0 m-3">
                                    <a href="{{route('edit-team', $team->id)}}" class="btn btn-success btn-sm"
                                       data-bs-toggle="tooltip" data-bs-title="Edit Team Member">
                                        <i class="fa-regular fa-pen-to-square"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$team->id}}"
                                            data-bs-toggle="tooltip" data-bs-title="Delete Team Member">
                                        <i class="fa-regular fa-trash-can"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{--}}<table class="table table-bordered table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Role</th>
                    <th scope="col">Title</th>
                    <th scope="col" style="width: 18%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teams as $team)
                    <tr>
                        <th scope="row">{{$team->id}}</th>
                        <td>
                            <img src="{{ asset('storage/media/'.$team->image)}}" alt="Image" class="img-thumbnail" style="height:100px;object-fit:cover;">
                        </td>
                        <td>{{ucwords($team->first_name.' '.$team->last_name)}}</td>
                        <td>{{str($team->description)->limit(75)}}</td>
                        <td>{{$team->role}}</td>
                        <td>{{$team->title}}</td>
                        <td>
                            <a href="{{route('edit-team', $team->id)}}" class="btn btn-success btn-sm">Edit</a>
                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$team->id}}">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>{{--}}
        </div>

        <!-- MODEL DELETE  -->
        <div class="modal fade" id="delete-team" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
            {{ $teams->links() }}
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            const del_url = '{{route('delete-team', ':del_id')}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-team').modal('show');
                return false;
            });
        });
    </script>
@endsection
