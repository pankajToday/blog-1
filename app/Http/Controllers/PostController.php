<?php

namespace App\Http\Controllers;

use App\Events\PostCreateEvent;
use App\Http\Resources\Dashboard\PostResource;
use App\Http\Resources\PostViewResource;
use App\Models\Post;
use hollodotme\FastCGI\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public  function index()
    {
        return view('zenBlog.index');
    }

    /** Main Page  **/
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


    /** Dashboard Page  **/
    function  fetchAll(Request $request ){
        return PostResource::collection(
            Post::when( request('search') ,  function ($q){
                    $q->where('title' ,'like', "%". request('search')."%" ) ;
                    $q->orWhereHas('category', function ($q){
                        $q->where('name' ,'like', "%". request('search')."%" );
                    });
                    $q->orWhereHas('postedByUser', function ($q){
                        $q->where(DB::raw('CONCAT(first_name," ",last_name)'), 'like', '%' . request('search') . '%');
                        $q->orWhere('first_name' ,'like','%'.request('search').'%');
                        $q->orWhere('last_name' ,'like','%'.request('search').'%');
                    });
                })
                ->orderBy('id','desc')
                ->paginate(20)
        );
    }

    public function create( Request $request ){
        return  Inertia::render('Dashboard/PostCreate');
    }

    public function store( Request $request ){
        $userId = Auth::id();

        try{
            $post = new  Post();

            $post->title = $request->title;
            $post->category_id   = 1;//$request->category_id ;
            $post->uid   = rand(100,999).date('ymdis') ;
            $post->caption   = $request->caption ;
            $post->short_description   =  $request->short_description ;
            $post->slug   = Str::slug($request->title );
            $post->seo_url   =  Str::slug($request->title ) ;
            $post->post_image   =  $request->feature_image ;
            $post->post_image_name = $request->feature_image_name ;
            $post->feature_image   = $request->feature_image ;
            $post->feature_image_name   = $request->feature_image_name ;
            $post->post_url   = Str::slug($request->title ) ;
            $post->article_content   = $request->article_content ;
            $post->status   = 1 ;
            $post->posted_by   = $userId ;
            $post->publish_status   = 'published' ;
            $post->published_at   = date('Y-m-d H:i') ;
            $post->published_by   = $userId ;

            $post->save() ;

            $post->postTags()->sync($request->tags);
            $post->postKeywords()->sync($request->keywords);

            event(new PostCreateEvent( $post ));

            return response()->json(['data' => 'post saved' ,'status'=>'success']);
        }
        catch ( \Exception $exception ){
            return response()->json(['data' => 'unable to send post' ,'status'=>'error']);
        }

    }

    public function edit( Request $request ,$slug ){
        $post = new PostResource(  Post::where('slug' , $slug )->first() );
        return  Inertia::render('Dashboard/PostEdit',['slug'=>$slug,'from_post'=>$post]);
    }

    function  fetchPost( $slug ){
        return new  PostResource(
            Post::where('slug' , $slug )
                ->orderBy('id','desc')
                ->first()
        );
    }

    function updatePost(Request $request){
        return $request->json() ;
    }

    public function destroy( $uid ){
        Post::where('uid' , $uid )->delete();

        return response()->json(['data' => 'success']);
    }




}
