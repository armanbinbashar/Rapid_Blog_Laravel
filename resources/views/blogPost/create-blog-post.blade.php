@extends('layout')

@section('head')
    {{-- <link rel="stylesheet" href="render only on create-blog-post page"> --}}
@endsection


@section('main')
    <main>
        <section id="contact-us">
            <h1 style="padding-top: 50px">Create New Post!</h1>
            
            <div class="contact-form">

                <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="title"></label>
                    <input type="text" id="title" name="title">

                    @error('title')
                        <p style="color: red; margin-bottom:20px">{{$message}}</p>
                    @enderror
                    
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image">
                    @error('image')
                        <p style="color: red; margin-bottom:20px">{{$message}}</p>
                    @enderror
                    
                    <label for="body">Body</label>
                    <textarea name="body" id="body" cols="30" rows="10"></textarea>
                    @error('body')
                        <p style="color: red; margin-bottom:20px">{{$message}}</p>
                    @enderror
                    
                    <button type="submit" value="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>
@endsection

