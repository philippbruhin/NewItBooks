<h1>Latest blog post</h1>
<hr />

@foreach ($blogs as $blog)
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->body }}</p>

@endforeach
