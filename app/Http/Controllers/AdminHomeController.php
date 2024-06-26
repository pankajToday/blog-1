<?php

namespace App\Http\Controllers;

use App\Http\Resources\Dashboard\TopPost;
use App\Http\Resources\Home\HomeSliderResource;
use App\Models\Category;
use App\Models\Keyword;
use App\Models\Post;
use App\Models\Tag;
use App\Models\VisitorLog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function React\Promise\all;

class AdminHomeController extends Controller
{
    public function __construct()
    {
        if( !Auth::check() )
        {
            return redirect()->route('login');
        }
    }


    function globalSearch( Request $request){
        $error='';
        if(!$request->type){$error="Search category is missing!";}
        if(!$request->search){$error=["Searching value is missing!"];}

        if( $error )
        {
            return response()->json(['errors'=>$error],412);
        }

        return response()->json([ $request->all()]);
    }

    function topPost( Request $request ,$limit){
      return  TopPost::collection(
          Post::orderBy('id','desc')->take($limit)->get()
      );
    }

    function topCategory( Request $request,$limit ){
        return   $posts =  Category::withCount('post')
            ->orderBy('id','desc')
            ->get();
    }

    function topKeywords( Request $request ,$limit){
        return  $keywords =    Keyword::withCount('postKeywords')
            ->orderBy('id','desc')
            ->get();
    }

    function topTags( Request $request ,$limit ){
        return  $keywords =    Tag::withCount('postTags')
            ->orderBy('id','desc')
            ->get();
    }

    function dashboardStats(){
        $start =Carbon::now()->subDay(30)->format('Y-m-d');
        $end = Carbon::now()->format('Y-m-d');

        $visitors =  VisitorLog::whereBetween('created_at',[$start ,$end])->count();
        $posts = Post::whereBetween('created_at',[$start ,$end])->count();
        $category = Category::count();

        return response()->json([
            'status' =>'success' , 'monthly_Visits'=>$visitors ,
            'category'=> $category ,'posts'=>$posts ]);

    }
}
