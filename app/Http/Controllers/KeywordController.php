<?php

namespace App\Http\Controllers;


use App\Http\Resources\Dashboard\KeywordsResource;
use App\Models\Keyword;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KeywordController extends Controller
{

    function index($keyword){
        return "Please wait....";
    }

    function  fetchAll(Request $request ){
        return KeywordsResource::collection(
                    Keyword::when( request('search') ,  function ($q){
                            $q->where('name' ,'like', "%". request('search')."%" ) ;
                        })
                        ->orderBy('id','desc')
                        ->get()
              );
    }

    function destroy($id){
        Keyword::where('id' , $id)->delete();
        return response()->json([ 'data' => 'success' ]);
    }

    function store(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $slug = Str::slug($request->name);
        $tag = Keyword::where('id' , $request->id) ->orWhere('slug' , $slug )->first();

        if( !$tag )
        {
            $tag =  new Keyword();
        }

        $tag->name = $request->name ;
        $tag->slug = $slug ;
        $tag->status = $request->status ;
        $tag->save() ;

        return response()->json([ 'data' => 'success' ]);

    }

    function keywordSearch(Request $request){
        return $tags = Keyword::when( request('search') ,  function ($q){
            $q->where('name' ,'like', "%". request('search')."%" ) ;
        })
            ->orderBy('id','desc')
            ->take(20)
            ->get();

    }
}
