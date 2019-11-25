@extends('layouts.master')

@section('content')

    @foreach ($posts as $key => $post)
        <div class="blog-post">
            <h2 class="blog-post-title">
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
            </h2>
            <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#"> Ninica</a></p>
            <p>{{ $post->body }}</p>
        </div>
    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

@endsection
