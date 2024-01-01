@php($title = 'Exam')
@extends('layouts.dashboard')
@section('content')
    <div class="mt-3 alert alert-success ajax-msg-div d-none">

    </div>
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>Exam List</h5>
            <a href="{{route('create-exam')}}" class="btn btn-sm btn-ex-blue"
               data-bs-toggle="tooltip" data-bs-title="Add New Exam">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="card-body">
            <div class="row g-4">
                @foreach($exams as $exam)
                    <div class="col-md-3">
                        <div class="card border-0 box-shadow-1">
                            @if($exam->image)
                                <img src="{{$exam->image?asset("storage/media/".$exam->image):""}}" class="card-img-top"
                                     style="height: 320px;object-fit:cover;">
                            @else
                                <img src="{{asset("img/placeholder.png")}}" class="card-img-top"
                                     style="height: 320px;object-fit:cover;">
                            @endif
                            <div class="card-body">
                                <div class="card-title d-flex justify-content-between">
                                    <h5 title="{{$exam->title}}">{{str($exam->title)->limit(50)}}</h5>
                                    <span>
                                        @if($exam->status == "active")
                                            <span class="badge text-bg-success">Active</span>
                                        @else
                                            <span class="badge text-bg-warning">Inactive</span>
                                        @endif
                                    </span>
                                </div>

                                <p class="text-muted text-center" title="{{$exam->seofield?$exam->seofield->excerpt:""}}">{{str($exam->seofield?$exam->seofield->excerpt:"")->limit(70)}}</p>
                                {{--                                <td>{{$exam->seofield?$exam->seofield->keywords:""}}</td>--}}
                                <div class="d-flex justify-content-between">
                                    <span>
                                        {{--<button
                                            data-id="{{$exam->id}}"
                                            data-type="menubtn"
                                            class="btn badge btn-sm p-2 {{$exam->menu ? "btn-secondary":"btn-dark" }} menubtn"
                                            data-bs-toggle="tooltip"
                                            data-isactive="{{$exam->menu?1:0}}"
                                            data-bs-title="{{$exam->menu ? "Remove From Menu" :"Add To Menu"}}">
                                            <span class="fw-bold fs-8">{{$exam->menu ? "-":"+"}}</span>
                                            Menu
                                        </button>--}}

                                        <button
                                            data-id="{{$exam->id}}"
                                            data-type="notificationbtn"
                                            class="btn badge btn-sm p-2 {{$exam->notification ? "btn-secondary":"btn-dark" }} notificationbtn"
                                            data-bs-toggle="tooltip"
                                            data-isactive="{{$exam->notification?1:0}}"
                                            data-bs-title="{{$exam->notification ? "Remove From Notification" :"Add To Notification"}}">
                                            <span
                                                class="{{$exam->notification ? "fw-bold fs-8": "btn-secondary"}}">
                                                {{$exam->notification ? "-":"+"}}
                                            </span>
                                            <i class="fa-solid fa-bell"></i>
                                        </button>

                                    </span>

                                    <span>
                                    <a href="{{route('edit-exam', $exam->id)}}" class="btn btn-success btn-sm"
                                       data-bs-toggle="tooltip" data-bs-title="Edit Exam">
                                        <i class="fa-regular fa-pen-to-square"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$exam->id}}"
                                            data-bs-toggle="tooltip" data-bs-title="Delete Exam">
                                        <i class="fa-regular fa-trash-can"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{--<table
                class="table table-bordered table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Excerpt</th>
                    <th scope="col">Keywords</th>
                    <th scope="col" style="width:300px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($exams as $exam)
                    <tr>
                        <td>{{$exam->id}}</td>
                        <td>{{$exam->title}}
                            @if($exam->status == "active")
                                <span class="badge text-bg-success">Active</span>
                            @else
                                <span class="badge text-bg-warning">Inactive</span>
                            @endif</td>
                        <td><img src="{{$exam->image?asset("storage/media/".$exam->image):""}}" class="img-thumbnail" style="height: 160px"> </td>
                        <td>{{str($exam->seofield?$exam->seofield->excerpt:"")->limit(80)}}</td>
                        <td>{{$exam->seofield?$exam->seofield->keywords:""}}</td>
                        <td>
                            @if($exam->menu == null)
                                <a href="{{route('add-to-menu', $exam->id)}}" class="btn badge btn-dark btn-sm p-2">
                                    <span class="fw-bold fs-8">+</span> Menu
                                </a>
                            @else
                                <a href="{{route('remove-from-menu', $exam->id)}}" class="btn badge btn-danger btn-sm p-2">
                                    <span class="fw-bold fs-8">-</span> Menu
                                </a>
                            @endif

                                @if($exam->notification == null)
                                    <a href="{{route('add-to-notification', $exam->id)}}"
                                       class="btn badge btn-dark btn-sm p-2">
                                        <span class="fw-bold fs-8">+</span>
                                        <i class="fa-solid fa-bell"></i>
                                    </a>
                                @else
                                    <a href="{{route('remove-from-notification', $exam->id)}}"
                                       class="btn badge btn-danger btn-sm p-2">
                                        <span class="fw-bold fs-8">-</span>
                                        <i class="fa-solid fa-bell"></i>
                                    </a>
                                @endif

                            <a href="{{route('edit-exam', $exam->id)}}" class="btn btn-success btn-sm">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$exam->id}}">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>--}}
        </div>
        <div class="card-footer">
            {{$exams->links()}}
        </div>
    </div>

    <!-- MODEL DELETE  -->
    <div class="modal fade" id="delete-exam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted">
                    <p>Are you sure you want to Permanently delete exam ...</p>
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
            const del_url = '{{route('delete-exam', ':del_id')}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-exam').modal('show');
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
