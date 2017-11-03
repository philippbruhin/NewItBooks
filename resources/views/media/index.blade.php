@extends('layouts.app')

@section('content')

    <main class="container-fluid">

        <div class="container-fluid">
            <div class="jumbotron">
                <h1>Featured images</h1>
            </div>
            <div class="col-sm-10 col-sm-offset-1">
                <ul>
                    @foreach ($photos as $photo)
                        <li style="list-style: none;">
                            <img height="200" src="/images/{{ $photo->photo }}" alt="">
                            {{ Form::open(['method' => 'DELETE', 'action' => ['PhotosController@destroy', $photo->id]]) }}
                            {!! Form::submit("Delete Photo", ['class' => 'btn btn-danger']) !!}
                            {{ Form::close() }}

                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>


@endsection