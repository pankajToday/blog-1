<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    function  fetchAll(Request $request ){
        return CategoryResource::collection(
                    Category::whereNull('parent_id')
                        ->with('subCategory')
                        ->when( request('search') ,  function ($q){
                            $q->where('name' ,'like', "%". request('search')."%" ) ;
                        })
                        ->orderBy('category_order','asc')
                        ->get()
              );
    }

    function destroy($id){
        Category::where('id' , $id)->delete();
        return response()->json([ 'data' => 'success' ]);
    }

    function store(Request $request){
        $request->validate([
            'name' => 'required',
            'category_order' => 'required',
            'status' => 'required',
          //  'parent_id' => '',
          #  'sub_category' => 'required',
        ]);

        $slug = Str::slug($request->name);
        $category = Category::where('id' , $request->id) ->orWhere('slug' , $slug )->first();

        if( !$category )
        {
            $category =  new Category();
        }

        $category->name = $request->name ;
        $category->slug = $slug ;
        $category->category_order = $request->category_order ;
        $category->status = $request->status ;
        $category->parent_id = $request->parent_id ;
        $category->save() ;

        return response()->json([ 'data' => 'success' ]);

    }
}
