@php($title = 'Job Posts')
@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>Jobs List</h5>
            <a href="{{route('create-vacancies')}}" class="btn btn-sm btn-ex-blue"
               data-bs-toggle="tooltip" data-bs-title="Add New Job Vacancy">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Job Category</th>
                    <th scope="col">Location</th>
                    <th scope="col">No. of Openings</th>
                    {{--                    <th scope="col">Skill Qualification</th>--}}
                    {{--                    <th scope="col">Role Description</th>--}}
                    <th scope="col">Job Type</th>
                    <th scope="col">salary</th>
                    <th scope="col" style="width:150px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vacancies as $vacancy)
                    <tr>
                        <td scope="row">{{$vacancy->id}}</td>
                        <td scope="row">{{$vacancy->title}}</td>
                        <td scope="row">{{$vacancy->job_category}}</td>
                        <td scope="row">{{$vacancy->location}}</td>
                        <td scope="row">{{$vacancy->no_of_openings}}</td>
                        {{--                        <td scope="row">{{$vacancy->skill_qualification}}</td>--}}
                        {{--                        <td scope="row">{{$vacancy->role_description}}</td>--}}
                        <td scope="row">{{$vacancy->job_type}}</td>
                        <td scope="row">{{$vacancy->salary}}</td>
                        <td>
                            <a href="{{route('edit-vacancies', $vacancy->id)}}" class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-title="Edit Job Vacancy">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$vacancy->id}}" data-bs-toggle="tooltip" data-bs-title="Delete Job Vacancy">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- MODEL DELETE  -->
        <div class="modal fade" id="delete-vacancies" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-muted">
                        <p>Are you sure you want to Permanently delete Job Vacancy ...</p>
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
            {{ $vacancies->links() }}
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            const del_url = '{{route('delete-vacancies', ':del_id')}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-vacancies').modal('show');
                return false;
            });
        });
    </script>
@endsection
