<?php

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

Route::get('/test', function () {

     $pai = \App\User::find(1);
     $filho = \App\User::find(16);

     print_r( \App\User::countErrors() );

    //return \App\User::whereAncestorOrSelf($user->id)->get();

    //return $user;

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
