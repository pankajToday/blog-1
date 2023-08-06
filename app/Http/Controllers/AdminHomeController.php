<?php

namespace App\Http\Controllers;

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
}
