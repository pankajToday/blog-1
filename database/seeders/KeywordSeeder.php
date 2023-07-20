<?php

namespace Database\Seeders;

use App\Models\Keyword;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $keywords = [
            'gym','bodybuilding','gyms near me','exercise','treadmill','abs workout','workout','weight','lifetime fitness',
            'personal trainer','cardio','exercise bike'
        ];
        foreach ( $keywords as $tag )
        {
            Keyword::create([ 'name' => $tag , 'slug' =>$tag,'status'=>1 ]);
        }
    }
}
