<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'backend.index')->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('category.index');
        Route::post('/category/store', 'store')->name('category.store');
        Route::get('/category/show', 'show')->name('category.show');
        Route::get('/category/edit/{id}', 'edit')->name('category.edit');
        Route::post('/category/update/{id}', 'update')->name('category.update');
        Route::get('/category/destroy/{id}', 'destroy')->name('category.destroy');
    });

    Route::controller(BlogController::class)->group(function () {
        Route::get('/blog', 'index')->name('blog.index');
        Route::post('/blog/store', 'store')->name('blog.store');
        Route::get('/blog/show', 'show')->name('blog.show');
        // Route::get('/blog/edit/{id}', 'edit')->name('blog.edit');
        // Route::post('/blog/update/{id}', 'update')->name('blog.update');
        // Route::get('/blog/destroy/{id}', 'destroy')->name('blog.destroy');
    });
});


Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth.signup')->name('signup');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::view('/login', 'auth.signin')->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});
