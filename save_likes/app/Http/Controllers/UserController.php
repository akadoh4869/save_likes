<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function show($id)
    {
        $user = User::find($id);

        return view('user.profile',['user'=>$user]);
    }
    
    public function search()
    {
        return view('search');
    }
}