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

Auth::routes();


Route::get('/unauth', function(){
    return view('unauth');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', 'HomeController@someAdminStuff')->name('homeAdmin');
    Route::get('/home', 'HomeController@index')->name('home');
});
