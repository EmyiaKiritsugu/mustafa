<!-- the blog got deleted and i cant restore it for some reason -->



@extends('layouts.app')

@section('content')
    <h1>All Blogs</h1>

    @foreach ($blogs as $blog)
        <div class="blog-item">
            <h2>{{ $blog->title }}</h2>
            <p>{{ $blog->content }}</p>
            <a href="{{ route('blogs.show', $blog) }}">Show</a>
            <a href="{{ route('blogs.edit', $blog) }}">Update</a>
            <form action="{{ route('blogs.destroy', $blog) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection

