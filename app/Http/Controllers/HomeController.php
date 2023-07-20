<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * show Main page .
     * @return \Inertia\Response
     */
    function mainPage(){
        return Inertia::render('Main');
    }

    function contactUs(){
        return view('zenBlog.contact');
    }

    function contactPost(Request $request)
    {
        $request->validate([
            'name'=>'required' ,
            'email'=>'required|email' ,
            'subject'=>'required|max:120' ,
            'message'=>'required|max:200|min:10'
        ]);


        try{
            ContactUs::create([
                'name'=>$request->name ,
                'email'=>$request->email ,
                'subject'=>$request->subject ,
                'message'=>$request->message ]);

            return response()->json(['message' =>"message send!"],200);
        }
        catch (\Exception $e){ return $e ;
            return response()->json(['message' =>"something went wrong!"],500);
        }
    }

    function aboutUs(){
        return view('zenBlog.about');
    }




}
