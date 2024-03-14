<?php

namespace App\Http\Resources\Main;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use function Sodium\randombytes_random16;

class LeftBlockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->uid  ,
            'category_id' => $this->category->slug  ,
            'category_name' => $this->category->name  ,
            'title' => $this->title  ,
            'caption' => $this->caption  ,
            'slug' => $this->slug  ,
            'seo_url' => $this->seo_url  ,
            'post_image' => $this->post_image?$this->post_image:'zenBlog/img/post-landscape-1.jpg'  ,
            'feature_image' => $this->feature_image? $this->feature_image:'zenBlog/img/post-landscape-1.jpg'  ,
            'post_url' => $this->post_url  ,
            'article_content' => $this->article_content  ,
            'short_description' => $this->short_description  ,
            'status' => $this->status  ,
            'published_by' => $this->publishedByUser->uid  ,
            'published_at' => $this->published_at  ,
            'published_user' => $this->publishedByUser->first_name .' '.$this->publishedByUser->last_name  ,
            'published_user_img' => $this->publishedByUser->user_img  ,
        ];
    }
}
