<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePostRequest;


use Illuminate\Http\Request;

use App\Post;


class PostController extends Controller
{
    
    function index () 
    {
        return view('posts.index',[
            'posts' => Post::paginate(3)
        ]);
    }
    function create()
    {
        return view('posts.create');
    }

    function store(StorePostRequest $request)
    {   
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $request->user()->id
        ]);
        return redirect()->route('posts.index');
    }

    function show($post)
    {
        $post = Post::find($post);
         return view('posts.show',[
             'post' => $post
         ]);
    }

    function edit($post)
    {
        $post = Post::find($post);
         return view('posts.edit',[
             'post' => $post
         ]);
    }
    function update($post,StorePostRequest $request)
    {
         Post::where('id', $post)
              ->update(['title' =>request()->title,'content' => request()->content]);
            return redirect()->route('posts.index');
    }
    function destroy($post){
        Post::where('id', $post)->delete();
        return redirect()->route('posts.index');
    }
}
