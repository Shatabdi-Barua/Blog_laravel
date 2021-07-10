<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user\post;

class UserPostController extends Controller
{
    public function index(post $slug)
    {
        // return $slug;
        return view('user/post', compact('slug'));
    }
}
