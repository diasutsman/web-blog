@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-start my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success">
                    <span data-feather="arrow-left" class="align-text-bottom"></span> Back
                    to all my posts
                </a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">
                    <span data-feather="edit" class="align-text-bottom"></span> Edit
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')"><span
                            data-feather="x-circle" class="align-text-bottom"></span> Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="{{ asset($post->image) }}" alt="{{ $post->category->name }}" loading="lazy"
                            class="img-fluid mt-3 w-100">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" loading="lazy" style="aspect-ratio: 12/5;" class="img-fluid mt-3">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
