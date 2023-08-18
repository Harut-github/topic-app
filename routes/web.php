<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'AuthController@login');
Route::get('register', 'AuthController@register');
Route::get('home', 'HomeController@index');
Route::get('topic/{topic}', 'TopicController@show');


//, 'middleware' => 'admin' 'namespace' => 'Admin'
Route::group(['prefix' => 'admin', 'namespace' => 'Admin',], function () {
    Route::get('', 'DashboardController@index');
    Route::resource('topics', 'TopicController');
    Route::resource('categories', 'CategoryController');
    Route::get('users', 'UserController@index');
});
