<?php

namespace App\Http\Controllers;

use App\Http\Resources\Home\HomeSliderResource;
use App\Http\Resources\HomeSectionPostResource;
use App\Http\Resources\Main\LeftBlockResource;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainPageController extends Controller
{

    function fetchSidePost($side, $random){
        if(  $side === 'latest')
        {
            $currentHur = Carbon::now()->format('Y-m-d H:i');
            $last10Hur = Carbon::parse($currentHur)->subMinutes(600) ->format('Y-m-d H:i');
          //  return [ $currentHur , $last10Hur];
            $postLeftBlock =  Post::whereBetween('updated_at' , [$last10Hur , $currentHur])->orderby('id','desc')->limit($random)->get();
        }
        elseif ($side === 'trending' ){
            $currentDay = Carbon::now()->format('Y-m-d H:i');
            $last3Days = Carbon::parse($currentDay)->subDay(3) ->format('Y-m-d H:i');

            $postLeftBlock =  Post::wherebetween('created_at' ,[$last3Days , $currentDay])->inRandomOrder()->limit($random)->get();
        }
        elseif ( $side === 'weekend' ){
            $startOfWeek = Carbon::now()->startOfWeek()->format('Y-m-d H:i');
            $endOfWeek = Carbon::now()->endOfWeek()->format('Y-m-d H:i');
            $postLeftBlock =  Post::whereBetween('updated_at' , [ $startOfWeek , $endOfWeek ])->orderby('id','desc')->limit($random)->get();
        }
        elseif ( $side === 'side-trending'){
            $postLeftBlock =  Post::inRandomOrder()->limit($random)->get();
        }

        return LeftBlockResource::collection($postLeftBlock);
    }

    function fetchSliderPost(){
        $sliderPost =  Post::where('status',1)
            ->where('publish_status','published')
            ->orderBy('id','desc')
            ->orderBy('updated_at','desc')
            ->take(10)
            ->get();

        return HomeSliderResource::collection( $sliderPost);
    }

    function viewPost($id){
      return  $sliderPost =  Post::where('seo_url' ,$id)
            ->where('status',1)
            ->where('publish_status','published')
            ->orderBy('id','desc')
            ->orderBy('updated_at','desc')
            ->first();
        return Inertia::render('blog-post');
    }

    function fetchLeftSidePost($limit){
        $leftPost =  Post::where('status',1)
            ->where('publish_status','published')
            ->orderBy('id','desc')
            ->orderBy('updated_at','desc')
            ->inRandomOrder()
            ->take($limit?$limit:2)
            ->get();

        return HomeSectionPostResource::collection( $leftPost);
    }

    function categoryList(){
        return Category::select('id','slug','name')->where('status',1)->whereNull('parent_id')->get();
    }

    function recentPost(){
        $recentPosts =  Post::where('status',1)
            ->where('publish_status','published')
            ->where('created_at', '>=',Carbon::now()->subDays(7))
            ->orderBy('id','desc')
            ->orderBy('updated_at','desc')
            ->take(5)
            ->get();

        if(  collect( $recentPosts )->count() < 4 )
        {
            $recentPosts =  Post::where('status',1)
                ->where('publish_status','published')
                ->orderBy('id','desc')
                ->orderBy('created_at','desc')
                ->take(5)
                ->get();
        }

        return HomeSectionPostResource::collection( $recentPosts );
    }

    function fetchPostByCategory($name , Request $request ){
        $categoryPosts =  Post::where('status',1)
            ->whereHas('',function ($q) use($name){
                $q->where('name','like','%'.$name.'%');
            })
            ->where('publish_status','published')
            ->orderBy('id','desc')
            ->orderBy('created_at','desc')
            ->paginate($request->l?$request->l:10);

        return HomeSectionPostResource::collection( $categoryPosts );
    }














}
