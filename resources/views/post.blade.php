@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-5">{{ $post->title }}</h2>
        
        <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
    </article>

    <a class="text-decoration-none d-block mt-3" href="/posts">Back to posts</a>
@endsection
