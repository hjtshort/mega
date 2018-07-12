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
});;
Route::group(['prefix' => 'admin'], function () {
    Route::get('register',function(){
       return view('admin.admin-register');
    })->name('adminregister');
    Route::group(['prefix' => 'login'], function () {
        Route::get('/', function () {
            if(\Illuminate\Support\Facades\Auth::guard('admin')->check()){
                return redirect()->route('dashboard');
            }
            return view('admin.admin-login');
        })->name('login');
        Route::get('logout', 'AdminController@logout')->name('adminlogout');
        Route::get('{provider}/callback', 'AdminController@callbackProvider');
        Route::get('{provider}', 'AdminController@redirectProvider')->name('loginprovider');

    });
    Route::middleware(['CheckAdmin'])->group(function () {
        Route::get('/', function () {
            return view('admin.components.dashboard');
        })->name('dashboard');
        Route::group(['prefix' => 'phan-quyen'], function () {
            Route::get('them-moi', function () {
                return view('admin.components.them-phan-quyen');
            });
            Route::post('them-moi', ['as' => 'them-moi', 'uses' => 'AdminController@postInsertPhanQuyen']);
            Route::get('/', ['as' => 'phan-quyen', 'uses' => 'AdminController@getPhanQuyen']);


            // ROute ajax
            Route::post('changehienthi', ['as' => 'changehienthi', 'uses' => 'AdminController@changeHienThi']);
            Route::get('ajax-table', ['as' => 'ajaxtable', 'uses' => 'AdminController@getAjaxPhanQuyen']);
            Route::post('deletephanquyen', ['as' => 'deletephanquyen', 'uses' => 'AdminController@deletePhanQuyen']);
        });
    });


});

