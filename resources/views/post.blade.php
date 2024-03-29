@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <p>By
                    <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                        {{ $post->author->name }}
                    </a>
                    in
                    <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </p>

                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="storage/{{ asset('/storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            loading="lazy" class="img-fluid w-100">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" loading="lazy" style="aspect-ratio: 12/5;" class="img-fluid">
                @endif



                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a class="text-decoration-none d-block mt-3" href="/posts">Back to posts</a>
            </div>
        </div>
    </div>
@endsection
