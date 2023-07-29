<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeSectionPostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'uid' => $this->uid ,
            'title' => $this->title ,
            'caption' => $this->caption ,
            'category_id' => $this->category_id ,
            'category_name' => $this->category?$this->category->name:"" ,
            'slug' => $this->slug ,
            'seo_url' => $this->seo_url ,
            'post_image' => $this->post_image?url($this->post_image):"" ,
            'feature_image' => $this->feature_image?url( $this->feature_image):"" ,
            'post_url' => $this->post_url ,
            'article_content' =>$this->article_content,
            'posted_at' =>$this->created_at? Carbon::parse($this->created_at)->format('F-d Y H:i'):"",
            'posted_by' =>$this->posted_by? $this->postedByUser->first_name .''.$this->postedByUser->last_name:"",
            'posted_by_img' =>$this->posted_by? $this->postedByUser->user_img:"/zenBlog/img/person-1.jpg"
        ];
    }
}
