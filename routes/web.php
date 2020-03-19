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
Route::post('/group/save', 'GroupController@save');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/mail', function () {
    return view('mail');
});
Route::get('/datatable', function () {
    return view('datatable');
});
Route::get('/group', function () {
    return view('group');
});
Route::get('/forum', function () {
    return view('forum');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
