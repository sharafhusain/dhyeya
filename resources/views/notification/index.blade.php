@php($title = 'Notification')
@extends('layouts.dashboard')
@section('content')
    <div class="mt-3 alert alert-success ajax-msg-div d-none">

    </div>
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>{{$title}} List</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($notifications as $notification)
                    <tr class="data-row">
                        <th scope="row">{{$notification->id}}</th>
                        <td>{{$notification->post->title}}
                            <span class="badge text-bg-success">{{$notification->post->post_type}}</span></td>
                        <td>{{str(strip_tags($notification->post->description))->limit(75)}}</td>

                        <td>
{{--                            <a href="{{route('remove-from-notification', $notification->post->id)}}"--}}
{{--                               class="btn badge btn-secondary p-2" data-bs-toggle="tooltip" data-bs-title="Remove From Notification">--}}
{{--                                <span class="fw-bold fs-8">-</span>--}}
{{--                                <i class="fa-solid fa-bell"></i>--}}
{{--                            </a>--}}

                            <button
                                data-id="{{$notification->post->id}}"
                                class="btn badge btn-sm p-2 btn-secondary notificationbtn"
                                data-bs-toggle="tooltip"
                                data-bs-title="Remove From Notification">
                                <span class="fw-bold fs-8">-</span>
                                <i class="fa-solid fa-bell"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $notifications->links() }}
        </div>
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
@endsection
@section("script")
    <script>
    $(document).ready(function () {
        const removeurl = '{{route('remove-from-notification', ":id")}}'
        $(".notificationbtn").on("click", function () {
            const self = $(this)

            $.ajax({
                url:removeurl.replace(":id",self.data("id")),
                method:"GET",
                success: function (result) {
                    $(".ajax-msg-div").text(result.msg)
                    $(".ajax-msg-div").removeClass("d-none")
                    self.parents(".data-row").remove()
                    }})
        })
    })
    </script>
@endsection
