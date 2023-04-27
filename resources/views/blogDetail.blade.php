@extends('layouts.main')

@section('title', 'Blog Detail')

@section('content')

    <div class="container">
        <div class="row">
            <img src="" alt="">

            <h1>{{ $blog->title }}</h1>
            <p>{!! $blog->body !!}</p>
        </div>
    </div>

    <a href="/blog">Back</a>

@endsection
