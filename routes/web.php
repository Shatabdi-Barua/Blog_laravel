<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\UserPostController;

// Route::get('/', function () {
//     return view('user/blog');
// });
// Route::get('post', function(){
//     return view('user/post');
// })->name('post');

/////////User Routes

    Route::get('/', [HomeController::class, 'index']);
    Route::get('post/{slug?}', [UserPostController::class, 'index'])->name('post');

/////Admin Routes
    Route::get('admin/home', [AdminHomeController::class, 'home'])->name('admin.home');
    
    Route::resource('admin/user', UserController::class);
    
    Route::resource('admin/post', PostController::class);

    Route::resource('admin/tag', TagController::class);
    
    Route::resource('admin/category', CategoryController::class);
  
// Route::get('admin/home', function(){
//     return view('admin/home');
// });


// Route::get('admin/tag', function(){
//     return view('admin/tag/tag');
// });

// Route::get('admin/category', function(){
//     return view('admin/category/category');
// });