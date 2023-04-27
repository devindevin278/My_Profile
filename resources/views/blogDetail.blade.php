@extends('layouts.main')

@section('title', 'Blog Detail')

@section('content')

<div class="container">
    <a class="btn btn-primary" href="/blog#blog"><i data-feather="corner-up-left"></i> Back</a>

    <div id="top" class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1 class="mt-2">{{ $blog->title }}</h1>
                <small class="text-muted">By Devin</small>
                <img class="w-100 my-3" src="{{ asset('asset/blogs/'. $blog->image) }}" alt="">
            <div class="fs-5">{!! $blog->body !!}</div>
            </div>
        </div>
    </div>

    <a class="btn btn-primary" href="#top">Go to top <i data-feather="chevrons-up"></i></a>
</div>

@endsection
