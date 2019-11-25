<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show($id){

        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }
    public function create(){

        return view('posts.create');
    }

    public function store(){
        request()->validate([
            'title' => 'required|min:3|max:191',
            'body'  => 'required|min:3|max:65535'
        ]);

        $post = Post::create([
            'title'  => request('title'),
            'body'   => request('body'),
            'user_id'=> auth()->id()
        ]);

        return redirect()->route('posts.index')->withFlashMessage("Post $post->title successfully created.");
    }
}
