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

//Route::get('/profile/{user}', function ($user) {
//    return 'Welcome to Mr. '.$user;
//})->where('user','[A-Za-z]+');
// Route::get('/profile/{name?}', function ($name='Kawsar') {
//     return 'Welcome to Mr. '.$name;
// });
// Route::get('/profile/{user}/{id} ', function ($user,$id) {
//     return 'Welcome to Mr. '.$user.', your id is '.$id;
// });
// Route::get('/profile/{user}/user id/{id} ', function ($user,$id) {
//     return 'Welcome to Mr. '.$user.', your id is '.$id;
// });
//Route::get('/about', function () {
//    return 'About Mr. Jhon Doe';
//});
//
//Route::get('/contact', function () {
//    return 'Contact to Mr. Jhon Doe';
//});
//Route::get('/purpose', function () {
//    return 'Say to Mr. Jhon Doe';
//});
//Route::get('/blog', function () {
//    return 'Write on Mr. Jhon Doe';
//});

//Route::get('/profile/{user?}','UserController@index' );

//Route::get('/profile/{user}/age/{age}','UserController@index' );
//Route::get('/profile/{user} ','UserController@index' );
Route::get('/profile/{user} ','UserController@index' );
Route::get('/welcome','UserController@welcome' );





