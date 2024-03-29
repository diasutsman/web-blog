@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                <div class="input-group mb-3">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @elseif (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif

                    <input type="text" class="form-control" placeholder="Search" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow: hidden;">
                    <img src="{{ asset('/storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                        loading="lazy" class="card-img-top">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}" loading="lazy" height="400">
            @endif

            <div class="card-body text-center">
                <h3 class="card-title">
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                        {{ $posts[0]->title }}
                    </a>
                </h3>
                <p>
                    <small>
                        By <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                        in <a href="/posts?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                                <a class="text-decoration-none text-white"
                                    href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>

                            @if ($post->image)
                                <img src="{{ asset('/storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    loading="lazy" class="card-img-top">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}" loading="lazy"
                                    style="aspect-ratio: 5/4">
                            @endif
                            <div class="card-body d-flex flex-column align-items-start">
                                <h5 class="card-title"><a href="/posts/{{ $post->slug }}"
                                        class="text-decoration-none">{{ $post->title }}</a></h5>
                                <p>
                                    <small>
                                        By <a href="/posts?author={{ $post->author->username }}"
                                            class="text-decoration-none">{{ $post->author->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary mt-auto">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
@endsection
