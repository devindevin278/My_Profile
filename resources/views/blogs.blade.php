@extends('layouts.main')

@section('title', 'My Blogs')

@section('content')

<h1>Hi, welcome to my Blogs!</h1>
<p>Here, you can read some of the blogs that I wrote. Most of them are my related to my daily life</p>

    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="asset/blogs/{{ $blog->image }}" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color:
                    @if ($blog->category == 'food')
                        yellow
                    @elseif($blog->category == 'lifestyle')
                        silver
                    @elseif($blog->category == 'hobby')
                        blue
                    @endif">
                      <h5 class="card-title">{{ $blog->title }}</h5>
                      <h5 class="card-text">{{ $blog->category }}</h5>
                      {{-- <p class="card-text"></p> --}}
                      <a href="/blog/{{ $blog->slug }}" class="btn btn-primary">Read more..</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>

@endsection
