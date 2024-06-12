<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Information;
use App\Http\Controllers\LoginController;

Route::get('/', [homeController::class, 'index'])->name('homepage');

Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');

Route::get('/profiles/create', [ProfileController::class, 'create'])->name('create');

Route::get('/profiles/{profile}', [ProfileController::class, 'show'])->where('profile','\d+')->name('profiles.show');

Route::post('/profiles/store', [ProfileController::class, 'store'])->name('store');

Route::get('/login', [LoginController::class, 'show'])->name('login.show');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/settings', [Information::class, 'index'])->name('settings.index');


