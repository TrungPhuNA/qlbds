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
Route::middleware('checkLoginAdmin')->group(function (){
    Route::get('home','HomeController@index')->name('get.home');
    Route::get('/','HomeController@index')->name('get.home');
    Route::get('import-data','ImportDataController@formImport')->name('get.import_data');
    Route::post('import-data','ImportDataController@processImport');

    Route::get('/profile/{id}/update','UpdateInfoController@edit')->name('get.update.profile');
    Route::post('/profile/{id}/update','UpdateInfoController@update');
});
