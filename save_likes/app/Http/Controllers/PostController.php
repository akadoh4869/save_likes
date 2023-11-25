<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function timeline()
    {
        $posts = Post::all();
        
        // dd($tweets);
        return view('post.timeline',['posts' => $posts]);
    }

    public function create(Request $request)
    {
        $validator = $request->validate([
            'post' => ['required','string','max:140'],
        ]);

        Post::create([
            'user_id' => Auth::user()->id,
            'post' => $request->post,
        ]);

        return view('post.create');
    }

    // public function store(Request $request)
    // {
    //     $post = new Post;

    // }






}

