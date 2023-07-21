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
    
//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', function () {
    return view('auth.login');
})->name('/');



Route::get('/index', 'App\Http\Controllers\TestController@aa');

Route::get('/aaas', 'App\Http\Controllers\LeaderController@zzz');

Route::resource('/leader', 'App\Http\Controllers\LeaderController'); 

Route::resource('/student', 'App\Http\Controllers\StudentController');

Route::resource('/profile', 'App\Http\Controllers\StudentController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

