<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ThreadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('pages.home'); });
Route::group(['middleware' => 'guest'], function(){
    Route::get('/login', [UserController::class, 'login']);
    Route::post('/login', [UserController::class, 'validate_login']);
    Route::get('/register', [UserController::class, 'register']);
    Route::post('/register', [UserController::class, 'validate_register']);
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/forum', [ThreadController::class, 'discussion_forum']);
    Route::get('/forum/{id}', [ThreadController::class, 'thread']);
});
