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
}