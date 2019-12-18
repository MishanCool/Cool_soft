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
    return view('/home/home');
});

Route::get('/w', function () {
    return view('/welcome');
});

// Route::resource('/order','OrderController');
Route::post('/order','OrderController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin',function() {
    return view('/users/admin/dashboard');
})->name('admin');

Route::get('/new_mod',function() {
    return view('/users/admin/new_mod');
})->name('new_mod');

Route::get('/mod',function() {
    return view('/users/mod/mod_dashboard');
})->name('mod');


Route::get('/register',function() {
    return view('/auth/register');
})->name('register');
