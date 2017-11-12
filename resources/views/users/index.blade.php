@extends('layouts.app')

@section('content')

    <main class="container-fluid">

        <div class="container-fluid">
            <div class="jumbotron">
                <h1>Users on NewITBooks</h1>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
                <button class="btn btn-primary"><a style="color:#fff;" href="{{ url('blog/create') }}">Create Blog</a></button>
                <button class="btn btn-danger"><a style="color:#fff;" href="{{ url('blog/bin') }}">Trashed Blogs</a></button>
                <button class="btn btn-success"><a style="color:#fff;" href="{{ url('media') }}">Featured Images</a></button>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-header">Recent Users</h1>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>EMail</th>
                                <th>Joined</th>
                                <th>Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                    <td>
                                        {{ Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) }}
                                        {!! Form::select("role_id", ['1' => 'Administrator', '2' => 'Author', '3' => 'Subscriber'], null, ['class' => 'btn btn-primary']) !!}
                                        {{ Form::submit("Update", ['class' => 'btn btn-success']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </main>


@endsection
