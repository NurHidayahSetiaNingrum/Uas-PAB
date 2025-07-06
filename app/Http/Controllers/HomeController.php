<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featured_post = Post::first();
        $post_list = Post::where('published', true)->get();
        return view('home.index', compact('featured_post', 'post_list'));
    }
      public function articles()
    {
        $articles = Post::where('published', true)
            ->with('categories')
            ->get();
        $featured_post = Post::orderBy('created_at', 'Desc')
            ->where('published', true)
            ->with('categories')
            ->first();
        $post_list = Post::where('published', true)
            ->with('categories')
            ->get();
        return view('home.articles', compact('articles','featured_post', 'post_list'));
    }

    //buat function penulis
    public function penulis()
    {
        $penulis = Post::where('title', 'Penulis')
            ->get();
        $featured_post = Post::where('title', 'Penulis')
            ->first();
        $post_list = Post::where('title', 'Penulis')
            ->get();
        return view('home.penulis', compact('penulis', 'featured_post', 'post_list'));
    }
}
