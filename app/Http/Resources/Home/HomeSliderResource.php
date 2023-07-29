<?php

namespace App\Http\Resources\Home;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class HomeSliderResource extends JsonResource
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
              'slug' => $this->slug ,
              'seo_url' => $this->seo_url ,
              'post_image' => $this->post_image?url($this->post_image):"" ,
              'feature_image' => $this->feature_image?url( $this->feature_image):"" ,
              'post_url' => $this->post_url ,
        ];
    }
}
