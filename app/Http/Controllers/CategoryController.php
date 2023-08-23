<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

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
}
