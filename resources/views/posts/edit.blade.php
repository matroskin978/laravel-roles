@extends('layouts.default')

@section('title', 'Home page')

@section('content')

    <div class="container my-5">

        <h1>Edit post</h1>

        <div class="row">

            <div class="col-md-6 offset-md-3">

                <form action="{{ route('posts.update', $post->id) }}" method="post">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
                    </div>

                    <button type="submit" class="btn btn-warning">Send</button>

                </form>

            </div>

        </div>

    </div>

@endsection
