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
Route::get('about', function () {
    return view('about');
});
Route::get('pesan', function () {
    return view('pesan');
});
Route::get('template', function () {
    return view('layouts.master');
});
Route::get('coba1', function () {
    return view('coba1');
});
Route::get('coba2', function () {
    return view('coba2');
});
Route::post('pesan/kirim', function () {
    return view('pesan_kirim');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::resource('manageadmins', 'ManageAdminController');

 });
 
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
 Route::prefix('admin')->group(function() {
 Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
 Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
 Route::get('/', 'AdminController@index')->name('admin.dashboard');
 Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
 });
 
Route::get('upload',['as'=>'upload.index','uses'=>'UploadController@index']);
Route::get('upload/create',['as'=>'upload.create','uses'=>'UploadController@create']);
Route::post('upload',['as'=>'upload.store','uses'=>'UploadController@store']);

