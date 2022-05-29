<?php

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

//Route::get('userform', function() {
//    return view('userform');
//});

Route::view('userform', 'userform');
Route::post('usercontroller', [App\Http\Controllers\UserController::class, 'account']);
Route::get('db', [App\Http\Controllers\wsb::class, 'show']);
Route::view('form', 'form');
Route::post('userform', [App\Http\Controllers\userform::class, 'show']);
