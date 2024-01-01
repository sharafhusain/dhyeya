@php($title = 'Test Series')
@extends('layouts.dashboard')
@section('content')
    <div class="mt-3 alert alert-success ajax-msg-div d-none">

    </div>
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>Test Series List</h5>
            <a href="{{route('create-test')}}" class="btn btn-sm btn-ex-blue"
               data-bs-toggle="tooltip" data-bs-title="Add New Test Series">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col" style="width:50px;">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Total no of tests</th>
                    <th scope="col">Mode</th>
                    <th scope="col">Medium</th>
                    <th scope="col">Starting Date</th>
                    <th scope="col">Exam Type</th>
                    <th scope="col" style="width:300px;">More Details</th>
                    <th scope="col" style="width:350px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tests as $test)
                    <tr>
                        <td>{{$test->id}}</td>
                        <td>{{$test->post->title}}
                            @if($test->post->status == "active")
                                <span class="badge text-bg-success">Active</span>
                            @else
                                <span class="badge text-bg-warning">Inactive</span>
                            @endif</td>
                        <td>{{$test->total_no_of_test}}</td>
                        <td>{{$test->mode}}</td>
                        <td>{{$test->medium}}</td>
                        <td>{{$test->starting_date}}</td>
                        <td>{{$test->test_type}}</td>
                        <td>
                            <a type="button" class="btn badge text-bg-primary features" data-id="{{$test->id}}"
                               data-bs-toggle="tooltip" data-bs-title="View Features">
                                Features
                            </a>

                            <a type="button" class="btn badge text-bg-primary installment" data-bs-toggle="tooltip"
                               data-bs-title="View Installments" data-id="{{$test->id}}">
                                Fee Details
                            </a>


                            {{--<a href="{{route("fee-detail", $test->id)}}" class="btn badge text-bg-primary"
                               data-bs-toggle="tooltip" data-bs-title="View Fee Details">Fee
                                Details</a>--}}
                            <a href="{{route('test-paper', $test->id)}}" class="btn badge text-bg-primary"
                               data-bs-toggle="tooltip" data-bs-title="View Test Paper">Test
                                Papers</a>
                        </td>
                        <td>
                            {{--<button
                                data-id="{{$test->post->id}}"
                                data-type="menubtn"
                                class="btn badge btn-sm p-2 {{$test->post->menu ? "btn-secondary":"btn-dark" }} menubtn"
                                data-bs-toggle="tooltip"
                                data-isactive="{{$test->post->menu?1:0}}"
                                data-bs-title="{{$test->post->menu ? "Remove From Menu" :"Add To Menu"}}">
                                    <span
                                        class="fw-bold fs-8">
                                        {{$test->post->menu ? "-":"+"}}
                                    </span>
                                Menu
                            </button>--}}

                            <button
                                data-id="{{$test->post->id}}"
                                data-type="notificationbtn"
                                class="btn badge btn-sm p-2 {{$test->post->notification ? "btn-secondary":"btn-dark" }} notificationbtn"
                                data-bs-toggle="tooltip"
                                data-isactive="{{$test->post->notification?1:0}}"
                                data-bs-title="{{$test->post->notification ? "Remove From Notification" :"Add To Notification"}}">
                            <span
                                class="{{$test->post->notification ? "fw-bold fs-8": "btn-secondary"}}">
                                {{$test->post->notification ? "-":"+"}}
                            </span>
                                <i class="fa-solid fa-bell"></i>
                            </button>

                            <a href="{{route('edit-test', $test->id)}}" class="btn btn-success btn-sm"
                               data-bs-toggle="tooltip" data-bs-title="Edit Test Series">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$test->id}}"
                                    data-bs-toggle="tooltip" data-bs-title="Delete Test Series">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$tests->links()}}
        </div>
    </div>
    @include("test.features.module")
    @include("test.fee_details.module")

    <!-- MODEL DELETE  -->
    <div class="modal fade" id="delete-test" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted">
                    <p>Are you sure you want to Permanently delete Test Series ...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Close</button>
                    <a href="#" id="delete-record" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
    </div>
    {{--        MODEL DELETE--}}

    <!-- Modal Installment -->
    <div class="modal fade" id="create-installment" tabindex="-1" aria-labelledby="installmentLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="installmentLabel">Installment Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        </div>


        @endsection
        @section('script')

            @include("test.features.AjaxCRUD")
            @include("test.fee_details.AjaxCRUD")

            <script>
                $(document).ready(function () {
                    const del_url = '{{route('delete-test', ':del_id')}}';
                    $('.remove').on('click', function () {
                        let record_id = $(this).data('id');
                        $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                        $('#delete-test').modal('show');
                        return false;
                    });


                    $(".menubtn, .notificationbtn").on("click", function () {
                        let add_url = ""
                        let remove_url = ""
                        if ($(this).data("type") == "menubtn") {
                            add_url = '{{route('add-to-menu', ":id")}}'
                            remove_url = '{{route('remove-from-menu', ":id")}}'
                        } else if ($(this).data("type") == "notificationbtn") {
                            add_url = '{{route('add-to-notification', ":id")}}'
                            remove_url = '{{route('remove-from-notification', ":id")}}'
                        }

                        let myurl = $(this).data("isactive") ? remove_url.replace(":id", $(this).data("id")) : add_url.replace(":id", $(this).data("id"))
                        const self = $(this)
                        $.ajax({
                            url: myurl,
                            method: "GET",
                            success: function (result) {
                                $(".ajax-msg-div").text(result.msg)
                                $(".ajax-msg-div").removeClass("d-none")
                                if (self.data("isactive")) {
                                    self.data("isactive", 0)
                                    self.addClass("btn-dark")
                                    self.removeClass("btn-secondary")
                                    self.find("span").text("+")
                                } else {
                                    self.data("isactive", 1)
                                    self.removeClass("btn-dark")
                                    self.addClass("btn-secondary")
                                    self.find("span").text("-")
                                }
                            }
                        })
                    })
                });
            </script>

@endsection
