<?php

use App\Http\Controllers\CategoryController;

// +--------+-----------+-------------------+---------------+---------------------------------------------+--------------+
// | Domain | Method    | URI               | Name          | Action                                      | Middleware   |
// +--------+-----------+-------------------+---------------+---------------------------------------------+--------------+
// |        | GET|HEAD  | api/user          |               | Closure                                     | api,auth:api |
// |        | GET|HEAD  | blogs             | blogs.index   | App\Http\Controllers\BlogController@index   | web          |
// |        | POST      | blogs             | blogs.store   | App\Http\Controllers\BlogController@store   | web          |
// |        | GET|HEAD  | blogs/create      | blogs.create  | App\Http\Controllers\BlogController@create  | web          |
// |        | GET|HEAD  | blogs/{blog}      | blogs.show    | App\Http\Controllers\BlogController@show    | web          |
// |        | PUT|PATCH | blogs/{blog}      | blogs.update  | App\Http\Controllers\BlogController@update  | web          |
// |        | DELETE    | blogs/{blog}      | blogs.destroy | App\Http\Controllers\BlogController@destroy | web          |
// |        | GET|HEAD  | blogs/{blog}/edit | blogs.edit    | App\Http\Controllers\BlogController@edit    | web          |
// +--------+-----------+-------------------+---------------+---------------------------------------------+--------------+


// Route::get('/', function () {
//     dd('Welcome to manager user routes.');
// });

// Route::resource('/', CategoryController::class);