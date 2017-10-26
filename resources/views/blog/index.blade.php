@extends('layouts.app')

@section('content')

<main class="container">

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Latest blog post</h1>
        </div>
        <div class="col-sm-12">
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
