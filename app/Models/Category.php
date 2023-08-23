<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory , SoftDeletes;
    protected $table = 'categories';

    protected $guarded =[];

    function post(){
        return $this->hasMany(Post::class ,'category_id' ,'id');
    }

    function parent(){
        return $this->belongsTo(Category::class ,'id','id')->whereNull('parent_id');
    }

    function subCategory(){
        return $this->hasMany(Category::class ,'parent_id','id');
    }
}
