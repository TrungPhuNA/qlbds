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

Route::get('login','LoginController@login')->name('get.login');
Route::get('logout','LoginController@logout')->name('get.logout');
Route::post('login','LoginController@postLogin');
Route::get('home','HomeController@index')->name('get.home');
Route::get('/','HomeController@index')->name('get.home');
Route::get('search-order-manage','SearchOrderManageController@index')
    ->name('get_search.order_manage');
Route::post('search-order-manage','SearchOrderManageController@searchOrderManage')
    ->name('post_ajax.order_manage');

Route::middleware('checkLoginAdmin')->group(function (){
    Route::get('import-data','ImportDataController@formImport')->name('get.import_data');
    Route::post('import-data','ImportDataController@processImport');

    Route::get('/profile/{id}/update','UpdateInfoController@edit')->name('get.update.profile');
    Route::post('/profile/{id}/update','UpdateInfoController@update');

    Route::group(['prefix' => 'order-manage'], function (){
        Route::get('/','OrderManageController@index')->name('get.order_manage.index');
    });
    Route::group(['prefix' => 'estate'], function (){
        Route::get('/','EstateController@index')->name('get.estate.index');
    });

    Route::group(['prefix' => 'admin'], function(){
        Route::get('/','AdminController@index')->name('get.admin.index');
        Route::get('create','AdminController@create')->name('get.admin.create');
        Route::post('create','AdminController@store');

        Route::get('update/{id}','AdminController@edit')->name('get.admin.update');
        Route::post('update/{id}','AdminController@update');
    });
});
