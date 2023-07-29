<?php

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
    // add your routes.
});

Route::get('/visitor-catch',[\App\Http\Controllers\VisitorLogController::class ,'catechVisitors']);


Route::post('login' , [\App\Http\Controllers\AdminController::class ,'login'])->name('login');
Route::post('/contact-us',[\App\Http\Controllers\HomeController::class ,'contactPost']);

Route::group(['middleware' => 'auth'], function () {
    Route::post('home' , [\App\Http\Controllers\AdminController::class ,'login'])->name('admin-home');
});

// Home page API
Route::group(['prefix' => 'home'],function ($q){
    Route::post('/slider-post' , [\App\Http\Controllers\MainPageController::class ,'fetchSliderPost'])->name('main.slider-post');
    Route::post('/post/left-side/{limit}' , [\App\Http\Controllers\MainPageController::class ,'fetchLeftSidePost'])->name('main.left-side-post');
    Route::post('/category-list',[\App\Http\Controllers\MainPageController::class ,'categoryList']);
    Route::post('/recent-post',[\App\Http\Controllers\MainPageController::class ,'recentPost']);
});

