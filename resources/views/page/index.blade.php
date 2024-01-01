@php($title = 'Pages')
@extends('layouts.dashboard')
@section('content')
    <div class="mt-3 alert alert-success ajax-msg-div d-none">

    </div>
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>Pages List</h5>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Page Title</th>
                    <th scope="col">Page image (if any)</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Excerpt</th>
                    <th scope="col">Keywords</th>
                    <th scope="col" style="width: 12%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                        <td>{{$page->id}}</td>
                        <td>{{$page->title}}
                            @if($page->status == "active")
                                <span class="badge text-bg-success">Active</span>
                            @else
                                <span class="badge text-bg-warning">Inactive</span>
                            @endif</td>
                        <td>
                            @if($page->filename)
                                <img src="{{asset("storage/media/".$page->filename)}}" alt="" class="img-fluid">
                            @endif</td>
                        <td>{{$page->slug}}</td>
                        <td>{{$page->seofield->excerpt}}</td>
                        <td>{{$page->seofield->keywords}}</td>
                        <td>
                            {{--<button
                                data-id="{{$page->id}}"
                                class="btn badge btn-sm p-2 {{$page->menu ? "btn-secondary":"btn-dark" }} menubtn"
                                data-bs-toggle="tooltip"
                                data-isactive="{{$page->menu?1:0}}"
                                data-bs-title="{{$page->menu ? "Remove From Menu" :"Add To Menu"}}">
                                <span class="fw-bold fs-8">{{$page->menu ? "-":"+"}}</span>Menu
                            </button>--}}


                            <a href="{{route('edit-page', $page->id)}}" class="btn btn-success btn-sm"
                               data-bs-toggle="tooltip" data-bs-title="Edit Page">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$pages->links()}}
        </div>
    </div>
@endsection
@section("script")
    <script>
        $(document).ready(function () {
            const add_menu_url = '{{route('add-page-to-menu', ":id")}}'
            const remove_menu_url = '{{route('remove-page-from-menu', ":id")}}'
            $(".menubtn").on("click", function () {
                let myurl = $(this).data("isactive") ? remove_menu_url.replace(":id", $(this).data("id")) : add_menu_url.replace(":id", $(this).data("id"))
                const self = $(this)
                $.ajax({
                    url: myurl,
                    method: "GET",
                    success: function (result) {
                        console.log(result)
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
        })
    </script>

@endsection
