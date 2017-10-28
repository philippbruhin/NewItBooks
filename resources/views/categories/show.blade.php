@extends('layouts.app')

@section('content')

    <main class="container-fluid">

        <div class="container-fluid">
            <div class="jumbotron">
                <h1>{{ $category->name }}</h1><a href="{{ action('CategoryController@edit', [$category->id]) }}">Edit</a>
            </div>
            <div class="col-sm-10 col-sm-offset-1">
                <h2 class="text-center">Recent Blogs on {{ $category->name }}</h2>
                <hr />
                @foreach ($category->blog as $blog)
                    <h2><a href="{{ action('BlogController@show', [$blog->id]) }}">{{ $blog->title }}</a></h2>
                @endforeach
            </div>
        </div>
    </main>


@endsection