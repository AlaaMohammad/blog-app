<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\StoryController;
use App\Http\Controllers\API\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
*/

Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);

/*
|--------------------------------------------------------------------------
| Blog Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/view-blogs',[BlogController::class,'index']);
Route::get('/view-blog-content/{blog_id}',[BlogController::class,'view']);


/*
|--------------------------------------------------------------------------
| Story Routes
|--------------------------------------------------------------------------
|
*/
Route::post('/create-story/{blog_id}',[StoryController::class,'create']);
Route::post('/edit-story-content/{story_id}',[StoryController::class,'edit']);
Route::post('/append-story-content/{story_id}',[StoryController::class,'append']);

Route::group(['middleware' ,'auth:api'], function () {
    Route::get('/view-blog',[BlogController::class,'index']);

});
