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
           
        ]);

        $post = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'cover_image' => $request->input('cover_image'), 
        ]);


        return redirect()->route('dashboard', $post->id)
            ->with('success', 'Post created successfully!');
    }
}
