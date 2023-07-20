<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Keyword extends Model
{
    use HasFactory , SoftDeletes;

    protected $table ='keywords';

    protected $guarded=[];


    function postKeywords(){
        return $this->belongsToMany(Post::class , 'post_keyword','keyword_id' ,'post_id')
            ->orderBy('keyword_id','asc');
    }
}
