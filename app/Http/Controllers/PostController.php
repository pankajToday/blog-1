<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public  function index()
    {
        return view('zenBlog.index');
    }


    public  function postView()
    {
        return view('zenBlog.single-post');
    }
}
