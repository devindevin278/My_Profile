@extends('layouts.main')

@section('title', 'Blog Detail')

@section('content')

<div class="container mb-5">
    <a class="btn btn-primary back" href="/blog#blog"><i data-feather="corner-up-left"></i> Back</a>

    <div id="top" class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/blog#blog">Blogs</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $blog->category }}</li>
                    </ol>
                  </nav>

                <h1 class="mt-2">{{ $blog->title }}</h1>
                <small class="text-muted">By Devin</small>
                <img class="w-100 my-3" src="{{ asset('asset/blogs/'. $blog->image) }}" alt="">
            <div class="fs-5">{!! $blog->body !!}</div>
            <div class="container w-100 p-0 mt-5">
                <a class="btn btn-primary back" href="/blog#blog"><i data-feather="corner-up-left"></i> Back</a>
                <a class="btn btn-primary top" style="background-color: rgb(29, 151, 232)" href="#top">Go to top <i data-feather="chevrons-up"></i></a>
                <a class="btn btn-primary top" style="background-color: rgb(255, 136, 0)" href="">Share <i data-feather="share-2"></i></a>
                <a class="btn btn-primary top" style="background-color: rgb(112, 111, 111)" href="#top">Copy link <i data-feather="link"></i></a>
            </div>
            </div>
        </div>
    </div>

</div>

@endsection
