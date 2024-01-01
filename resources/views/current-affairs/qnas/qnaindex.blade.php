@php($title = ucwords(str_replace("-"," ",$type). "| subject: ".$subject->title))
@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>MCQs List</h5>
            <a class="btn btn-sm btn-ex-blue" href="{{route("createmcq",[$type,$subject->id])}}" >Create MCQ
            </a>
        </div>
        <div class="card-body">
            <div class="mb-3">
            </div>
            @foreach($qnas as $i => $q)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title d-inline"><b>Q{{$i+1}}: {!! $q->question !!}</h5>
                    <p class="mt-3">
                        <a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#id{{$q->id}}"
                           role="button" aria-expanded="false" aria-controls="collapseExample">
                            Show
                        </a>
                        <a class="btn btn-success btn-sm editmcq "
                           href="{{route("updatemcq",[$type,$subject->id,$q->id])}}"
                           data-bs-toggle="tooltip" data-bs-title="Edit">
                            <i class="pt-1 fa-regular fa-pen-to-square"></i>
                        </a>

                        <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$q->id}}"
                                data-bs-toggle="tooltip" data-bs-title="Delete">
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                    </p>
                    <div class="collapse" id="id{{$q->id}}">
                        <div class="card card-body">
                            <p>A:{{$q->option_a}}</p>
                            <p>B:{{$q->option_b}}</p>
                            <p>C:{{$q->option_c}}</p>
                            <p>D:{{$q->option_d}}</p>
                        </div>
                        <div class="card card-body">
                            <p>Answer: {{$q->answer}}</p>
                            <p>Explanation: {!! $q->description !!} </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="card-footer">
            {{--            {{$qnas->links()}}--}}
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


@endsection
@section('script')
    <script>
        $(document).ready(function () {
            const del_url = '{{route('deleteqna', ["type"=>$type,"qna"=>':del_id'])}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-affairs').modal('show');
                return false;
            });

        });
    </script>
@endsection
