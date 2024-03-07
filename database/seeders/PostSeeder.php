<?php

namespace Database\Seeders;

use App\Models\Keyword;
use App\Models\Post;
use App\Models\PostSEOContent;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $faker =  Faker::create();

        $postImages =[
            '/project-assets/images/website/post-images/mockup-5281992_1280.jpg',
            '/project-assets/images/website/post-images/pxfuel (1).jpg',
            '/project-assets/images/website/post-images/pxfuel (2).jpg',
            '/project-assets/images/website/post-images/pxfuel (3).jpg',
            '/project-assets/images/website/post-images/pxfuel (4).jpg',
            '/project-assets/images/website/post-images/pxfuel (5).jpg',
            '/project-assets/images/website/post-images/pxfuel (6).jpg',
            '/project-assets/images/website/post-images/pxfuel (7).jpg',
            '/project-assets/images/website/post-images/pxfuel.com (1).jpg',
            '/project-assets/images/website/post-images/pxfuel.com (2).jpg',
            '/project-assets/images/website/post-images/pxfuel.com.jpg',
            '/project-assets/images/website/post-images/pxfuel.com-1.jpg',
            '/project-assets/images/website/post-images/pxfuel.jpg',
            '/project-assets/images/website/post-images/web-development-gc6cac02ea_640.png',
        ];


        try{
            DB::beginTransaction();
            for ($i=1; $i<=50; $i++ )
            {
                $postData=[
                    'category_id' => 1 ,
                    'uid'=>1,
                    'title' =>$faker->realText(50) ,
                    'caption' =>$faker->realText(50) ,
                    'slug' => Str::slug( $faker->realText(50) ) ,
                    'seo_url' => Str::slug( $faker->realText(50) ) ,
                    'post_url' => Str::slug( $faker->realText(50) ) ,
                    'short_description' => $faker->realText(1000,5) ,
                    'article_content' => $faker->realText(10000,5) ,
                    'post_image' =>$postImages[rand(0,13)],
                    'feature_image' =>$postImages[rand(0,13)],
                    'status' => 1 ,
                    'publish_status' => 'published' ,
                    'published_at' => date('Y-m-d H:i') ,
                    'published_by' => 1 ,
                    'posted_by' => 1 ,
                    'updated_by' =>1
                ];

                $post =  Post::create($postData);

                $post->uid = $post->id.Carbon::now()->timestamp;
                $post->save();

                $post->postTags()->sync([1,2,3,4,5]);
                $post->postKeywords()->sync([1,2,3,4,5]);

                $keywords = Keyword::select('name')->take(5)->get()->pluck('name')->toArray();

                $postSEOContent=[
                    'uid'=>1,
                    'post_id' => $post->id,
                    'page_section' => 'head' ,
                    'content' => 'keywords' ,
                    'description' => implode(',',$keywords) ,
                ];
              $postSEO =  PostSEOContent::create($postSEOContent);

              $postSEO->uid = $postSEO->id.Carbon::now()->timestamp;
              $postSEO->save();

                DB::commit();

            }

        }
        catch (\Exception $e)
        {
            DB::rollBack();

            dd('Error', $e->getMessage() );
        }
    }
}
