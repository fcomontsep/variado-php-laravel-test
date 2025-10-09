<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', [HomeController::class, 'mostrar']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'crear']);

Route::get('prueba', function(){
	$post = new Post;

	$post->title = 'Título de prueba 2';
	$post->content = 'Categoría de prueba 2';

	$post->save();

	return $post;
});


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