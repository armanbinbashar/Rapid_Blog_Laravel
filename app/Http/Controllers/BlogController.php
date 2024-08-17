<?php

namespace App\Http\Controllers;

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

        // file upload
        return $request->file('image')->store('postImages','public');


        // echo $user_id;
        // echo $slug;

        // dd('Validation passed. You can now request the input');
    }
}

