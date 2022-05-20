<?php

use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "user" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    dd('Welcome to manager user routes.');
});

Route::resource('orders', OrderController::class);