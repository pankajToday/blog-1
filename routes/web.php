<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/visitor',[\App\Http\Controllers\VisitorLogController::class ,'storeVisitors']);
Route::get('/visitor-show',[\App\Http\Controllers\VisitorLogController::class ,'visitorShow']);

Route::middleware(['visitor.log'])->group(function() {
    Route::get('/',[\App\Http\Controllers\HomeController::class ,'mainPage'])->name('post.all');
    Route::get('/post/{slug}',[\App\Http\Controllers\PostController::class ,'postView'])->name('post.view');
});

Route::middleware('auth:sanctum')->group( function () {
    // add your routes.
});


Route::get('/admin',[\App\Http\Controllers\AdminController::class ,'loginShowFrm']);
Route::get('/contact-us',[\App\Http\Controllers\HomeController::class ,'contactUs']);
Route::get('/about-us',[\App\Http\Controllers\HomeController::class ,'aboutUs']);



// Blog Post
Route::post('/post/{id}' , [\App\Http\Controllers\MainPageController::class ,'viewPost'])->name('main.view-post');
