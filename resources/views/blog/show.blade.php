@extends('layouts.app')

@section('content')

@include('partials.meta-dynamic');

    <main class="container-fluid">

        <div class="container-fluid">
            <article>
                <div class="col-sm-12 text-center">
                    @if ($blog->photo)
                        <img class="img-responsive featured_image" src="/images/{{ $blog->photo ? $blog->photo->photo : ''}}" alt="{{ str_limit($blog->title, 50) }}">
                    @endif
                </div>

                <div class="jumbotron">
                    <h1>{{ $blog->title }}</h1><a href="{{ action('BlogController@edit', [$blog->id]) }}" class="pull-right">Edit</a>
                </div>
                <div class="col-sm-10 col-sm-offset-1">
                    <p>{{ $blog->body }}</p>
                    @foreach ($blog->category as $category)
                        <p><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></p>
                    @endforeach
                </div>
            </article>
        </div>
    </main>


@endsection
