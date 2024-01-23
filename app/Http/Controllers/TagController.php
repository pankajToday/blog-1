<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\Dashboard\TagResource;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    function  fetchAll(Request $request ){
        return TagResource::collection(
                    Tag::when( request('search') ,  function ($q){
                            $q->where('name' ,'like', "%". request('search')."%" ) ;
                        })
                        ->orderBy('id','desc')
                        ->get()
              );
    }

    function destroy($id){
        Tag::where('id' , $id)->delete();
        return response()->json([ 'data' => 'success' ]);
    }

    function store(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $slug = Str::slug($request->name);
        $tag = Tag::where('id' , $request->id) ->orWhere('slug' , $slug )->first();

        if( !$tag )
        {
            $tag =  new Tag();
        }

        $tag->name = $request->name ;
        $tag->slug = $slug ;
        $tag->status = $request->status ;
        $tag->save() ;

        return response()->json([ 'data' => 'success' ]);

    }
}
