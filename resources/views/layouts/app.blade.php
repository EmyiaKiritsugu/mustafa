<!-- hmmmmmmmmmmmmmmm tartaglia hhmmmmmmmmmmmm -->


@extends('layouts.app')

@section('content')
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->content }}</p>
    <<img src="{{ asset('public/yoru.jpg') }}" alt="Blog Image">
    <a href="{{ route('blogs.edit', $blog) }}">Update</a>
    <form action="{{ route('blogs.destroy', $blog) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('home') }}">Back to Home</a>
@endsection
