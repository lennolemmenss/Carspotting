<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function store(Request $request)
    {
    $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'cover-image' => 'image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048', // Add validation for image file
    ]);

    $coverImage = $request->file('cover-image'); // Use 'cover-image' as the key

    // Store the uploaded file in the 'public/storage' directory
    $coverImagePath = $coverImage->store('uploads', 'public');

    $post = Post::create([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
        'cover_image' => $coverImagePath,
    ]);

    return redirect()->route('admin.create')
        ->with('success', 'Post created successfully!');
    }

    public function edit($id)
    {
    $post = Post::findOrFail($id);
    return view('admin.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
    $post = Post::findOrFail($id);

    $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'cover-image' => 'image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
    ]);

    if ($request->hasFile('cover-image')) {
        $coverImage = $request->file('cover-image');
        $coverImagePath = $coverImage->store('uploads', 'public');
        $post->cover_image = $coverImagePath;
    }

    $post->title = $request->input('title');
    $post->content = $request->input('content');
    $post->save();

    return redirect()->route('dashboard') // Redirect to the dashboard route
    ->with('success', 'Post updated successfully!');
    }


    public function destroy($id)
    {
    $post = Post::findOrFail($id);
    $post->delete();

    return redirect()->route('dashboard')->with('success', 'Post deleted successfully!');
    }

}


