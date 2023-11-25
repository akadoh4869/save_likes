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

    public function showCreateForm()
    {
        return view('post.create');
    }

    public function create(Request $request)
    {
        $validator = $request->validate([
            'post' => ['required','string','max:140'],
        ]);

        try{
            Post::create([
                'user_id' => Auth::user()->id,
                'post' => $request->post,
            ]);
            
            return redirect()->route('post.timeline');

        } catch(\Exception $e){
            // バリデーションエラーが発生した場合の処理
            \Log::error($e->getMessage());

            //例外メッセージを取得してリダイレクトするか、エラーメッセージを表示するかなどの処理
            return redirect()->back()->withErrors(['error'=>'データ保存中にエラーが発生しました。']);
        }

    
    }

    // public function store(Request $request)
    // {
    //     $post = new Post;

    // }






}

