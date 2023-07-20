<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory , SoftDeletes;

    protected $table ='tags';

    protected $fillable =['name' ,'slug' ,'status'];

    function postTags(){
        return $this->belongsToMany(Post::class , 'post_tag','tag_id' ,'post_id')
            ->orderBy('tag_id','asc');
    }
}
