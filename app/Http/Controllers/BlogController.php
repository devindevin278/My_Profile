<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index() {
        $blogs = Blog::latest();

        return view('blogs', [
            "blogs" => $blogs->get()
        ]);
    }

    public function show(Blog $blog) {
        return view('blogDetail', [
            "blog" => $blog

        ]);
    }
}
