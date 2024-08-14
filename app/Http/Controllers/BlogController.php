<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
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
}
