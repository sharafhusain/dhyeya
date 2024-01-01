
@extends('front.post.single')
@section("single-content")
                    <p class="card-text mb-0">
{{--                        Category_type and updated_at info here--}}
                        <small class="text-secondary fw-bold">Test</small> /
                        <small class="text-muted">{{$test->updated_at->format('d M Y')}}</small>
                    </p>
                    <h1 class="mb-3"></h1>




    {{--TEST SERIES SCHEDULE if available for Test series only--}}
    @if($test->papers->count()>0)
        <div class="my-4 mb-5">
            <h4 class="sidebar-text-bellow-line mb-4 pb-1">Download Dhyeya IAS <b>{{$test->post->title}}</b> Test Series Result</h4>
            {{--TABLE--}}
            <table class="table table-responsive table-bordered table-striped text-center">
                <thead class="text-bg-primary">
                <tr>
                    <th scope="col">Test Detail</th>
                    <th scope="col">Test Date</th>
                    <th scope="col">Test Result</th>
                </tr>
                </thead>
                <tbody>
                @foreach($test->papers as $paper)
                    <tr>
                        <td >{{$paper->test_name}}</td>

                        <td >{{$paper->date}}</td>

                        <td><a href="{{asset("storage/media/".$paper->filename)}}">Click Here for Test Series Result</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
