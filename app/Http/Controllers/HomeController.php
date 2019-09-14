<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class HomeController extends Controller
{
    public function Index() {
        $posts = Post::all();
    
        return view('index')->with('posts', $posts);
    }
}
