@extends('layouts.app')

@section('content')

    <main class="container-fluid">

        <div class="container-fluid">
            <div class="jumbotron">
                <h1>Admin Dashboard</h1>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
                <button class="btn btn-primary"><a style="color:#fff;" href="{{ url('blog/create') }}">Create Blog</a></button>
                <button class="btn btn-danger"><a style="color:#fff;" href="{{ url('blog/bin') }}">Trashed Blogs</a></button>
                <button class="btn btn-success"><a style="color:#fff;" href="{{ url('media') }}">Featured Images</a></button>
            </div>
        </div>
    </main>


@endsection
