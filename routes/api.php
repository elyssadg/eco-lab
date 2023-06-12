<?php

use App\Http\Controllers\ThreadController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/posts',[ThreadController::class,'thread_api'])->middleware(['auth:sanctum']);
Route::get('/posts/{id}',[ThreadController::class,'show_api'])->middleware(['auth:sanctum']);
Route::get('/login', [UserController::class, 'login_api']);
Route::get('/register2', [UserController::class, 'register_api']);
Route::get('/me',[UserController::class, 'me_api'])->middleware(['auth:sanctum']);
Route::post('/post_forum',[ThreadController::class, 'post_thread_api'])->middleware(['auth:sanctum']);

