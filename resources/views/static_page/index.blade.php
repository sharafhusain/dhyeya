@php($title = 'Static Page')
@extends('layouts.dashboard')
@section('content')
    <div class="mt-3 alert alert-success ajax-msg-div d-none">

    </div>
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>Static Pages List</h5>
            <a href="{{route('create-static-pages')}}" class="btn btn-sm btn-ex-blue" data-bs-toggle="tooltip"
               data-bs-title="Add New Static Page">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Content</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Keywords</th>
                    <th scope="col" style="width: 12%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($staticPage as $page)
                    <tr>
                        <td>{{$page->id}}</td>
                        <td>{!! str($page->content)->limit(50) !!}</td>
                        <td>{{$page->slug}}</td>
                        <td>{{$page->keywords}}</td>
                        <td>
                            <a href="{{route('edit-static-pages', $page->id)}}" class="btn btn-success btn-sm"
                               data-bs-toggle="tooltip" data-bs-title="Edit Static Page">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$page->id}}"
                                    data-bs-toggle="tooltip" data-bs-title="Delete Static page">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$staticPage->links()}}
        </div>
    </div>

    <!------------------------------------- MODEL DELETE  ------------------------------------->
    <div class="modal fade" id="delete-static-page" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted delete-msg">
                    <p class="delete-msg">Are you sure you want to Permanently delete Static Page...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Close</button>
                    <a href="#" id="delete-record" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
    </div>

@endsection
@section("script")
    <script>
        $(document).ready(function () {
            // Delete Function
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                const del_url = '{{route('delete-static-pages', ':del_id')}}';
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $(".delete-msg").text(`Are you sure you want to Permanently delete Static Page ${record_id} ...`);
                $('#delete-static-page').modal('show');
                return false;
            });
        });
    </script>

@endsection
