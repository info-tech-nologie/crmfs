<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

// Additional routes from the commented block
Route::middleware('auth', 'isAdmin')->namespace('admin')->group(function() {
    Route::get('admin/users', "UsersController@index")->name('admin.users');
    Route::get('admin/user/{id}', 'UsersController@getUser')->name('admin.user');
    Route::get('admin/prospects', 'ProspectController@index')->name('admin.prospects');
    Route::get('admin/prospect/{id}', 'ProspectController@show')->name('admin.prospect');

    Route::post('admin/users/store', 'UsersController@store')->name('admin.user.store');
    Route::post('admin/prospect/store', 'ProspectController@store')->name('admin.prospect.store');

    Route::put('admin/user/update', 'UsersController@update')->name('admin.user.update');
});
