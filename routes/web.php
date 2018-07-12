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
Route::group(['prefix' => 'admin'], function()
{
    Route::get('/',function(){
       return view('admin.components.dashboard');
    })->name('dashboard');
    Route::get('login',function(){
        return view('admin.admin-login');
    });
    Route::group(['prefix'=>'phan-quyen'],function (){
        Route::get('them-moi',function(){
            return view('admin.components.them-phan-quyen');
        });
        Route::post('them-moi',['as'=>'them-moi','uses'=>'AdminController@postInsertPhanQuyen']);
        Route::get('/',['as'=>'phan-quyen','uses'=>'AdminController@getPhanQuyen']);




        // ROute ajax
        Route::post('changehienthi',['as'=>'changehienthi','uses'=>'AdminController@changeHienThi']);
        Route::get('ajax-table',['as'=>'ajaxtable','uses'=>'AdminController@getAjaxPhanQuyen']);
        Route::post('deletephanquyen',['as'=>'deletephanquyen','uses'=>'AdminController@deletePhanQuyen']);
    });


});

