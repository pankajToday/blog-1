<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostViewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
              'id' => $this->id   ,
              'uid' => $this->uid   ,
              'category_id' => $this->category_id   ,
              'category_name' =>$this->category?$this->category->name:'',
              'title' => $this->title   ,
              'caption' => $this->caption   ,
              'slug' => $this->slug   ,
              'seo_url' => $this->seo_url   ,
              'post_image' => $this->post_image   ,
              'feature_image' => $this->feature_image   ,
              'article_content' => $this->article_content   ,
              'status' => $this->status   ,
              'posted_by' => $this->posted_by   ,
              'posted_by_name' => $this->posted_by?$this->postedByUser->first_name .' '.$this->postedByUser->last_name :""   ,
              'posted_by_img' =>$this->posted_by?$this->postedByUser->user_img :"" ,
              'created_at' => Carbon::parse($this->updated_at)->format('M d, Y H:i')   ,
              'forHumans' => Carbon::parse($this->updated_at)->diffForHumans(),
              'tags' => $this->postTags->pluck('name','id')   ,
              'keywords' => $this->postKeywords->pluck('name','id')   ,
              'post_seo_content' => $this->postSEOContent   ,

        ];
    }
}
