<?php

namespace App\Http\Resources\Dashboard;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id ,
            'title' => $this->title ,
            'category_id' =>$this->category_id ,
            'category' => $this->category  ,
            'uid' => $this->uid  ,
            'caption' => $this->caption  ,
            'slug' => $this->slug  ,
            'seo_url' => $this->seo_url  ,
            'post_image' => $this->post_image  ,
            'feature_image' => $this->feature_image  ,
            'post_url' => $this->post_url  ,
            'article_content' => $this->article_content  ,
            'status' => $this->status?"Active":"Inactive"  ,
            'posted_by' => $this->posted_by  ,
            'posted_by_user' => $this->publishedByUser  ,
            'publish_status' => $this->publish_status  ,
            'published_at' =>  Carbon::parse($this->published_at)->format('M-d Y H:i')  ,
            'publishedByUser' => $this->publishedByUser  ,
            'published_by' => $this->published_by  ,
            'created_at' => $this->created_at  ,
            'postTags' => $this->postTags  ,
            'postKeywords' => $this->postKeywords  ,
            'postSEOContent' => $this->postSEOContent  ,

        ];
    }
}
