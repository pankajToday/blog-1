<?php

namespace App\Http\Controllers;

use App\Http\Resources\Main\LeftBlockResource;
use App\Models\Post;
use Illuminate\Http\Request;

class MainPageController extends Controller
{

    function fetchLeftBlockPost($random){
        $postLeftBlock =  Post::inRandomOrder()->limit($random)->get();

        return LeftBlockResource::collection($postLeftBlock);
    }















}
