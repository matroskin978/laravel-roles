@extends('layouts.default')

@section('title', 'Home page')

@section('content')

    <div class="container my-5">

        <h1>Posts</h1>

        @forelse($posts as $post)

            <div class="mb-3 border-bottom">

                <h3>{{ $post->title }}</h3>
                Author: {{ $post->user->name }}

                @can('update', $post)
                    <a href="{{ route('posts.edit', $post->id) }}" class="text-primary">Edit</a>
                @endcan

                @can('delete', $post)
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link link-danger" type="submit">Delete</button>
                    </form>
                @endcan

            </div>

        @empty

            <p>No posts...</p>

        @endforelse

    </div>

@endsection
