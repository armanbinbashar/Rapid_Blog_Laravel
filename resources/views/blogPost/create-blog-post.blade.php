@extends('layout')

@section('head')
    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}
@endsection


@section('main')
    <div style="padding: 5%; background: #fff">
        <section id="contact-us">

            <h1 style="padding-top: 50px">Create New Post!</h1>

            <div class="contact-form">
                <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" value="{{old('title')}}">

                    @error('title')
                        <p style="color: red; margin-bottom:20px">{{$message}}</p>
                    @enderror
                    
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image">
                    @error('image')
                        <p style="color: red; margin-bottom:20px">{{$message}}</p>
                    @enderror
                    
                    <label for="body">Body</label>
                    <textarea name="body" id="body" cols="30" rows="5"> {{old('body')}} </textarea>
                    @error('body')
                        <p style="color: red; margin-bottom:20px">{{$message}}</p>
                    @enderror
                    
                    <button type="submit" value="submit">Submit</button>
                </form>
            </div>
        </section>
    </div>

    {{-- <div class="container">

        <h1 style="margin-top: 10%; text-align: center">Create New Post!</h1>

        <form action="">
            <div class="form-floating" style="margin-top: 30px">
                <input type="Title" id="title" class="form-control" placeholder="Title place here" required>
                <label for="title" class="form-label">Title</label>
                <div class="invalid-feedback">Invalid Email</div>
                <div class="valid-feedback">Valid Email</div>
            </div>
            <div class="form" style="margin-top: 15px">
                <input type="file" name="image" id="postimage" class="form-control" placeholder="select a image file." required>
                @error('image')
                    <p style="color: red; margin-bottom:20px">{{$message}}</p>
                @enderror
            </div>
            <br>

            <button class="btn btn-primary">Submit</button>

        </form>
    </div> --}}

@endsection

@section('scripts')
    <script>
        const form = document.querySelector('form')
        form.addEventListener('submit', e => {
            if (!form.checkValidity()) {
                e.preventDefault()
            }
            form.classList.add('was-validated')
        })
    </script>
@endsection


