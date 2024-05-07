<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class AdsController extends Controller
{
    function adsIndex(){
        return Inertia::render('Test/main');
    }

    function compareList(Request $request){
        try{
            $finalListA = $this->prepareAdsList( $request->list_a )->flatten(2)->toArray();
            $finalListB = $this->prepareAdsList( $request->list_b )->flatten(2)->toArray();

            $result =[];
           /* foreach ($finalListA as $index => $value){
                $sectionList1 =  collect( $value[array_key_first($value)] )->toArray();
                $sectionList2 = collect( $finalListB[$index][array_key_first($value)] )->toArray() ;

                $result[]= [
                    strtolower( array_key_first($value) ) =>[
                        'Not in list A'=>array_values(array_udiff($sectionList2,$sectionList1,"self::checkArrString")),
                        'Not in list B'=>array_values(array_udiff($sectionList1,$sectionList2,"self::checkArrString")),
                        'Common Items' =>array_values( array_intersect( $sectionList1 , $sectionList2 )) ]
                ];
            }*/

            $result= [
                    'missing_a'=>array_values(array_udiff($finalListB,$finalListA,"self::checkArrString")),
                    'missing_b'=>array_values(array_udiff($finalListA,$finalListB,"self::checkArrString")),
                    'common_items' =>array_values( array_intersect( $finalListA , $finalListB ))

            ];

            return response()->json(['status' => 'success', 'data'=>$result]);
        }
        catch (\Exception $e){
            return response()->json(['status' => 'error', 'data'=>[] ]);
        }
    }


   private function checkArrString($a,$b)
    {

        if ($a===$b)
        {
            return 0;
        }
        return ($a>$b)?1:-1;
    }

   private  function prepareAdsList( $list){
        $getListArr= collect(explode("\n\n", $list)); // PHP_EOL is best way. but result need something different.

        // In this state we are removing first and last index of array that contained word Start and End.
        return $getListArr->transform( function ($q ,$index) {
            $adsString= explode("\n" , $q);
            $sectionName = $adsString[0];
            array_splice($adsString,0,1);
            array_splice($adsString,array_key_last($adsString),1);
            return [ Str::replace('#','',( Str::replace(' Start','',$sectionName) )  ) => collect( array_values( array_unique($adsString)) )->transform(function ($q){
                return trim( Str::replace(' ', '',$q) );
            }) ] ;
        });
    }












}
