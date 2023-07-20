<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataItems =['Sports','Electric','News','Entertainment','Health','Information','Security','Programming','IT'];

        foreach ( $dataItems as $index => $data )
        {
            Category::create([
                'parent_id'=>null,'name' => $data , 'slug' =>$data ,
                'status'=>1,'category_order'=>$index+1
            ]);
        }
    }
}
