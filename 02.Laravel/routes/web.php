<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
<<<<<<< HEAD
=======
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
>>>>>>> 64863db94dfbc74ca62a81ba2c78111e900cddea
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('register',[RegisterController::class], 'create');

<<<<<<< HEAD
=======
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');;

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


>>>>>>> 64863db94dfbc74ca62a81ba2c78111e900cddea
