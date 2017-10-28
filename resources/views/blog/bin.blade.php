@extends('layouts.app')

@section('content')

    <main class="container-fluid">

        <div class="container-fluid">
            <div class="jumbotron">
                <h1>Trashed blog posts</h1>
            </div>
            <div class="col-sm-10 col-sm-offset-1">
                @foreach ($deletedBlogs as $blog)
                    <article>
                        <h2>{{ $blog->title }}</h2>
                        <p>{{ $blog->body }}</p>
                        {!! Form::open(['method' => 'GET', 'action' => ['BlogController@restore', $blog->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit("Restore Blog", ['class' => 'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}

                        {!! Form::open(['method' => 'DELETE', 'action' => ['BlogController@destroyBlog', $blog->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit("Destroy Blog permanently", ['class' => 'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                    </article>
                @endforeach
            </div>
        </div>
    </main>


@endsection
