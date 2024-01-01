@php($title = "Our Books")
@extends('layouts.dashboard')
@section('content')

    {{--    This index is used to create  Air Debate and Daily prepare (tracked by $type veriable)
            as they both have a file to upload and some text fields --}}
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>Books List</h5>
            <button class="btn btn-sm btn-ex-blue addCategory" type="button" data-bs-target="#categoryModal"
                    data-bs-toggle="modal">Upload New Book
            </button>
        </div>
        <div class="card-body p-0">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-upse" role="tabpanel"
                     aria-labelledby="nav-upse-tab" tabindex="0">
                    <div class="my-3">
                        <div class="row text-center g-4 px-2">

                            @foreach($books as $book)
                                <div class="col-md-3">
                                    <div class="position-relative mx-auto" style="width: fit-content">
                                        <img class="img-fluid " src="{{ asset("storage/media/".$book->filename)}}" alt="books" style="object-fit:cover;">
                                        <button type="button" class="btn btn-danger btn-sm remove  position-absolute start-0 top-0 m-2"
                                                data-id="{{$book->id}}"
                                                data-bs-toggle="tooltip" data-bs-title="Delete Test Schedule">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                        <span class="badge rounded-pill text-bg-light position-absolute end-0 top-0 m-2 shadow-sm"><b>{{$book->title}}</b></span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
                {{$books->links()}}
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
        <div class="modal fade modal-lg" id="categoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalLabel"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('create-book')}}" method="post" enctype="multipart/form-data"
                              id="addCategoryForm">

                            @csrf
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="en.title" class="form-label">Books For</label>
                                    <select class="form-select" name="en[title]">
                                        <option value="">Select An Option</option>
                                        <option >UPSC</option>
                                        <option >UP-PCS</option>
                                        <option >BPSC</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="en[filename]" class="form-label">File <span class="text-muted">(en)</span></label>
                                    <input class="form-control cus-img" type="file" id="en.filename" name="en[filename]">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="hi[filename]" class="form-label">File <span class="text-muted">(hi)</span></label>
                                    <input class="form-control cus-img" type="file" id="hi[filename]" name="hi[filename]">
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

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            const del_url = '{{route('delete-book',":attachment_id")}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':attachment_id', record_id));
                $('#delete-affairs').modal('show');
                return false;
            });
        });
    </script>
@endsection
