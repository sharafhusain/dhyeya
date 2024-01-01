@php($title = 'Courses')
@extends('layouts.dashboard')
@section('content')
{{--    <div class="mt-3 alert alert-success ajax-msg-div d-none">--}}

{{--    </div>--}}
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>Courses List</h5>
            <a href="{{route('create-courses')}}" class="btn btn-sm btn-ex-blue" data-bs-toggle="tooltip"
               data-bs-title="Add New Course">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col" style="width:50px;">#</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Exam Name</th>
                    <th scope="col">Medium</th>
                    <th scope="col">Mode</th>
                    <th scope="col">Course Type</th>
                    {{--                    <th scope="col">Admission Process</th>--}}
                    {{--                    <th scope="col">Technical Requirement</th>--}}
                    <th scope="col">Total fees</th>
                    <th scope="col">Installment Duration</th>
                    <th scope="col">One Time Payment</th>
                    <th scope="col" style="width:250px;">More Details</th>
                    {{--                    <th scope="col">Features</th>--}}
                    {{--                    <th scope="col">Installments</th>--}}
                    {{--                    <th scope="col">FAQ</th>--}}
                    <th scope="col" style="width:300px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $course)
                    <tr>
                        <th scope="row">{{$course->id}}</th>
                        <td>{{ucwords($course->post->title)}}</td>
                        <td>{{ucwords($course->exam_name)}}</td>
                        <td>{{$course->medium}}</td>
                        <td>{{$course->mode}}</td>
                        <td>{{$course->course_type}}</td>
                        {{--                        <td>{{str($course->admission_process)->limit(50)}}</td>--}}
                        {{--                        <td>{{str($course->technical_requirement)->limit(50)}}</td>--}}
                        <td>&#x20B9;{{number_format($course->total_fee, 2)}}</td>
                        <td>{{$course->duration}} month</td>
                        <td>&#x20B9;{{number_format($course->one_time_payment, 2)}}</td>
                        <td>
                            <a type="button" class="btn badge text-bg-primary features" data-bs-toggle="tooltip"
                               data-bs-title="View Features" data-id="{{$course->id}}">
                                Features
                            </a>
                            <a type="button" class="btn badge text-bg-primary installment" data-bs-toggle="tooltip"
                               data-bs-title="View Installments" data-id="{{$course->id}}">
                                Installment
                            </a>

                            <a type="button" class="btn badge text-bg-primary faq" data-bs-toggle="tooltip"
                               data-bs-title="View FAQs" data-id="{{$course->id}}">
                                FAQ
                            </a>
                        </td>
                        <td>
{{------------------------------------------------------------Add To Menu---------------------------------------------------------------}}
                            {{--<button
                                data-id="{{$course->post->id}}"
                                data-type = "menubtn"
                               class="btn badge btn-sm p-2 {{$course->post->menu ? "btn-secondary":"btn-dark" }} menubtn"
                               data-bs-toggle="tooltip"
                                data-isactive="{{$course->post->menu?1:0}}"
                               data-bs-title="{{$course->post->menu ? "Remove From Menu" :"Add To Menu"}}">
                                <span
                                    class="fw-bold fs-8">
                                    {{$course->post->menu ? "-":"+"}}
                                </span>
                                Menu
                            </button>--}}
{{---------------------------------------------------------------------------------------------------------------------------}}
{{----------------------------------------------------------Notification-----------------------------------------------------------------}}
                            <button
                                data-id="{{$course->post->id}}"
                                data-type = "notificationbtn"
                               class="btn badge btn-sm p-2 {{$course->post->notification ? "btn-secondary":"btn-dark" }} notificationbtn"
                               data-bs-toggle="tooltip"
                                data-isactive="{{$course->post->notification?1:0}}"
                               data-bs-title="{{$course->post->notification ? "Remove From Notification" :"Add To Notification"}}">
                                <span
                                    class="{{$course->post->notification ? "fw-bold fs-8": "btn-secondary"}}">
                                    {{$course->post->notification ? "-":"+"}}
                                </span>
                                <i class="fa-solid fa-bell"></i>
                            </button>
{{---------------------------------------------------------------------------------------------------------------------------}}


                            <a href="{{route('edit-courses', $course->id)}}" class="btn btn-success btn-sm"
                               data-bs-toggle="tooltip" data-bs-title="Edit Course">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$course->id}}"
                                    data-bs-toggle="tooltip" data-bs-title="Delete Course">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $courses->links() }}
        </div>
    </div>



    @include("courses.features.module")
    @include("courses.installments.module")
    @include("courses.faq.module")


    <!------------------------------------- MODEL DELETE  ------------------------------------->
    <div class="modal fade" id="delete-courses" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted delete-msg">
                    <p class="delete-msg">Are you sure you want to Permanently delete Courses ...</p>
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
            // Delete Function
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                const del_url = '{{route('delete-courses', ':del_id')}}';
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $(".delete-msg").text("Are you sure you want to Permanently delete Courses ...");
                $('#delete-courses').modal('show');
                return false;
            });

            {{--const addurl = '{{route('add-to-notification', ":id")}}'--}}
            {{--const removeurl = '{{route('remove-from-notification', ":id")}}'--}}
            {{--$(".notificationbtn").on("click", function () {--}}

            {{--    let myurl = $(this).data("isactive") ? removeurl.replace(":id",$(this).data("id")):addurl.replace(":id",$(this).data("id"))--}}
            {{--    const self = $(this)--}}

            {{--    $.ajax({--}}
            {{--        url:myurl,--}}
            {{--        method:"GET",--}}
            {{--        success: function (result) {--}}
            {{--            console.log(result)--}}
            {{--            $(".ajax-msg-div").text(result.msg)--}}
            {{--            $(".ajax-msg-div").removeClass("d-none")--}}
            {{--            if (self.data("isactive")){--}}
            {{--                self.data("isactive",0)--}}
            {{--                self.addClass("btn-dark")--}}
            {{--                self.removeClass("btn-secondary")--}}
            {{--                self.find("span").text("+")--}}
            {{--            }else {--}}
            {{--                self.data("isactive",1)--}}
            {{--                self.removeClass("btn-dark" )--}}
            {{--                self.addClass("btn-secondary")--}}
            {{--                self.find("span").text("-")--}}
            {{--            }}})--}}
            {{--})--}}

            {{--const add_menu_url = '{{route('add-to-menu', ":id")}}'--}}
            {{--const remove_menu_url = '{{route('remove-from-menu', ":id")}}'--}}
            {{--$(".menubtn").on("click", function () {--}}
            {{--    let myurl = $(this).data("isactive") ? remove_menu_url.replace(":id",$(this).data("id")):add_menu_url.replace(":id",$(this).data("id"))--}}
            {{--    const self = $(this)--}}
            {{--    $.ajax({--}}
            {{--        url:myurl,--}}
            {{--        method:"GET",--}}
            {{--        success: function (result) {--}}
            {{--            console.log(result)--}}
            {{--            $(".ajax-msg-div").text(result.msg)--}}
            {{--            $(".ajax-msg-div").removeClass("d-none")--}}
            {{--            if (self.data("isactive")){--}}
            {{--                self.data("isactive",0)--}}
            {{--                self.addClass("btn-dark")--}}
            {{--                self.removeClass("btn-secondary")--}}
            {{--                self.find("span").text("+")--}}
            {{--            }else {--}}
            {{--                self.data("isactive",1)--}}
            {{--                self.removeClass("btn-dark" )--}}
            {{--                self.addClass("btn-secondary")--}}
            {{--                self.find("span").text("-")--}}
            {{--            }}})--}}
            {{--})--}}



            // ---------------------------------------Polymorphic---------------------------------------------------

            $(".menubtn, .notificationbtn").on("click", function () {


                    // $(this).tooltip("disable");
                let add_url = ""
                let remove_url = ""
                if($(this).data("type") == "menubtn"){
                    add_url = '{{route('add-to-menu', ":id")}}'
                    remove_url = '{{route('remove-from-menu', ":id")}}'
                }
                else if($(this).data("type") == "notificationbtn"){
                    add_url = '{{route('add-to-notification', ":id")}}'
                    remove_url = '{{route('remove-from-notification', ":id")}}'
                }

                let myurl = $(this).data("isactive") ? remove_url.replace(":id",$(this).data("id")):add_url.replace(":id",$(this).data("id"))
                const self = $(this)

                console.log(self.getPath)
                $.ajax({
                    url:myurl,
                    method:"GET",
                    success: function (result) {
                        $(".ajax-msg-div").text(result.msg)
                        $(".ajax-msg-div").removeClass("d-none")
                        if (self.data("isactive")){
                            self.data("bs-title","Add To Menu")

                            // bootstrap.Tooltip.getInstance(self.getPath()).setContent("Remove To Menu")
                            self.data("isactive",0)
                            self.addClass("btn-dark")
                            self.removeClass("btn-secondary")
                            self.find("span").text("+")
                        }else {
                            self.data("isactive",1)
                            self.data("bs-title","Remove To Menu")
                            // bootstrap.Tooltip.getInstance(self.getPath()).setContent("Add To Menu")
                            self.removeClass("btn-dark" )
                            self.addClass("btn-secondary")
                            self.find("span").text("-")
                        }
                        // console.log(self.data("bs-title"));
                        reinit_tooltip()

                    }})
                console.log($(this))
            })
        });
    </script>

    @include("courses.faq.AjaxCRUD")
    @include("courses.features.AjaxCRUD")
    @include("courses.installments.AjaxCRUD")
@endsection
