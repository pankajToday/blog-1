<?php

namespace App\Http\Resources\Dashboard;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;


class TopPost extends JsonResource
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
            'post_content' =>  Str::limit($this->article_content,30,'...'),
            'post_category'=> $this->category,
            'tags'=>  $this->pluckData($this->postTags),
            'keywords'=>$this->pluckData($this->postKeywords)  ,
            'slug' => $this->slug ,
            'seo_url' => $this->seo_url ,
            'post_image' => $this->post_image?url($this->post_image):"" ,
            'feature_image' => $this->feature_image?url( $this->feature_image):"" ,
            'post_url' => $this->post_url ,
            'post_date' => Carbon::parse( $this->published_at )->format('M d- Y h:i A'),
            'post_by' =>  $this->PostUser($this->postedByUser ),
            'status' => $this->postStatus( $this->status )
        ];
    }

    function PostUser( $user )
    {
        return [
            'uid' => $user->uid ,
            'first_name' => $user->first_name ,
            'last_name' => $user->last_name ,
            'email' => $user->email ,
            'user_img' => $user->user_img ,
        ];
    }

    function pluckData( $tags )
    {
        $dataTags= [];
        foreach ( $tags as $tag )
        {
            $dataTags[]= [
                'id' => $tag->id ,
                'name' => $tag->name ,
                'slug' => $tag->slug ,
            ];
        }

        return $dataTags;
    }

    function postStatus($val){
        if( $val === 1) { return "Active"; }
        else if($val === 2){ return "Draft" ;}
        else if($val === 3){ return "Canceled" ;}
        else if($val === 4){ return "Removed" ;}
        else if($val === 5){ return "Scheduled" ;}
    }

}
