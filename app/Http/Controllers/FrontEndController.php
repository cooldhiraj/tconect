<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Post;

class FrontEndController extends Controller
{
    public function index()
    {
        if(Auth::user())
        {
            return view('tconect')->with('first_post', Post::orderBy('created_at','desc')->first());
        }
        else{
            return redirect()->route('login');
        }
        
    }
}
