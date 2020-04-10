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

Route::get('/update/employe/{id}','Admin\Employe@update_employe')->name('update_employe');
Route::post('/update/employe/{id}','Admin\Employe@update_employe_pro');
Route::get('/show/employe/{id}','Admin\Employe@show_employe')->name('show_employe');

Route::get('/delete/employe/{id}','Admin\Employe@delete_employe')->name('delete_update');
Route::get('/deleted_employe','Admin\Employe@deleted_employe')->name('deleted_employe');
Route::get('/deleteF/{id}','Admin\Employe@deleteF')->name('deleteF');
Route::get('/restore/{id}','Admin\Employe@restore')->name('restore');

//          Auth Route
Auth::routes();

Route::get('/home', function(){return redirect()->route('home');});
