<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

// use App\Http\Controllers\registerController;  



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/', function () {
//     return view('layouts.auth');
// });

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/books', function () {
    return view('books');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/prices', function () {
    return view('prices');
});
// Route::get('/', function () {
//     return view('Login');
// });


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::POST('/login', [loginController::class, 'login'])->name('login');
Route::POST('/login-user', [loginController::class, 'user'])->name('login_user');

// Route::get('/register', [loginController::class, 'register'])->name('register');
Route::POST('/register-user', [loginController::class, 'create'])->name('create_user');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});