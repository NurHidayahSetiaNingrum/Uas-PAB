<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthorController;

class AuthorController extends Controller
{
     public function index()
    {
        $featured_post = Post::first();
        $post_list = Post::where('published', false)->get();
        return view('author.index', compact('featured_post', 'post_list'));
    }
}
