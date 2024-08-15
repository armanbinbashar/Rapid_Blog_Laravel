<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Override;

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

        dd('Validation passed. You can now request the input');
    }
}

