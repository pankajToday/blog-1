<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostViewResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    public  function index()
    {
        return view('zenBlog.index');
    }

    public  function postView($slug , Request $request )
    {
        $postData =  new PostViewResource(
            Post::where('seo_url' , $slug )
                ->orderBy('updated_at','desc')
                ->orderBy('id','desc')
                ->first()
        );

        return  Inertia::render('website/Main/BlogPost/PostView',['postData'=>$postData]);
    }

    public function update( Request $request ){
        return response()->json(['data' => 'success']);
    }

    public function destroy( $uid ){
        Post::where('uid' , $uid )->delete();

        return response()->json(['data' => 'success']);
    }


}
