<?php

namespace App\Http\Resources\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'name' => $this->name ,
            'parent_id' => $this->parent_id ,
            'slug' => $this->slug ,
            'category_order' => $this->category_order ,
            'status' => $this->status?'Active':'Inactive' ,
            'sub_category' => $this->subCategory ,
        ];
    }
}
