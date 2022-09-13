<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session as Session;



Route::get('/test', function () {
    return view('admin.appointments.index');
});
///////////////// TESTing Route 

Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/login', function () {
    return view('login.index');
})->name('login');

Route::get('/register', function () {
    return view('register.index');
})->name('register');

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
})->name('logout');

Route::get('/home', [UserController::class, 'home'])->name('home');


Route::get('/admin/home', function () {
    return view('admin.home.index');
})->name('admin.home');

/**
 *  Appointments Route(s)
 * 
 */

Route::prefix('admin/appointments')->controller(AppointmentController::class)->name('admin.appointemnt.')->group(function () {
    Route::get('/', 'list');
    Route::get('/{id}', 'detail')->where('id', '[0-9]+');

    Route::get('/add', 'add');
    Route::post('/new', 'store')->name('store');
    
    Route::get('/edit', 'edit')->name('edit')->where('id', '[0-9]+');
    Route::put('/update/{id}', 'update')->where('id', '[0-9]+');
    Route::delete('/delete/{id}', 'delete')->where('id', '[0-9]+');
});


/**
 *  Sites Route(s)
 * 
 */

Route::prefix('admin/sites')->controller(SiteController::class)->name('admin.sites.')->group(function () {
    Route::get('/', 'list')->name('list');
    Route::get('/{id}', 'detail')->name('detail')->where('id', '[0-9]+');

    Route::get('/add', 'add');
    Route::post('/new', 'store')->name('store');
    
    Route::get('/edit/{id}', 'edit')->name('edit')->where('id', '[0-9]+');
    Route::put('/update', 'update')->name('update');
    Route::delete('/delete/{id}', 'delete')->name('delete')->where('id', '[0-9]+');
});


/**
 *  Providers Route(s)
 * 
 */

Route::prefix('admin/providers')->controller(ProviderController::class)->name('admin.providers.')->group(function () {
    Route::get('/', 'list')->name('list');
    Route::get('/{id}', 'detail')->name('detail')->where('id', '[0-9]+');

    Route::get('/add', 'add');
    Route::post('/new', 'store')->name('store');
    
    Route::get('/edit/{id}', 'edit')->name('edit')->where('id', '[0-9]+');
    Route::put('/update', 'update')->name('update');
    Route::delete('/delete/{id}', 'delete')->name('delete')->where('id', '[0-9]+');
});


////////////////////////////////////////////////////////////////
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });
 
//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });