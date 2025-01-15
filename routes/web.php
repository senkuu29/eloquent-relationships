<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * @path /users
 * @method GET
 */
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);

/**
 * @path /posts
 * @method GET
 */

//  disini kita menambahkan route baru dengan path post dengan method get  dan didalamnya kita arhkan ke dalam method index yang ada di dalam controller post
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);