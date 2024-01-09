<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Facades\Log;


class PostController extends Controller
{
    //
    public function timeline()
    {
        $posts = Post::with('user')->orderBy('created_at','desc')->get();
        
        // dd($tweets);
        return view('post.timeline',['posts' => $posts]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => ['required','string','max:140'],
        ]);

        try{
            DB::beginTransaction();

            Post::create([
                'user_id' => Auth::user()->id,
                'post' => $request->content,
            ]);

            DB::commit();
            
            return redirect()->route('post.timeline');

        } catch(\Exception $e){
            DB::rollback();
            // バリデーションエラーが発生した場合の処理
            Log::error('データ保存中にエラーが出ました：'. $e->getMessage());

            //例外メッセージを取得してリダイレクトするか、エラーメッセージを表示するかなどの処理
            return redirect()->back()->withErrors(['error'=>'データ保存中にエラーが発生しました。']);
        }
    }

    public function detail($id)
    {
        $post = Post::findOrFail($id);
        return view('post.detail', ['post' => $post]);
    }

    // public function addlist()
    // {
    //     return view('post.list',[]);

    // }


}

