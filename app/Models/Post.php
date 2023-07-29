<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table= 'posts';

    protected $guarded =[];

    function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    function updateByUser(){
        return $this->belongsTo(User::class,'updated_by','id');
    }

    function publishedByUser(){
        return $this->belongsTo(User::class,'published_by','id');
    }

    function postedByUser(){
        return $this->belongsTo(User::class,'posted_by','id');
    }

    function postTags(){
        return $this->belongsToMany(Tag::class , 'post_tag','post_id' ,'tag_id')
            ->orderBy('post_id','asc');
    }

    function postKeywords(){
        return $this->belongsToMany(Keyword::class , 'post_keyword','post_id' ,'keyword_id')
            ->orderBy('post_id','asc');
    }

    function postSEOContent(){
        return $this->hasMany( PostSEOContent::class , 'post_id' ,'id');
    }
}
