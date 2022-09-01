<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session as Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });
 
//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });
Route::get('/test', function () {
    return view('admin.appointments.index');
});
///////////////// TESTing ROute

/**
 *  Appointment Route(s)
 * 
 */

Route::prefix('admin/appointments')->controller(AppointmentController::class)->group(function () {
    Route::get('/', 'list');
    Route::get('/{id}', 'detail')->where('id', '[0-9]+');

    Route::get('/add', 'add');
    Route::post('/new', 'store');
    
    Route::get('/edit', 'edit');
    Route::put('/update/{id}', 'update')->where('id', '[0-9]+');
    Route::delete('/delete/{id}', 'delete')->where('id', '[0-9]+');
});

Route::get('/', function () {
    return view('site.home.index');
});

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

Route::get('/site', function () {
    return view('site.home.index');
})->name('site');


Route::get('/admin', function () {
    return view('admin.home.index');
});

Route::get('/sales', function () {
    return view('sales.index');
});

Route::get('/products/{id?}', [ProductController::class, 'show']);
Route::get('/new_product', [ProductController::class, 'new']);
