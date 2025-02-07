<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'backend.index')->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('category.index');
        Route::get('/category/create', 'create')->name('category.create');
        Route::post('/category/store', 'store')->name('category.store');
        Route::get('/category/show', 'show')->name('category.show');
        Route::get('/category/edit/{id}', 'edit')->name('category.edit');
    });

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/blog', 'index')->name('blog.index');
    });

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'index')->name('profile.index');
        Route::put('/profile', 'update')->name('profile.update');
    });
});


Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth.signup')->name('signup');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::view('/login', 'auth.signin')->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});
