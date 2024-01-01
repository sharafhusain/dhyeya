@php($title = 'Download Section')
@extends('download-section.index')
@section('content')
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h4>{{$parent_category->category_name }} > Please Select a category</h4>
        </div>
        <div class="card-body">
            <div class="row">
                    <table
                        class="table table-striped table-hover table-sm table-responsive align-middle text-center">
                        <thead>
                        <tr>
                            <th scope="col" style="width:50px;">#</th>
                            <th scope="col">Section Name</th>
                            <th scope="col">Section Slug</th>
                            <th scope="col" style="width:160px;">View Section</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category?->id}}</td>
                                <td>{{$category?->category_name}}</td>
                                <td>{{$category?->category_slug}}</td>
                                <td>
                                    <a
                                        href="{{route('view-downloads',[$parent_category->id,$category?->id])}}"
                                        class="btn btn-dark btn-sm"
                                       data-bs-toggle="tooltip" data-bs-title="View Child Category">
                                        <i class="fa-solid fa-eye"></i>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
