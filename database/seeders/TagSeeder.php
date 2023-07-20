<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tags =["bloggers","blogging","bloggingtips","problogging","blogpromotion","bloggerlife","bloggersgetsocial",
            "bloggerproblems","ontheblog","linkinprofile","lifestyleblog","lifestyleblogger","thegirlgang","lbloggers",
            "theblogissue","wordpress","instablog","instablogger","blog#livethelittlethings","visualsgang",
            "darlingmovement","collectivelycreate","behindthescenes","flashesofdelight","darlingmovement",
            "chasinglight","risingtidesociety","finditliveit","seekthesimplicity","theartofslowliving",
            "myunicornlife","lookslikefilm","thatsdarling","momentswithsunday","alifeconscious","dedication",
            "determination","dreams","documentyourdays","holdyourmoments","simpleliving"];
        
          foreach ( $tags as $tag )
          {
            Tag::create([ 'name' => $tag , 'slug' =>$tag ,'status'=>1]);
          }


    }
}
