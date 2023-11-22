<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function timeline()
    {
        $posts = Post::latest()->Paginate();
        
        // dd($tweets);
        return view('post.timeline',['posts' => $posts]);
    }

    public function create()
    {
        // $validator = $request->validate([
        //     'post' =>['required','string','max:100'],
        // ]);

        // Post::create([
        //     'user_id' => Auth::user()->id,
        //     'post' =>$request->post,
        // ]);

        return view('post.create');
        // return redirect('/timeline');
    }
}

