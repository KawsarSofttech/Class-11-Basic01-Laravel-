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
    // 'Hello Laravel';
});
// Customization


Route::get('/profile/{user} ','UserController@index' );
Route::get('/welcome','UserController@welcome' );
//Route::redirect('/','welcome' );

Route::get('/congrats','UserController@congrats' );




//2 Hours Remaining




