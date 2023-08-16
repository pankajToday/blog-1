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

Route::middleware('auth:sanctum')->group( function () {
    Route::group(['prefix' => 'dashboard'],function ($q){
        //Global Search
        Route::post('/global-search',[\App\Http\Controllers\AdminHomeController::class ,'globalSearch']);
        Route::post('/top-post/{limit}',[\App\Http\Controllers\AdminHomeController::class ,'topPost']);
        Route::post('/top-category/{limit}',[\App\Http\Controllers\AdminHomeController::class ,'topCategory']);
        Route::post('/top-keywords/{limit}',[\App\Http\Controllers\AdminHomeController::class ,'topKeywords']);
        Route::post('/top-tags/{limit}',[\App\Http\Controllers\AdminHomeController::class ,'topTags']);
    });


    Route::post('/post-update',[\App\Http\Controllers\PostController::class ,'update']);
    Route::post('/post-remove/{uid}',[\App\Http\Controllers\PostController::class ,'destroy']);

});

Route::get('/visitor-catch',[\App\Http\Controllers\VisitorLogController::class ,'catechVisitors']);
Route::post('/contact-us',[\App\Http\Controllers\HomeController::class ,'contactPost']);
Route::post('login' , [\App\Http\Controllers\AuthController::class ,'login']);

// Firebase Notification.
Route::post('send-notification', [FmNotificationController::class, 'sendNotification'])->name('send.notification');
Route::post('/fmc-save-token', [App\Http\Controllers\FmNotificationController::class, 'saveToken'])->name('save-token');

// Home page API
Route::group(['prefix' => 'home'],function ($q){
    Route::post('/slider-post' , [\App\Http\Controllers\MainPageController::class ,'fetchSliderPost'])->name('main.slider-post');
    Route::post('/post/left-side/{limit}' , [\App\Http\Controllers\MainPageController::class ,'fetchLeftSidePost'])->name('main.left-side-post');
    Route::post('/category-list',[\App\Http\Controllers\MainPageController::class ,'categoryList']);
    Route::post('/recent-post',[\App\Http\Controllers\MainPageController::class ,'recentPost']);
    Route::post('/category/{name}',[\App\Http\Controllers\MainPageController::class ,'fetchPostByCategory']);


});

