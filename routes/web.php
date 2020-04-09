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
use App\DataTables\UserDataTable;


Route::get('/', function () {
    return view('frontend.home.home');
});

Route::resource('post', 'Frontend\PostController');
Route::get('user', 'Frontend\UserController@index');

//For Yajrabox filter
Route::get('users', 'Frontend\UserController@getUsers')->name('get.users');

Route::get('builder', function (UserDataTable $dataTable) {
    return $dataTable->render('frontend.builder.builder');
});