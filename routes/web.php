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
    return view('shop.index');
});
/*Route::get('upload','uploadController@index');
Route::post('store','uploadController@store');
*/
Route::get('upload','uploadfileController@index');
Route::post('store','uploadfileController@store');
Route::get('show','uploadfileController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('file','FileController@ShowForm')->name('uploadfile.file');
Route::post('file','FileController@Showdata');


//Route::get('uploaded/{filename}','FileController@getFile')->name('get.file');