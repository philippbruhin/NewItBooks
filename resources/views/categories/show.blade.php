@extends('layouts.app')

@section('content')

    <main class="container-fluid">

        <div class="container-fluid">
            <div class="jumbotron">
                <h1>{{ $category->name }}</h1>
            </div>
            <div class="col-sm-10 col-sm-offset-1">
                <ul>
                    @foreach ($category->blog as $blog)
                        <li>{{ $blog->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>


@endsection