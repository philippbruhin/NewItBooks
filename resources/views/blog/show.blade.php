@extends('layouts.app')

@section('content')

    <main class="container-fluid">

        <div class="container-fluid">
            <article>
                <div class="jumbotron">
                    <h1>{{ $blog->title }}</h1>
                </div>
                <div class="col-sm-10 col-sm-offset-1">
                    <p>{{ $blog->body }}</p>
                </div>
            </article>
        </div>
    </main>


@endsection
