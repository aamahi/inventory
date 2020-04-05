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

//        Admin Route
Route::get('/',function (){ return redirect()->route('home'); });
Route::get('/admin','Admin\Home@index')->name('home');
//      Employe Route
Route::get('/add/employe','Admin\Employe@add_employe')->name('employe');
Route::post('/add/employe','Admin\Employe@add_employe_process');
Route::get('/employe','Admin\Employe@all_employe')->name('all_employe');

//          Auth Route
Auth::routes();

Route::get('/home', 'HomeController@index')->name('hme');
