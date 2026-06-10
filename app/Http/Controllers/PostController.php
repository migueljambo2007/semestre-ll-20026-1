<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use Illuminate\Http\Request;
use Inertia\Inertia; 

class PostController extends Controller
{
    //
    public function index(Request $request) {

        $posts = Post::get();

        return Inertia::render('Post/Index', ['posts' => $posts]); 
    }
    public function create(){
        return Inertia::render('Post/Create'); 
    }
}
