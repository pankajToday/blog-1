<?php

use App\Http\Controllers\FmNotificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/visitor-catch',[\App\Http\Controllers\VisitorLogController::class ,'catechVisitors']);
Route::post('/contact-us',[\App\Http\Controllers\HomeController::class ,'contactPost']);
Route::post('login' , [\App\Http\Controllers\AuthController::class ,'login']);

// Firebase Notification.
Route::post('send-notification', [FmNotificationController::class, 'sendNotification'])->name('send.notification');
Route::post('/fmc-save-token', [App\Http\Controllers\FmNotificationController::class, 'saveToken'])->name('save-token');

// Home page API......................
// Prefix -> Home only for all type of Home page API. that will be available for all users.
Route::group(['prefix' => 'home'],function ($q){
    Route::post('/slider-post' , [\App\Http\Controllers\MainPageController::class ,'fetchSliderPost'])->name('main.slider-post');
    Route::post('/post/left-side/{limit}' , [\App\Http\Controllers\MainPageController::class ,'fetchLeftSidePost'])->name('main.left-side-post');
    Route::post('/category-list',[\App\Http\Controllers\MainPageController::class ,'categoryList']);
    Route::post('/recent-post',[\App\Http\Controllers\MainPageController::class ,'recentPost']);
    Route::post('/category/{name}',[\App\Http\Controllers\MainPageController::class ,'fetchPostByCategory']);

});


# Api for Dashboard Users.......................
Route::middleware('auth:sanctum')->group( function () {

    // Prefix -> Dashboard only for all type  of dashboard API.
    Route::group(['prefix' => 'dashboard'],function ($q){
        //Global Search
        Route::post('/global-search',[\App\Http\Controllers\AdminHomeController::class ,'globalSearch']);
        Route::post('/top-post/{limit}',[\App\Http\Controllers\AdminHomeController::class ,'topPost']);
        Route::post('/top-category/{limit}',[\App\Http\Controllers\AdminHomeController::class ,'topCategory']);
        Route::post('/top-keywords/{limit}',[\App\Http\Controllers\AdminHomeController::class ,'topKeywords']);
        Route::post('/top-tags/{limit}',[\App\Http\Controllers\AdminHomeController::class ,'topTags']);
    });


    Route::post('/create-category',[\App\Http\Controllers\CategoryController::class ,'store']);
    Route::post('/fetch-categories',[\App\Http\Controllers\CategoryController::class ,'fetchAll']);
    Route::delete('/category-destroy/{id}',[\App\Http\Controllers\CategoryController::class ,'destroy']);

    Route::post('/create-tag',[\App\Http\Controllers\TagController::class ,'store']);
    Route::post('/fetch-tags',[\App\Http\Controllers\TagController::class ,'fetchAll']);
    Route::delete('/tag-destroy/{id}',[\App\Http\Controllers\TagController::class ,'destroy']);

    Route::post('/create-keyword',[\App\Http\Controllers\KeywordController::class ,'store']);
    Route::post('/fetch-keywords',[\App\Http\Controllers\KeywordController::class ,'fetchAll']);
    Route::delete('/keyword-destroy/{id}',[\App\Http\Controllers\KeywordController::class ,'destroy']);
    
    Route::post('/create-post',[\App\Http\Controllers\PostController::class ,'store']);
    Route::post('/fetch-posts',[\App\Http\Controllers\PostController::class ,'fetchAll']);
    Route::delete('/post-destroy/{id}',[\App\Http\Controllers\PostController::class ,'destroy']);

    Route::post('/upload-file',[\App\Http\Controllers\HomeController::class ,'uploadFile'])->name('media.store');

});


/** Medium API  **/
Route::get('/fetch-user-info',[\App\Http\Controllers\MediumController::class ,'fetchUserInfo'])->name('medium.fetch-user');
Route::post('/fetch-mediun-posts',[\App\Http\Controllers\MediumController::class ,'fetchPost'])->name('medium.fetch-post');
Route::get('/store-post',[\App\Http\Controllers\MediumController::class ,'storePost'])->name('medium.store-post');