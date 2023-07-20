<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    function loginShowFrm( Request $request)
    {

        $auth =  Auth::attempt(['email'=>$request->email , 'password' =>$request->password] ,true );

        return $auth ;
    }

    function login( Request $request)
    {

        $auth =  Auth::attempt(['email'=>$request->email , 'password' =>$request->password] ,true );

        return $auth ;
    }
}
