<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

include_once __DIR__.'/admin.php';
include_once __DIR__.'/users.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class , 'index']);
Route::get('/posts',[PostController::class , 'index']);