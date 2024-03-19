<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class FmNotificationController extends Controller
{
    function index(Request $request )
    {
        return Inertia::render('FMCNotification');
    }

    function sendNotification(Request $request){
        $serverKey = env("VITE_FCM_SERVER_KEY");
        $FcmToken=[];

        $FcmToken[] = DB::table('device_logs')->whereNotNull('notify_device_id')->select('notify_device_id')->pluck('notify_device_id')->all();
        $FcmToken[] = User::whereNotNull('notify_device_id')->pluck('notify_device_id')->all();
        $FcmToken = collect($FcmToken )->flatten(1)->unique()->values() ;


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
        $authUser =  Auth::user();
        if( !$authUser )
        {
            DB::table('device_logs')->where('device_id', $request->v_device_id)->update([
                'notify_device_id' => $request->token
            ]);
        }
        else{

            DB::table('device_logs')->where('device_id', $request->device_id)->delete();
            User::where('id', $authUser->id )->update(['notify_device_id'=>$request->token]);
        }
        return response()->json(['token saved successfully.']);
    }

    function deviceLog(Request $request){
       $device = DB::table('device_logs')->where('device_id', $request->device_id)->first();

       if( ! $device ){
           DB::table('device_logs')->updateOrInsert([
               'device_id' =>$request->device_id,
               'extra' =>$request->extra
           ]);

           return response()->json([ 'data'=> '' , 'message' => 'device added.' ,'status'=>200]);
       }

        return response()->json([ 'data'=> '' , 'message' => '' , 'status' =>503]);
    }


}
