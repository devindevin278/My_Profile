@extends('layouts.main')

@section('title', 'My Blogs')

@section('content')

<div class="container mt-5 ">
    <div class="col-md-8 m-auto text-center blog_intro">
        <h1 class="mb-3">Hi, Welcome to My Blogs!</h1>
        <p class="fs-5">Here I share my thoughts, experiences, and ideas on three main topics that interest me: <b class="p-1" style="color: #68ff6b;background-color: rgb(105, 105, 105); text-shadow: .5px 1px 1px #6e7d93;">Lifestyle</b>, <b class="p-1"style="color: #e2e21f; background-color: rgb(105, 105, 105); text-shadow: .5px 1px 1px #6e7d93;">Review</b>, and <b class="p-1" style="color: #35e3d1; background-color: rgb(105, 105, 105);text-shadow: .5px 1px 1px #6e7d93;">Travel</b>. This blog is a reflection of my personal journey, and I hope to create a space where readers can connect with me and each other, share their own experiences, and engage in meaningful discussions.</p>
        <a href="#blog" class="btn btn-primary blog_start fs-5">Start exploring my blogs now!</a>
        </div>
        <div id="blog"></div>
    </div>



    <div  class="container blog my-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            @foreach ($blogs as $blog)

            <div class="col-md-4">
                <div class="card blog_box mb-5">
                    <div class="blog_crop">
                        <img src="asset/blogs/{{ $blog->image }}" class="card-img-top" >
                    </div>
                    <div class="card-body" style="color:
                    @if ($blog->category == 'Review')
                    #feff00
                    @elseif($blog->category == 'Lifestyle')
                    #21ff25
                    @elseif($blog->category == 'Travel')
                    #00ffe6

                    @endif">
                      <h5 class="card-title blog_title text-center text-black px-2 fs-4 pt-1">{{ $blog->title }}</h5>
                      <h5 class="card-text blog py-1 fs-6">{{ $blog->category }}</h5>
                      {{-- <p class="card-text"></p> --}}
                      <a href="/blog/{{ $blog->slug }}" class="btn btn-primary blog_read">Read more..</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>

@endsection
