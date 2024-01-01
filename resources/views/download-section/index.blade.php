@php($title = 'Download Section')
@extends('layouts.dashboard')
@section('content')
    <div class="mt-3 alert alert-success ajax-msg-div d-none">

    </div>

    @yield("content")

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            const del_url = '{{route('delete-downloads', ':del_id')}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-post').modal('show');
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
