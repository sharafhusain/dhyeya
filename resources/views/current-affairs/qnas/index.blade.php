@php($title = ucwords(str_replace("-"," ",$type))))
@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>MCQs Subject's List</h5>
            <button class="btn btn-sm btn-ex-blue addsubject" type="button" data-bs-target="#categoryModal"
                    data-bs-toggle="modal">Create new Subject
            </button>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Post Date</th>
                    <th scope="col" style="width: 18%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->created_at->format('d M Y')}}</td>
                        <td>
                            <a href="{{route('qnas',[$type,$post->id])}}" class="btn btn-dark btn-sm"
                               data-bs-toggle="tooltip" data-bs-title="View MCQs">
                                <i class="fa-solid fa-eye"></i>
                            </a>
{{--                            @if($post->menu == null)--}}
{{--                                <a href="{{route('add-to-menu', $post->id)}}" class="btn badge btn-dark btn-sm">Add--}}
{{--                                    To Menu</a>--}}
{{--                            @else--}}
{{--                                <a href="{{route('remove-from-menu', $post->id)}}" class="btn badge btn-danger btn-sm">Remove--}}
{{--                                    From Menu</a>--}}
{{--                            @endif--}}
                                <a class="btn btn-success btn-sm editsubject"
                                   data-id="{{$post->id}}"
                                   data-hititle="{{$post?->translate('hi')?->title}}"
                                   data-entitle="{{$post->translate('en')->title}}"
                                   data-slug="{{$post->slug}}"
                                   data-keywords="{{$post->seofield->keywords}}"
                                   data-bs-toggle="tooltip" data-bs-title="Edit Category">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>

                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$post->id}}"
                                    data-bs-toggle="tooltip" data-bs-title="Delete Test Schedule">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$posts->links()}}
        </div>
    </div>

    <!-- MODEL DELETE  -->
    <div class="modal fade" id="delete-affairs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted">
                    <p>Are you sure you want to Permanently delete Subject ...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Close</button>
                    <a href="#" id="delete-record" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
    </div>

    {{--    ---------------------------------------------------}}
    {{----Upload File module----}}
    <div class="modal fade modal-xl" id="qna-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="d-inline" id="module-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="qna-form" action="" method="post">
                        @csrf
                        <input class="form-control" type="hidden" id="post_type" name="post_type"
                               value="{{'child-of-'.$type}}">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="en.title" class="form-label">Subject Title<span
                                                class="text-muted">(en)</span></label>
                                        <input class="form-control" type="text" id="entitle" name="en[title]" value="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="hi.title" class="form-label">Subject Title <span
                                                class="text-muted">(hi)</span></label>
                                        <input class="form-control" type="text" id="hititle" name="hi[title]"
                                               value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="slug" class="form-label">Slug<span
                                                class="text-muted">(en)</span></label>
                                        <input class="form-control" type="text" id="slug" name="slug" value="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="keyword" class="form-label">Keywords <span
                                                class="text-muted">(en)</span></label>
                                        <input class="form-control" type="text" id="keywords" name="keywords" value="">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn  btn-ex-blue">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{---------------------------------------------------------------------------}}

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            const del_url = '{{route('deletesubject', ["type"=>$type,"subject"=>':del_id'])}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-affairs').modal('show');
                return false;
            });


            // Installment Modal Function
            const installmentmodel = new bootstrap.Modal("#qna-modal");
            $(".addsubject").click(function () {
                $("#module-title").text("Add New Subject")
                $("#entitle").val("")
                $("#hititle").val("")
                $("#slug").val("")
                $("#keywords").val("")
                $("#qna-form").attr("action",'{{route("storesubject",$type)}}')
                installmentmodel.show();
            });

            $(".editsubject").click(function () {
                $("#module-title").text("Edit Subject")
                $("#entitle").val($(this).data("entitle"))
                $("#hititle").val($(this).data("hititle"))
                $("#slug").val($(this).data("slug"))
                $("#keywords").val($(this).data("keywords"))
                let subjectId =  $(this).data("id")
                let url = '{{route("editsubject",[$type,":id"])}}'
                let editurl = url.replace(":id",subjectId)
                $("#qna-form").attr("action",editurl)
                installmentmodel.show();
            });
        });
    </script>
@endsection
