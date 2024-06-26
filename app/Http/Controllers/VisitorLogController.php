<?php

namespace App\Http\Controllers;

use App\Models\VisitorLog;
use Illuminate\Http\Request;

class VisitorLogController extends Controller
{
    function storeVisitors()
    {
        $ipDetail = $this->IPDetails($this->getIPAddress());
        $VisitorLog =  VisitorLog::where( 'ip_address' , $this->getIPAddress() )
            ->whereDate('visit_time' , date('Y-m-d'))
            ->first();

        if( !$VisitorLog )
        {
            $VisitorLog =  new  VisitorLog();
            $VisitorLog->visit_count_in_day = 1 ;
        }

        $VisitorLog->ip_address = $this->getIPAddress() ;
        $VisitorLog->visit_time = date('Y-m-d H:i:s');
        $VisitorLog->country = $ipDetail->geoplugin_countryName ;
         $VisitorLog->city = $ipDetail->geoplugin_city ;
         $VisitorLog->visit_count_in_day = $VisitorLog->visit_count_in_day+1;
         $VisitorLog->save();

         return response()->json(['status'=>200, "message"=>"save"]);
    }

    function  visitorShow()
    {
        $visitorList =  VisitorLog::get();
        $dataSet = [];
        $totalVisitors =  collect($visitorList)->pluck('visit_count_in_day')->sum();
        $commonIP =  collect($visitorList)->pluck('ip_address')->unique();
        $commonIPCount =  collect($commonIP)->count();
        foreach ( collect($visitorList)->count()? $visitorList:[] as $item )
        {
            $dataSet[]=[
                'domian' => $item->domain ,
                'visitor_ip' => $item->ip_address ,
                'visit_country' => $item->country ,
                'visit_city' => $item->city ,
                'visit_time' => $item->visit_time ,
                'visit_count_in_day' => $item->visit_count_in_day ,
            ];
        }

        return response()->json(['status'=>200,
        'uscelebrities.xyz'=> collect($visitorList)->groupBy('')->count(),
        'usaonlineblog.com'=> collect($visitorList)->groupBy('domain')->count(),
        'total_visitors'=>$totalVisitors,'common_ip_count'=>$commonIPCount,
            'common_ips'=>$commonIP, 'data'=>$dataSet,
            'domain_lsit' => collect($visitorList)->groupBy('domain') ,]);
    }


    function getIPAddress() {  
        //whether ip is from the share internet  
         if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                    $ip = $_SERVER['HTTP_CLIENT_IP'];  
            }  
        //whether ip is from the proxy  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
         }  
    //whether ip is from the remote address  
        else{  
                 $ip = $_SERVER['REMOTE_ADDR'];  
         }  
         return $ip;  
    }

    function  IPDetails($ip)
    {
        $ipdat = @json_decode(file_get_contents(
            "http://www.geoplugin.net/json.gp?ip=" . $ip));

        return $ipdat;
    }

    public function catechVisitors(Request $request)
    {
       
        $ipDetail = $this->IPDetails( $request->c_ip_address);
        $VisitorLog =  VisitorLog::where( 'ip_address' , $request->c_ip_address )
            ->whereDate('visit_time' , date('Y-m-d'))
            ->where('domain' , $request->domain )
            ->first();

        if( !$VisitorLog )
        {
            $VisitorLog =  new  VisitorLog();
            $VisitorLog->visit_count_in_day = 1 ;
            $VisitorLog->domain= $request->domain;       
        }


        $VisitorLog->ip_address = $request->c_ip_address ;
        $VisitorLog->visit_time = date('Y-m-d H:i:s');
        $VisitorLog->country = $ipDetail->geoplugin_countryName ;
         $VisitorLog->city = $ipDetail->geoplugin_city ;
         $VisitorLog->visit_count_in_day = $VisitorLog->visit_count_in_day+1;
         $VisitorLog->save();

         return response()->json(['status'=>200,'message'=>"record saved."],200);
   
    }

}
