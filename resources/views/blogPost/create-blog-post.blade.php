@extends('layout')

@section('head')
    <link rel="stylesheet" href="./res/css/bootstrap.min.css">
    <script defer src="./res/js/bootstrap.bundle.min.js"></script>
@endsection


@section('main')
    <main>
        <section id="contact-us">
            <h1 style="padding-top: 50px">Create New Post!</h1>

            <div class="container">
                <form action="" novalidate>
                    <div class="form-floating">
                        <input type="email" id="email" class="form-control" placeholder="email place here" required>
                        <label for="email" class="form-label">Email</label>
                        <div class="invalid-feedback">Invalid Email</div>
                        <div class="valid-feedback">Valid Email</div>
                    </div>
                    <br>
        
                    <button class="btn btn-primary">Submit</button>
        
                </form>
            </div>

            {{-- <div class="contact-form">

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
            </div> --}}
        </section>
    </main>
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


