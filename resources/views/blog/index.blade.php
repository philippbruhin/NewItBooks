@extends('layouts.app')

@section('content')

<main class="container-fluid">

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Latest blog post</h1>
        </div>
        <div class="col-sm-10 col-sm-offset-1">
            @foreach ($blogs as $blog)
                <article>
                    <h1>{{ $blog->title }}</h1>
                    <p>{{ $blog->body }}</p>
                </article>
            @endforeach
        </div>
    </div>
</main>


@endsection
