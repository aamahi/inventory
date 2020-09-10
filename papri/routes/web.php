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

Route::get('/','FrontendController@index')->name('frontendHome');
Route::get('/contact','FrontendController@contact')->name('frontendContact');
Route::post('/contact','FrontendController@senContact');
Route::get('/about','FrontendController@about')->name('frontendAbout');
Route::get('/service/details/{id}','FrontendController@serviceDetails')->name('serviceDetails');
Route::get('/course/details/{id}','FrontendController@courseDetails')->name('courseDetails');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function (){
    Route::get('/home','BackendController@index')->name('adminHome');
    Route::get('/setting','BackendController@setting')->name('setting');
    Route::post('/setting','BackendController@addSetting');
    Route::get('/banner','BannerController@banner')->name('banner');
    Route::post('/banner','BannerController@addBanner');
    Route::get('/delete/banner/{id}','BannerController@deleteBanner')->name('deleteBanner');
    Route::get('/clint','clintController@clint')->name('clint');
    Route::post('/clint','clintController@addClint');
    Route::get('/delete/clint/{id}','clintController@deleteClint')->name('deleteClint');
    Route::get('/ceo/message','BackendController@ceo')->name('ceo');
    Route::post('/ceo/message','BackendController@ceoUpdate');
    Route::get('/contract','BackendController@contract')->name('contract');
    Route::get('/contract/seen/{id}','BackendController@contactSeen')->name('contactSeen');

    Route::get('/about','BackendController@about')->name('about');
    Route::post('/about','BackendController@aboutUpdate');

    Route::get('/course','CourseController@Course')->name('Course');
    Route::get('add/course','CourseController@addCourse')->name('addCourse');
    Route::post('add/course','CourseController@addCoursePro');
    Route::get('delete/Course/{id}','CourseController@deleteCourse')->name('deleteCourse');
    Route::get('edit/Course/{id}','CourseController@editCourse')->name('editCourse');
    Route::get('edit/Course/{id}','CourseController@editCourse')->name('editCourse');
    Route::post('edit/Course/{id}','CourseController@updateCourse');
//    Route::post('/course','CourseController@addCourse');


    Route::get('/add/service','ServiceController@addService')->name('addService');
    Route::post('/add/service','ServiceController@addServicePro');
    Route::get('Service','ServiceController@service')->name('allService');
    Route::get('delete/Service/{id}','ServiceController@deleteService')->name('deleteService');
    Route::get('edit/Service/{id}','ServiceController@editService')->name('editService');
    Route::get('edit/Service/{id}','ServiceController@editService')->name('editService');
    Route::post('edit/Service/{id}','ServiceController@updateService');
});
