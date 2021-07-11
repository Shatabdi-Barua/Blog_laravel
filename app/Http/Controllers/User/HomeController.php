<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user\post;

class HomeController extends Controller
{
    public function index()
    {
        $posts= post::where('status',1)->orderBy('created_at', 'desc')->get();
        return view('user/blog', compact('posts') );
    }
}
