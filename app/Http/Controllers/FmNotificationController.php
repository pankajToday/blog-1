<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FmNotificationController extends Controller
{
    function index(Request $request )
    {
        return Inertia::render('FMCNotification');
    }


    function sendNotification(Request $request){
        $FcmToken = User::whereNotNull('two_factor_secret')->pluck('two_factor_secret')->all();
        $serverKey = env("VITE_FCM_SERVER_KEY");
        $url = 'https://fcm.googleapis.com/fcm/send';

        $data = [
            "registration_ids" => $FcmToken,
            "notification" => [
                "title" => $request->title?$request->title:"Hi Love",
                "body" => $request->body? $request->body:"I love you!",
                "icon" => "https://png.pngtree.com/png-clipart/20210418/original/pngtree-my-love-heart-png-image_6226406.jpg",
            ],
            "webpush"=>[
            "fcm_options"=> [
                "link"=> "https://www.youtube.com/watch?v=450p7goxZqg"]

            ]
        ];
        $encodedData = json_encode($data);

        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        // Close connection
        curl_close($ch);
        // FCM response


        return response()->json(json_decode($result,true));
    }

    function saveToken(Request $request){
        User::where('id',3)->update(['two_factor_secret'=>$request->token]);
        return response()->json(['token saved successfully.',$request->token]);
    }
}
