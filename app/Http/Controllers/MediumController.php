<?php

namespace App\Http\Controllers;

use App\Models\MediumSetting;
use Illuminate\Http\Request;

class MediumController extends Controller
{

    //https://medium.com/${userName}/${articleId}?format=json


    function fetchUserInfo(){

        try{
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.medium.com/v1/me',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Accept: application/json',
                    'Authorization: Bearer 2c26ae32cadb4013fa840ed2be5c2c16a77f01a92ee51733070494804f8ac3917',
                    'Cookie: sid=1:ouiKHx2JBR+oVBktD0dn0PLaqgxk4ccNRrzqMGIRPh+PWEhSsCs/SmIRwBxsXcdr; uid=lo_5ebff855fc2b'
                ),
            ));

            $res = json_decode( curl_exec($curl) ,1 );

            curl_close($curl);
        }
        catch (\Exception $exception ){
            return  response()->json([ 'status'=>'error' ,'data'=>$exception->getCode() ]);
        }


        if( $res['data'] && $res['data']['id'] ){
            $mediumSetting =  MediumSetting::where('status',1)->first();

            if( !$mediumSetting ){
                $mediumSetting =  new MediumSetting();
            }
            $mediumSetting->author_id = $res['data']['id'] ;
            $mediumSetting->name = $res['data']['name'] ;
            $mediumSetting->username = $res['data']['username'] ;
            $mediumSetting->url = $res['data']['url'] ;
            $mediumSetting->imageUrl = $res['data']['imageUrl'] ;
            $mediumSetting->status = 1 ;

            $mediumSetting->save() ;
        }
        
        return  response()->json([ 'status'=>'success' ,'data'=>$res['data']]);
    }


    function fetchPost( Request $request ){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@ankuprsdpkp',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $res =  json_decode( curl_exec($curl),1 ) ;

        curl_close($curl);

        return  $res ;
    }


    function storePost( Request $request ){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.medium.com/v1/users/5303d74c64f66366f00cb9b2a94f3251bf5/posts',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
                                      "title": "Test Post From Rest API",
                                      "contentFormat": "html",
                                      "content": "<p style=\'padding:5px; \'> This is my first post. It is being perfrom from backend side using <strong> Medium REST API </strong>.   </p><p> This post can be customized from the <strong>VUE JS</strong> side. purpose of this post is to test the <strong>Medium REST API </strong> for posting the article and customize it as we want.</p>",
                                      "canonicalUrl": "https://medium.com/@ankuprsdpkp/Test-Post-From-Rest-API",
                                      "tags": "Hwo to , test ,medium",
                                      "publishStatus": "public"
                                      "notifyFollowers": "true"
                                    }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Accept: application/json',
                'Accept-Charset: utf-8',
                'Authorization: Bearer 181d415f34379af07b2c11d144dfbe35d',
                'Cookie: sid=1:ouiKHx2JBR+oVBktD0dn0PLaqgxk4ccNRrzqMGIRPh+PWEhSsCs/SmIRwBxsXcdr; uid=lo_5ebff855fc2b'
            ),
        ));


        return  curl_exec($curl) ;
        $res =  json_decode( curl_exec($curl),1 ) ;

        curl_close($curl);

        return  $res ;
    }
}
