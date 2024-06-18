<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Information;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicationController;

//*/ Route::name('profiles.')->prefix('profiles')->group(function(){
//     Route::controller(ProfileController::class)->group(function(){
//         Route::get('/', 'index')->name('index');
//         Route::get('/create', 'create')->name('create');
//         Route::post('/', 'store')->name('store');
//         Route::delete('/{profile}', 'destroy')->name('destroy');
//         Route::get('/{profile}/edit', 'edit')->name('edit');
//         Route::put('/{profile}', 'update')->name('update');
//         Route::get('/{profile}', 'show')->where('profile','\d+')->name('show');
//     });
// });

Route::resource('profiles',ProfileController::class)->middleware('auth');
Route::resource('publication',PublicationController::class)->middleware('auth');

Route::middleware(['guest'])->group(function () {
    Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
    Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');

    // Other authenticated routes...
});


    // Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');*/
    // Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
    // Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');
    // Route::delete('/profiles/{profile}', [ProfileController::class, 'destroy'])->name('profiles.destroy');
    // Route::get('/profiles/{profile}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
    // Route::put('/profiles/{profile}', [ProfileController::class, 'update'])->name('profiles.update');
    // Route::get('/profiles/{profile}', [ProfileController::class, 'show'])->where('profile','\d+')->name('profiles.show');







Route::get('/login', [LoginController::class, 'show'])->name('login.show')->middleware('guest');

Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout')->middleware('auth');

Route::get('/', [homeController::class, 'index'])->name('homepage');

Route::get('/settings', [Information::class, 'index'])->name('settings.index')->middleware('auth');

/*------------------------------------------------*/

Route::get('/google', function () {
    return redirect()->away('https://www.google.com');
})->name('google');

Route::get('/route', function () {
    // dd(Route::current());*/

    dd(Route::currentRouteName());
    // dd(Route::currentRouteAction());*/
})->name('route');



