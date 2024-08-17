<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Auth;
use Override;
use Str;

class BlogController extends Controller {
    //
    public function index(){
        return view('blogPost.blog');
    }

    public function show(){
        return view('blogPost.single-blog-post');
    }

    public function create(){
        return view('blogPost.create-blog-post');
    }

    public function store(Request $request){
        $request->validate([
            'title' =>   'required',
            'image' =>   'required | image',
            'body'  =>    'required'
        ]);

        $title = $request->input('title'); $slug = Str::slug($title, '-');

        $user_id = Auth::user()->id;
        $post_body = $request->input('body');

        // // file upload
        $imagePath = 'storage/' . $request->file('image')->store('postImages','public');

        $post = new Post();
        $post->title = $title;
        $post->slug = $slug;
        $post->user_id = $user_id;
        $post->body = $post_body;
        $post->imagePath = $imagePath;

        $post->save();
        return redirect()->back()->with('status','Post Created Sucessfully');

    }
}

