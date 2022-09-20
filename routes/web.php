<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiblioController;
use App\Http\Controllers\Lab1Controller;
use App\Http\Controllers\Lab2Controller;
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

Route::resource('/biblio', BiblioController::class);
Route::resource('/lab1', Lab1Controller::class);
Route::resource('/lab2', Lab2Controller::class);