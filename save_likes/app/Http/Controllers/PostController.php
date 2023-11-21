<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function timeline()
    {
        return view('post.timeline');
    }

    // public function post(Request $request)
    // {
    //     $validator = $request->validate([
    //         'post' =>['required','string','max:100'],
    //     ]);

    //     Post::create([
    //         'user_id' => Auth::user()->id,
    //         'tweet' =>$request->tweet,
    //     ]);
    // }
}

