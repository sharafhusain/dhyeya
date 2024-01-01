@php($title = 'Category')
@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header d-flex gap-3">
{{--            @dd($categories->pluck('category_name')->first())--}}
            <h5>Category List</h5>
            {{--            <a href="{{route('create-category',[$level-1,$categoryP?$categoryP:""])}}" class="btn btn-sm btn-ex-blue">Add New Category</a>--}}
            <button class="btn btn-sm btn-ex-blue addCategory" type="button" data-bs-toggle="tooltip"
                    data-bs-title="Add New Category">
                <i class="fa-solid fa-plus"></i>
            </button>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col" style="width:50px;">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Category Slug</th>
                    <th scope="col" style="width:160px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->category_name}}</td>
                        <td>{{$category->category_slug}}</td>
                        <td>
                            @if($level <= 3)
                                <a href="{{route('category',[$level,$category->id])}}" class="btn btn-dark btn-sm"
                                   data-bs-toggle="tooltip" data-bs-title="View Child Category">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            @endif
                            {{--                            <a href="{{route('edit-category', [$level-1,$category->id])}}"--}}
                            {{--                               class="btn btn-success btn-sm">--}}
                            {{--                                <i class="fa-regular fa-pen-to-square"></i>--}}
                            {{--                            </a>--}}
                            {{--                                @dd($category->translate('en')->category_name)--}}
                            <a class="btn btn-success btn-sm editBtn"
                               data-id="{{$category->id}}"
                               data-english="{{$category->translate('en')->category_name}}"
                               data-hindi="{{$category->translate('hi')->category_name}}"
                               data-slug="{{$category->category_slug}}"
                               data-bs-toggle="tooltip" data-bs-title="Edit Category">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>


                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$category->id}}"
                                    data-bs-toggle="tooltip" data-bs-title="Delete Category">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$categories->links()}}
        </div>
    </div>

    <!-- MODEL DELETE  -->
    <div class="modal fade" id="delete-category" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted">
                    <p>Are you sure you want to Permanently delete category ...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Close</button>
                    <a href="#" id="delete-record" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
    </div>


    {{----Add and Edit Category module----}}
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data" id="addCategoryForm">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="en.category_name" class="form-label">Category Name <span
                                        class="text-muted">(en)</span></label>
                                <input class="form-control" type="text" id="ecatinp" name="en[category_name]"
                                       value="">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="hi.category_name" class="form-label">Category Name <span
                                        class="text-muted">(hi)</span></label>
                                <input class="form-control" type="text" id="hcatinp" name="hi[category_name]"
                                       value="{{old('hi.category_name')}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="en.category_slug" class="form-label">Category Slug</label>
                                <input class="form-control" type="text" id="scatinp" name="category_slug"
                                       value="{{old('category_slug')}}">
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-sm btn-ex-blue" id="modalSubmitBTN">Add</button>
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
        $(document).ready(function () {
            const del_url = '{{route('delete-category', [$level,':del_id'])}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-category').modal('show');
                return false;
            });

            const myModal = new bootstrap.Modal('#categoryModal')
            const creatURL = '{{route('create-category',[$level-1,$categoryP])}}';
            $(".addCategory").on("click", function () {

                $("#modalLabel").text("Create category {{$categoryP?'under '.$categoryP->category_name:''}}");
                $("#modalSubmitBTN").text("Add");
                $("#ecatinp").val("");
                $("#hcatinp").val("");
                $("#scatinp").val("");
                $("#addCategoryForm").attr("action", creatURL);
                myModal.show();
                return false;
            })

            const updateURL = '{{route('edit-category',[$level-1,":cat_id"])}}';
            $(".editBtn").on("click", function () {
                let cat_id = $(this).data("id");
                let ecat = $(this).data("english");
                let hcat = $(this).data("hindi");
                let scat = $(this).data("slug");
                $("#modalLabel").text("Edit category");
                $("#modalSubmitBTN").text("Update");
                $("#ecatinp").val(ecat);
                $("#hcatinp").val(hcat);
                $("#scatinp").val(scat);

                $("#addCategoryForm").attr("action", updateURL.replace(':cat_id', cat_id));
                myModal.show();
                return false;
            })

        });
    </script>
@endsection
