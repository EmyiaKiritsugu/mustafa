<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
{
    $blogs = Blog::all();

    return view('blogs.index', compact('blogs'));
}


    public function show(Blog $blog)
{
    return view('blogs.show', compact('blog'));
}

    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $blog->update($request->all());

        return redirect()->route('blogs.show', $blog);
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('home');
    }
}
