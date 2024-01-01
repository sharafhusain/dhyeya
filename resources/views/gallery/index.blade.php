@extends('layouts.dashboard')
@section('content')

    <div class="card">
        <div class="card-header d-flex gap-3">
            <h5>Gallery Images</h5>
            <a href="{{route('create-gallery')}}" class="btn btn-sm btn-ex-blue" data-bs-toggle="tooltip"
               data-bs-title="Add New Slider">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($galleries as $gallery)
                    <div class="col-md-4">
                        <div class="card border-0 box-shadow-1 my-2 p-2">
                            <div class="position-absolute end-0 top-0 m-3">
                                <a href="{{route('edit-gallery', $gallery->id)}}" class="btn btn-success btn-sm"
                                   data-bs-toggle="tooltip" data-bs-title="Edit Slider">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-sm remove" data-id="{{$gallery->id}}"
                                        data-bs-toggle="tooltip" data-bs-title="Delete Slider">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </div>
                            @if($gallery->image)
                                <img src="{{ asset('storage/media/'.$gallery->image)}}" alt="Image" class="img-fluid"
                                     style="height:280px;object-fit:cover;">
                            @else
                                <img src="{{ asset('img/placeholder.png')}}" alt="Image" class="card-img"
                                     style="height:350px;object-fit:cover;">
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="card-footer">
            {{ $galleries->links() }}
        </div>
    </div>

    {{--MODEL DELETE--}}
    <div class="modal fade" id="delete-gallery" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-muted">
                    <p>Are you sure you want to Permanently delete gallery ...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Close</button>
                    <a href="#" id="delete-record" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
    </div>
    {{--MODEL DELETE--}}

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            const del_url = '{{route('delete-gallery', ':del_id')}}';
            $('.remove').on('click', function () {
                let record_id = $(this).data('id');
                $('#delete-record').attr('href', del_url.replace(':del_id', record_id));
                $('#delete-gallery').modal('show');
                return false;
            });
        });
    </script>
@endsection
