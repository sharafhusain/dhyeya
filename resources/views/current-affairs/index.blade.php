@php($title = $post->title)
@extends('layouts.dashboard')
@section('content')

    {{--    This index is used to create  Air Debate and Daily prepare (tracked by $type veriable)
            as they both have a file to upload and some text fields --}}
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>Attachment List</h5>
            <button class="btn btn-sm btn-ex-blue addCategory" type="button" data-bs-target="#categoryModal"
                    data-bs-toggle="modal">Upload New File
            </button>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">File Preview</th>
                    @if($type == "air-debate")
                        <th scope="col">Topic of Discussion</th>
                        <th scope="col">Expert Panel</th>
                    @endif
                    <th scope="col">Upload Date</th>
                    <th scope="col" style="width: 18%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($attachments as $attachment)
                    <tr>
                        <td>{{$attachment->id}}</td>
                        <td>{{$attachment->title}}</td>
                        <td>
                            @if($attachment->translate('en')?->filename)
                                <a href="{{route('download_contents', $attachment->translate('en')?->id)}}" class="btn badge btn-dark btn-sm">Preview
                                    English</a>
                            @endif
                            @if($attachment->translate('hi')?->filename)
                                <a href="{{route('download_contents', $attachment->translate('hi')?->id)}}" class="btn badge btn-dark btn-sm">Preview
                                    Hindi</a>
                            @endif
                        </td>
                        @if($type == "air-debate")
                            <td>{{$attachment->meta->key}}</td>
                            <td>{{$attachment->meta->val}}</td>
                        @endif
                        <td>{{$attachment->created_at}}</td>
                        <td>
                            {{--                            @if($post->menu == null)--}}
                            {{--                                <a href="{{route('add-to-menu', $post->id)}}" class="btn badge btn-dark btn-sm">Add--}}
                            {{--                                    To Menu</a>--}}
                            {{--                            @else--}}
                            {{--                                <a href="{{route('remove-from-menu', $post->id)}}" class="btn badge btn-danger btn-sm">Remove--}}
                            {{--                                    From Menu</a>--}}
                            {{--                            @endif--}}
                            <a class="btn btn-success btn-sm editsubject"
                               data-id="{{$attachment->id}}"
                               data-hititle="{{$attachment->translate('hi')?->title}}"
                               data-entitle="{{$attachment->translate('en')?->title}}"
                               @if($type == "air-debate")
                                   data-enkey="{{$attachment->meta->translate('en')?->key}}"
                               data-enval="{{$attachment->meta->translate('en')?->val}}"
                               data-hikey="{{$attachment->meta->translate('hi')?->val}}"
                               data-hival="{{$attachment->meta->translate('hi')?->val}}"
                               @endif
                               data-bs-toggle="tooltip" data-bs-title="Edit Category">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$attachment->id}}"
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
            {{$attachments->links()}}
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
                    <p>Are you sure you want to Permanently delete Attachment ...</p>
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
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action=
                              @if($type == 'air-debate')
                             "{{route('create-affairs',$type)}}"
                    @else
                        "{{route('store_daily_prepare',$type)}}"
                    @endif
                    method="post" enctype="multipart/form-data"
                    id="addCategoryForm">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="en.title" class="form-label">File Title (en)</label>
                            <input class="form-control" type="text" id="en.title" name="en[title]"
                                   value="{{old('en.title')}}">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="hi.title" class="form-label">File Title (hi)</label>
                            <input class="form-control" type="text" id="hi.title" name="hi[title]"
                                   value="{{old('hi.title')}}">
                        </div>
                    </div>
                    @if($type == "air-debate")
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="en.key" class="form-label">Topic of Discussion: (en)</label>
                                <input class="form-control" type="text" id="en.key" name="en[key]"
                                       value="{{old('en.key')}}">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="hi.key" class="form-label">Topic of Discussion: (hi)</label>
                                <input class="form-control" type="text" id="hi.key" name="hi[key]"
                                       value="{{old('hi.key')}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="en.val" class="form-label">Expert Panel: (en)</label>
                                <input class="form-control" type="text" id="en.val" name="en[val]"
                                       value="{{old('en.val')}}">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="hi.val" class="form-label">Expert-Panel: (hi)</label>
                                <input class="form-control" type="text" id="hi.val" name="hi[val]"
                                       value="{{old('hi.val')}}">
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="en.filename" class="form-label">File (en)</label>
                            <input class="form-control cus-img" type="file" id="en.filename" name="en[filename]"
                                   accept="{{$type=="air-debate"?'.mp3':'.pdf'}}">
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="hi.filename" class="form-label">File (hi)</label>
                            <input class="form-control cus-img" type="file" id="hi.filename" name="hi[filename]"
                                   accept="{{$type=="air-debate"?'.mp3':'.pdf'}}">
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-sm btn-ex-blue" id="modalSubmitBTN">Create</button>
                            <a class="btn btn-sm btn-warning px-3" data-bs-dismiss="modal">Cancel</a>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    {{---------------------------------------------------------------------------}}
    <div class="modal fade modal-xl" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="d-inline" id="module-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data"
                          id="edit_post">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="en.title" class="form-label">File Title (en)</label>
                                <input class="form-control" type="text" id="entitle" name="en[title]"
                                       value="{{old('en.title')}}">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="hi.title" class="form-label">File Title (hi)</label>
                                <input class="form-control" type="text" id="hititle" name="hi[title]"
                                       value="{{old('hi.title')}}">
                            </div>
                        </div>
                        @if($type == "air-debate")
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="en.key" class="form-label">Topic of Discussion: (en)</label>
                                    <input class="form-control" type="text" id="enkey" name="en[key]"
                                           value="{{old('en.key')}}">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="hi.key" class="form-label">Topic of Discussion: (hi)</label>
                                    <input class="form-control" type="text" id="hikey" name="hi[key]"
                                           value="{{old('hi.key')}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="en.val" class="form-label">Expert Panel: (en)</label>
                                    <input class="form-control" type="text" id="enval" name="en[val]"
                                           value="{{old('en.val')}}">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="hi.val" class="form-label">Expert-Panel: (hi)</label>
                                    <input class="form-control" type="text" id="hival" name="hi[val]"
                                           value="{{old('hi.val')}}">
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="en.filename" class="form-label">File (en)</label>
                                <input class="form-control cus-img" type="file" id="en.filename" name="en[filename]"
                                       accept="{{$type=="air-debate"?'.mp3':'.pdf'}}">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="hi.filename" class="form-label">File (hi)</label>
                                <input class="form-control cus-img" type="file" id="hi.filename" name="hi[filename]"
                                       accept="{{$type=="air-debate"?'.mp3':'.pdf'}}">
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-sm btn-ex-blue" id="modalSubmitBTN">Create</button>
                                <a class="btn btn-sm btn-warning px-3" data-bs-dismiss="modal">Cancel</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        const edit_modal = new bootstrap.Modal("#edit-modal");
        $(".editsubject").click(function () {
            $("#module-title").text("Edit")
            $("#entitle").val($(this).data("entitle"))
            $("#hititle").val($(this).data("hititle"))

            $("#enkey").val($(this).data("enkey"))
            $("#enval").val($(this).data("enval"))

            $("#hikey").val($(this).data("hikey"))
            $("#hival").val($(this).data("hival"))

            $("#slug").val($(this).data("slug"))
            $("#keywords").val($(this).data("keywords"))

            let attachmentId = $(this).data("id")
            let url = '{{route("update-attachment",[$type,":id"])}}'
            let editurl = url.replace(":id", attachmentId)
            console.log(editurl)
            $("#edit_post").attr("action", editurl)
            edit_modal.show();
        });


        $(document).ready(function () {
            const del_url = '{{route('delete-affairs', ['type'=>$type,"post"=>$post->id,"attachment"=>':del_id'])}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-affairs').modal('show');
                return false;
            });
        });
    </script>
@endsection
