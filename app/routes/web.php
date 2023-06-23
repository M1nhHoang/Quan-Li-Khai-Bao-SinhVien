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
});

Route::group(['prefix' => '/khaibao'], function () {
    Route::get('', 'SinhVienController@index');
    Route::post('/guiBanKhai', 'SinhVienController@submit');
});

Route::group(['prefix' => '/quanLiTotNghiep', 'middleware' => 'userLogin'], function () {
    Route::get('form1', 'quanLyTotNghiepController@form1');
    Route::get('form2', 'quanLyTotNghiepController@form2');
});

Route::group(['prefix' => '/'], function () {
    Route::post('register', 'userController@postRegister');
    Route::get('register', 'userController@register');
    Route::post('login', 'userController@postLogin');
    Route::get('login', 'userController@login')->name('login');
});
