<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // public function create()
    // {
    //     return view('posts.create'); 
    // }

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

    return redirect()->route('admin')
        ->with('success', 'Post created successfully!');
    }
}
