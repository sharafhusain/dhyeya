@php($title = "Subjects")
@extends('layouts.dashboard')
@section('content')
    {{--    <div class="card-body">--}}
    {{--        @if(!isset($attachAbleSubject))--}}
    {{--        <form action="{{route('create-subject')}}" method="post" enctype="multipart/form-data">--}}
    {{--            @csrf--}}
    {{--            <div class="row">--}}
    {{--                    <div class="mb-3 col-md-6">--}}
    {{--                        <label for="en.name" class="form-label">Subject Name (en)</label>--}}
    {{--                        <input class="form-control" type="text" id="en.name" name="en[name]"--}}
    {{--                               value="{{old('en.name')}}">--}}
    {{--                    </div>--}}

    {{--                    <div class="mb-3 col-md-6">--}}
    {{--                        <label for="hi.name" class="form-label">Subject Name (hi)</label>--}}
    {{--                        <input class="form-control" type="text" id="hi.name" name="hi[name]"--}}
    {{--                               value="{{old('hi.name')}}">--}}
    {{--                    </div>--}}

    {{--                    <div class="mb-3 text-center">--}}
    {{--                        <button type="submit" class="btn btn-sm btn-ex-blue">Create</button>--}}
    {{--                        <a href="{{route('subject')}}" class="btn btn-sm btn-warning px-3">Reset</a>--}}
    {{--                    </div>--}}
    {{--            </div>--}}

    {{--        </form>--}}
    {{--    </div>--}}
    {{--        @endif--}}

    {{--        @if(isset($attachAbleSubject))--}}
    {{--        <form action="{{route('add-teacher',$attachAbleSubject->id)}}" method="post" enctype="multipart/form-data">--}}
    {{--            @csrf--}}
    {{--            <div class="row">--}}
    {{--                    <div class="mb-3 col-md-6">--}}
    {{--                        <label for="en.name" class="form-label">Subject Name</label>--}}
    {{--                        <input class="form-control" type="text" id="en.name"--}}
    {{--                               value="{{$attachAbleSubject->name}}" disabled>--}}
    {{--                    </div>--}}

    {{--                    <div class="mb-3 col-md-6">--}}
    {{--                        <label for="hi.name" class="form-label">Select Teacher</label>--}}
    {{--                        <select class="form-control" id="teacher" name="teacher">--}}
    {{--                            <option value="" selected disabled>Choose Teacher</option>--}}
    {{--                            @foreach($teachers as $teacher)--}}
    {{--                            <option value="{{$teacher->id}}">{{$teacher->first_name." ".$teacher->last_name}}</option>--}}
    {{--                            @endforeach--}}
    {{--                        </select>--}}
    {{--                    </div>--}}

    {{--                    <div class="mb-3 text-center">--}}
    {{--                        <button type="submit" class="btn btn-sm btn-ex-blue">Add</button>--}}
    {{--                        <a href="{{route('subject')}}" class="btn btn-sm btn-warning px-3">Reset</a>--}}
    {{--                    </div>--}}
    {{--            </div>--}}

    {{--        </form>--}}
    {{--        @endif--}}


    <div class="card">

        <div class="card-header d-flex gap-3">
            <h5>Subjects & Teachers List</h5>
            <span data-bs-toggle="tooltip" data-bs-title="Add New Subject">
            <button type="submit" class="btn btn-sm btn-ex-blue" data-bs-toggle="modal"
                    data-bs-target="#addSubjectModal">
                <i class="fa-solid fa-plus"></i></button>
            </span>
        </div>

        <div class="card-body p-0">
            <table
                class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Subject Name</th>
                    <th scope="col">Subject Type</th>
                    <th scope="col">Teachers</th>
                    <th scope="col" style="width:150px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subjects as $subject)
                    <tr>
                        <td>{{$subject->id}}</td>
                        <td>{{$subject->name}}</td>
                        <td>{{$subject->subject_type}}</td>
                        <td>
                            <table class="table table-sm table-bordered">
                                <thead>
                                <td style="width:50%;">
                                    <button class="btn badge text-bg-primary addTeacher"
                                            data-subject-id="{{$subject->id}}" data-subject-name="{{$subject->name}}"
                                            data-bs-toggle="tooltip" data-bs-title="Add Teacher">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                                <td style="width:50%;"></td>
                                </thead>
                                <tbody>
                                @foreach($subject->team as $teacher)
                                    <tr>
                                        <td>{{$teacher->name}}</td>
                                        <td><a class="btn badge text-bg-danger"
                                               href="{{route("detach-teacher",[$subject->id,$teacher->id])}}"
                                               data-bs-toggle="tooltip" data-bs-title="Remove Teacher">
                                                <i class="fa-solid fa-minus"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$subject->id}}"
                                    data-bs-toggle="tooltip" data-bs-title="Remove Subject">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$subjects->links()}}
        </div>
    </div>

    <!-- MODEL DELETE  -->
    <div class="modal fade" id="delete-subject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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

    {{--        Subject Form module--}}
    <div class="modal fade" id="addSubjectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Subject</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('create-subject')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="en.name" class="form-label">Subject Name (en)</label>
                                <input class="form-control" type="text" id="en.name" name="en[name]"
                                       value="{{old('en.name')}}">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="hi.name" class="form-label">Subject Name (hi)</label>
                                <input class="form-control" type="text" id="hi.name" name="hi[name]"
                                       value="{{old('hi.name')}}">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="hi.name" class="form-label">Subject Type</label>
                                <select class="form-select" id="subject_type" name="subject_type">
                                    <option value="">Choose Subject Type</option>
                                    <option @selected(old('subject_type') == 'General Subject')>General Subject</option>
                                    <option @selected(old('subject_type') == 'Optional Subject')>Optional Subject</option>
                                </select>
                                {{--                                <input class="form-control" type="text" id="hi.name" name="hi[name]"--}}
{{--                                       value="{{old('hi.name')}}">--}}
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-sm btn-ex-blue">Create</button>
                                <a class="btn btn-sm btn-warning px-3" data-bs-dismiss="modal">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--        Teacher Form module--}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data" id="addTeacherForm">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="en.name" class="form-label">Subject Name</label>
                                <input class="form-control" type="text" id="subjectName"
                                       value="" disabled>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="hi.name" class="form-label">Select Teacher</label>
                                <select class="form-control" id="teacher" name="teacher">
                                    <option value="" selected disabled>Choose Teacher</option>
                                    @foreach($teachers as $teacher)
                                        <option
                                            value="{{$teacher->id}}">{{$teacher->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-sm btn-ex-blue">Add</button>
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
            const myModal = new bootstrap.Modal('#exampleModal')

            const del_url = '{{route('delete-subject',':del_id')}}';
            const attachTeacherUrl = '{{route('add-teacher',":teacher_id")}}';

            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-subject').modal('show');
                return false;
            });


            $(".addTeacher").on("click", function () {
                $("#addTeacherForm").attr("action", attachTeacherUrl.replace(":teacher_id", $(this).data("subject-id")));
                $("#subjectName").val($(this).data("subject-name"));
                myModal.show();
                return false;
            })
        });
    </script>
@endsection
