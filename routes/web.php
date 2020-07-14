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
//          Auth Route
Auth::routes();

Route::get('/home', function(){return redirect()->route('home');});

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

//      Customar Route
Route::get('/add/customar','Admin\Customar@add_customar')->name('add_customar');
Route::post('/add/customar','Admin\Customar@add_customar_process');
Route::get('/customar','Admin\Customar@all_customar')->name('all_customar');

Route::get('/customar_group','Admin\Customar@customar_group')->name('customar_group');
Route::post('/customar_group','Admin\Customar@customar_group_add');
Route::get('/delete_customar_group/{id}','Admin\Customar@delete_customar_group')->name('delete_customar_group');
Route::get('/update_customar_group/{id}','Admin\Customar@update_customar_group')->name('update_delete_customar_group');
Route::post('/update_customar_group/{id}','Admin\Customar@update_customar_groupP');

Route::get('/update/customar/{id}','Admin\Customar@update_customar')->name('update_customar');
Route::post('/update/customar/{id}','Admin\Customar@update_customar_pro');
Route::get('/show/customar/{id}','Admin\Customar@show_customar')->name('show_customar');
//
Route::get('/delete/customar/{id}','Admin\Customar@delete_customar')->name('delete_customar');
Route::get('/deleted_customar','Admin\Customar@deleted_customar')->name('h_deleted');
Route::get('/h_delete_customar/{id}','Admin\Customar@deleteF')->name('customar_delete_h');
Route::get('/restore_customar/{id}','Admin\Customar@restore')->name('restore_customar');

//          Suppliar Route
Route::get('/add/suppliar','Admin\Suppliar@add_suppliar')->name('add_suppliar');
Route::post('/add/suppliar','Admin\Suppliar@add_suppliar_process');
Route::get('/suppliar','Admin\Suppliar@all_suppliar')->name('suppliar');
//Route::get('/update/suppliar/{id}','Admin\Suppliar@update_suppliar')->name('update_suppliar');
//Route::post('/update/employe/{id}','Admin\Employe@update_employe_pro');
Route::get('/show/suppliar/{id}','Admin\Suppliar@show_suppliar')->name('show_suppliar');

Route::get('/delete/suppliar/{id}','Admin\Suppliar@delete_suppliar')->name('delete_suppliar');
//          Category Route
Route::get('/category','Admin\Category@category')->name('category');
Route::post('/category','Admin\Category@category_add');
Route::get('/delete_category_temporary/{id}','Admin\Category@delete_category_temporary')->name('delete_category_temporary');
Route::get('/temporary_deleted_category','Admin\Category@temporary_deleted_category')->name('temporary_deleted_category');
Route::get('/restore_deleted_category/{id}','Admin\Category@restore_deleted_category')->name('restore_deleted_category');
Route::get('/delete_category/{id}','Admin\Category@delete_category')->name('delete_category');
Route::get('/update_category/{id}','Admin\Category@edit_category')->name('update_category');
Route::Post('/update_category/{id}','Admin\Category@update_category');
//          Product
Route::get('/add/product','Admin\Product@add_product')->name('add_product');
Route::get('/product_list','Admin\Product@product_list')->name('product_list');
Route::post('/add/product','Admin\Product@add_product_pro');
Route::get('/product/details/{id}','Admin\Product@product_details')->name('product_details');
Route::get('/product/edit/{id}','Admin\Product@product_edit')->name('product_edit');
Route::get('/product/delete/{id}','Admin\Product@product_delete')->name('product_delete');
Route::get('/product/deleted_product','Admin\Product@deleted_product')->name('deleted_product');
Route::get('/product/product_harddelete/{id}','Admin\Product@product_harddelete')->name('product_harddelete');
Route::get('/product/restore_product/{id}','Admin\Product@restore_product')->name('restore_product');

//          Salary
Route::get('/salary','Admin\Salary@index')->name('salary');
Route::post('/salary','Admin\Salary@paysalary');
//Route::get('/delete_category_temporary/{id}','Admin\Category@delete_category_temporary')->name('delete_category_temporary');
//Route::get('/temporary_deleted_category','Admin\Category@temporary_deleted_category')->name('temporary_deleted_category');
//Route::get('/restore_deleted_category/{id}','Admin\Category@restore_deleted_category')->name('restore_deleted_category');
//Route::get('/delete_category/{id}','Admin\Category@delete_category')->name('delete_category');
//Route::get('/update_category/{id}','Admin\Category@edit_category')->name('update_category');
//Route::Post('/update_category/{id}','Admin\Category@update_category');


Route::post('/search','Admin\Product@search')->name('search');
