@php($title = ucwords($type))
@extends('layouts.dashboard')
@section('content')
    {{--    This index is used to create  DailyNewsAnalysis, InfoPedia, and Brain Booster (tracked by $type veriable)
        as they have Same properties and veriables (but diffrent names) --}}
    <div class="mt-3 alert alert-success ajax-msg-div d-none">

    </div>
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5> {{ucwords($type)}} List</h5>
            <a href="{{route('create-affairs',$type)}}" class="btn btn-sm btn-ex-blue"
               data-bs-toggle="tooltip" data-bs-title="Add New Post">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="card-body">
            <div class="row g-4">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="card border-0 box-shadow-1 my-2 h-100" style="min-height:418px;">
                            @if($post->image)
                                <img src="{{asset("storage/media/".$post->image)}}" class="card-img-top border-0"
                                     alt="Image" style="height:280px;object-fit:cover;">
                            @else
                                <img src="{{asset("img/placeholder.png")}}" class="card-img-top border-0" alt="Image"
                                     style="height:280px;object-fit:cover;">
                            @endif
                            <div class="card-body">
                                <div class="card-title d-flex justify-content-between">
                                    <span class="h5">{{$post->title}}</span>
                                    <span>
                                        @if($post->status == "active")
                                            <span class="badge text-bg-success">Active</span>
                                        @else
                                            <span class="badge text-bg-warning">Inactive</span>
                                        @endif
                                    </span>
                                </div>
                                <p class="text-center text-muted">{{str($post->seofield?$post->seofield->excerpt:"")->limit(80)}}</p>
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="text-muted fst-italic fs-9">{{$post->created_at}}</div>
                                    <div>
                                        {{--<button
                                            data-id="{{$post->id}}"
                                            data-type = "menubtn"
                                            class="btn badge btn-sm p-2 {{$post->menu ? "btn-secondary":"btn-dark" }} menubtn"
                                            data-bs-toggle="tooltip"
                                            data-isactive="{{$post->menu?1:0}}"
                                            data-bs-title="{{$post->menu ? "Remove From Menu" :"Add To Menu"}}">
                                            <span
                                                class="fw-bold fs-8">
                                                {{$post->menu ? "-":"+"}}
                                            </span>
                                            Menu
                                        </button>--}}

                                        <button
                                            data-id="{{$post->id}}"
                                            data-type = "notificationbtn"
                                            class="btn badge btn-sm p-2 {{$post->notification ? "btn-secondary":"btn-dark" }} notificationbtn"
                                            data-bs-toggle="tooltip"
                                            data-isactive="{{$post->notification?1:0}}"
                                            data-bs-title="{{$post->notification ? "Remove From Notification" :"Add To Notification"}}">
                                            <span
                                                class="{{$post->notification ? "fw-bold fs-8": "btn-secondary"}}">
                                                {{$post->notification ? "-":"+"}}
                                            </span>
                                            <i class="fa-solid fa-bell"></i>
                                        </button>


                                        <a href="{{route('edit-affairs', [$type,$post->id])}}" class="btn btn-success btn-sm"
                                           data-bs-toggle="tooltip" data-bs-title="Edit Post">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm remove"
                                                data-id="{{$post->id}}" data-bs-toggle="tooltip"
                                                data-bs-title="Delete Post">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="card-footer">
            {{$posts->links()}}
        </div>
    </div>

    <!-- MODEL DELETE  -->
    <div class="modal fade" id="delete-post" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted">
                    <p>Are you sure you want to Permanently delete post ...</p>
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
            const del_url = '{{route('delete-post', ':del_id')}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-post').modal('show');
                return false;
            });

            $(".menubtn, .notificationbtn").on("click", function () {
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
                $.ajax({
                    url:myurl,
                    method:"GET",
                    success: function (result) {
                        $(".ajax-msg-div").text(result.msg)
                        $(".ajax-msg-div").removeClass("d-none")
                        if (self.data("isactive")){
                            self.data("isactive",0)
                            self.addClass("btn-dark")
                            self.removeClass("btn-secondary")
                            self.find("span").text("+")
                        }else {
                            self.data("isactive",1)
                            self.removeClass("btn-dark" )
                            self.addClass("btn-secondary")
                            self.find("span").text("-")
                        }}})
            })
        });
    </script>
@endsection
