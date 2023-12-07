<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get(); //  gesorteerd op het nieuwste bericht.
        return view('dashboard', ['posts' => $posts]);
    }
}
