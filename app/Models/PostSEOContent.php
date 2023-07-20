<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostSEOContent extends Model
{
    use HasFactory , SoftDeletes;

    protected $table ='post_seo_contents';

    protected $guarded=[];

    function post(){
        return $this->belongsTo(Post::class , 'post_id','id');
    }
}
