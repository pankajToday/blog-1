<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;
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

    function AIShow(){
        return  Inertia::render('website/Main/AI/TextToVoiceRapidAPI');
    }

    function testCode(Request $request){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.collectapi.com/sms/sendSms",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"from\" : \"Test User\",\"to\" : \"9031251290\",\"text\" : \"Merhaba, nasılsın?\"}",
            CURLOPT_HTTPHEADER => array(
                "authorization: apikey 71Br45fMErLMKUgkof7lt2:1j8hmtnWxUfmAdiZz5Rx1H",
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response,true);
        }
    }




}
