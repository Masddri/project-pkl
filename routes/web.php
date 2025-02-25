<?php

use App\Http\Controllers\KartuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route user
Route::group(['prefix' => 'admin'], function () {
    Route::resource('user', UserController::class);
});


// Route Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('kartu', KartuController::class);
});

Route::get('/test', function(){
    return view('test');
});
