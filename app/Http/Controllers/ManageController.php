<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function dashboard(){
        return view('manage.dashboard');
    }

    public function posts(){
        $posts = Post::all();
        return view('manage.posts.index', compact('posts'));
    }
}
