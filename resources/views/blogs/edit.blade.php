<!-- hmmmmmmmmmmmm tartaglia hmmmmmmmmmm -->

@extends('layouts.app')

@section('content')
    <h1>Edit Blog</h1>

    <form action="{{ route('blogs.update', $blog) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $blog->title }}" required>

        <label for="content">Content</label>
        <textarea name="content" id="content" rows="5" required>{{ $blog->content }}</textarea>

        <button type="submit">Update</button>
    </form>
@endsection
