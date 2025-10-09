<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'indexar']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'crear']);


/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/posts/{post}', function($post){
	return "Aquí se mostrará el post {$post}";
});
*/