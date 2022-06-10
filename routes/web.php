<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\UsersController;

use Illuminate\Support\Facades\Route;

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

Route::get('/hello', [HelloWorldController::class, "show"]);
Route::get('/users/list', [HelloWorldController::class, "show"]);

Route::get('/users', [UsersController::class, "show"]);

Route::get('/list', [ListController::class, "index"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
