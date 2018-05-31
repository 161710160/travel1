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

Route::group(['prefix'=>'admin'],function(){
    
    Route::get('/admin',function(){
        return 'saya adalah admin';
    });
    Route::get('/admin1',function(){
        return 'saya adalah admin1';
    });
    Route::get('/admin2',function(){
        return 'saya adalah admin2';
    });
});    
    Route::group(['prefix'=>'manager'],function(){
    Route::get('/manager',function(){
        return 'saya adalah manager';
    });
    Route::get('/manager1',function(){
        return 'saya adalah manager1';
    });
    Route::get('/manager2',function(){
        return 'saya adalah manager2';
    });
});    
    Route::group(['prefix'=>'karyawan'],function(){
    Route::get('/karyawan',function(){
        return 'saya adalah karyawan';
    });
    Route::get('/karyawan1',function(){
        return 'saya adalah karyawan1';
    });
    Route::get('/karyawan2',function(){
        return 'saya adalah karyawan2';
    });

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
