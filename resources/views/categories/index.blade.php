@extends('layouts.app')

@section('content')

    <main class="container-fluid">

        <div class="container-fluid">
            <div class="jumbotron">
                <h1>Blog Categories</h1>
            </div>
            <div class="col-sm-10 col-sm-offset-1">
                <ul>
                @foreach ($categories as $category)
                    @if($category->blog->count() > 0 )
                        <li><a href="#">{{ $category->name }}</a></li>
                    @endif
                @endforeach
                </ul>
            </div>
        </div>
    </main>


@endsection