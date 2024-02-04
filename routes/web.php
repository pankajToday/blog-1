<?php

use App\Http\Controllers\FmNotificationController;
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


# ----------------------------  Test URL ----------------------------------------
Route::get('/visitor',[\App\Http\Controllers\VisitorLogController::class ,'storeVisitors']);
Route::get('/visitor-show',[\App\Http\Controllers\VisitorLogController::class ,'visitorShow']);
Route::get('hash', function (){
    return \Illuminate\Support\Facades\Hash::make('password');
});
Route::get('/testCode',[\App\Http\Controllers\HomeController::class ,'testCode']);
Route::inertia('toast-alert','ToastNotification');
#Route::inertia('your-ideas', 'YourIdea');

# ----------------------------  Test URL end  ----------------------------------------


Route::middleware(['visitor.log'])->group(function() {
    Route::get('/',[\App\Http\Controllers\HomeController::class ,'mainPage'])->name('post.all');
    Route::get('/post/{slug}',[\App\Http\Controllers\PostController::class ,'postView'])->name('post.view');
});
// Blog Post
Route::post('/post/{id}' , [\App\Http\Controllers\MainPageController::class ,'viewPost'])->name('main.view-post');


//Auth
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'signIn'])->name('login');
Route::get('/sign-up', [\App\Http\Controllers\HomeController::class, 'signUp']);
Route::get('/verify/{token}', [\App\Http\Controllers\HomeController::class, 'VerifyToLogin'])->name('user-verify');

/**
 * Verification Routes
 */
Route::get('/email/verify',  [\App\Http\Controllers\AuthController::class,'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}',  [\App\Http\Controllers\AuthController::class,'verify'])->name('verification.verify')->middleware(['auth','signed']);
Route::post('/email/resend',  [\App\Http\Controllers\AuthController::class,'resend'])->name('verification.resend');
Route::get('/auth/{social}',[\App\Http\Controllers\AuthController::class, 'socialLogin'])->where('social','twitter|facebook|linkedin|google');
Route::get('/auth/{social}/callback',[\App\Http\Controllers\AuthController::class, 'handleProviderCallback'])->where('social','twitter|facebook|linkedin|google');

//Test
Route::get('/access-token/{social}',[\App\Http\Controllers\HomeController::class, 'socialAccount'])->where('social','twitter|facebook|linkedin|google');
Route::get('/access-token/{social}/callback',[\App\Http\Controllers\HomeController::class, 'getAccessToken'])->where('social','twitter|facebook|linkedin|google');
Route::get('/twitter-test', [\App\Http\Controllers\HomeController::class, 'twitterTest']);
Route::get('/linkedin-test/{social}', [\App\Http\Controllers\HomeController::class, 'linkedinTest']);

Route::get('/admin',[\App\Http\Controllers\AdminHomeController::class ,'loginShowFrm']);
Route::get('/contact-us',[\App\Http\Controllers\HomeController::class ,'contactUs']);
Route::get('/about-us',[\App\Http\Controllers\HomeController::class ,'aboutUs']);
Route::get('/ai',[\App\Http\Controllers\HomeController::class ,'AIShow']);
Route::inertia('/medium', 'website/Main/medium-post');

// Firebase Notification.
Route::get('push-notification', [FmNotificationController::class, 'index']);


Route::middleware('auth:sanctum')->group( function () {
    Route::get('/home',[\App\Http\Controllers\AuthController::class ,'home'])->name('dashboard');
    Route::get('/tags/{tag}',[\App\Http\Controllers\TagController::class ,'index'])->name('dashboard.tags');
    Route::get('/categories/{category}',[\App\Http\Controllers\CategoryController::class ,'index'])->name('dashboard.category');
    Route::get('/keywords/{keyword}',[\App\Http\Controllers\KeywordController::class ,'index'])->name('dashboard.keyword');

    //post routes
    Route::get('/post/{slug}',[\App\Http\Controllers\PostController::class ,'edit'])->name('post.show');

});

Route::group(['middleware' => 'auth'], function () {
    //Protected Routes
    Route::inertia('categories', 'Dashboard/Category');
    Route::inertia('posts', 'Dashboard/Posts');
    Route::inertia('keywords', 'Dashboard/Keywords');
    Route::inertia('tags', 'Dashboard/Tags');
    Route::inertia('profile-setting', 'Dashboard/ProfileSetting');
    Route::inertia('upload-file', 'UploadFile2');

    Route::get('logout',[\App\Http\Controllers\AuthController::class ,'logout']);

    Route::get('/post-create', [\App\Http\Controllers\PostController::class ,'create']);
    Route::get('/post/{id}', [\App\Http\Controllers\PostController::class ,'edit']);


});
