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
//    alert()->success('gjjf','gjfnd');
//    alert()->error('gjjf','gjfnd')->persistent('ok');
    return view('welcome');
});

Auth::routes();

Route::get('/auth/google', 'Auth\GoogleAuthController@redirect')->name('auth.google');
Route::get('/auth/google/callback', 'Auth\GoogleAuthController@callback');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/secret', function (){
    return 'secret';
})->middleware('auth','password.confirm');
