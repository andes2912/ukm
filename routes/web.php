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


Route::get('/', function () {return view('index'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'AuthAdmin\LoginController@ShowLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@Login')->name('admin.submit.login');
        
    //Halaman Route News
    Route::resource('/news','NewsController');
    

    //Halaman Route UKM Bahasa
    Route::get('/UkmBahasa', 'AdminController@UkmBahasa')->name('admin.UkmBahasa.bahasa');
    //Route::get('/UkmBahasa/validasi', 'AdminController@UkmBahasaValidasi')->name('admin.UkmBahasa.bahasavalidasi');
    Route::Resource('/UkmBahasa/inputvalidasi', 'BahasaValidasiController');    
    Route::get('UkmBahasa/inputvalidasi/{validasi}/download', 'BahasaValidasiController@download')->name('validasi.download');

    //Halaman Route UKM Dcfc
    Route::get('/UkmDcfc','AdminController@UkmDcfc')->name('admin.UkmDcfc.dcfc');
    Route::get('/UkmDcfc/validasi', 'AdminController@UkmDcfcValidasi')->name('admin.UkmDcfc.dcfcvalidasi');

});

Route::group(['prefix' => 'bahasa'], function() {  
    Route::get('/', 'BahasaController@index')->name('bahasa.home');
    Route::get('/validasi', 'BahasaController@validasi')->name('bahasa.validasi');
    Route::get('/login', 'AuthBahasa\LoginController@ShowLoginForm')->name('bahasa.login');
    Route::post('/login', 'AuthBahasa\LoginController@Login')->name('bahasa.submit.login');
    Route::get('/logout','AuthBahasa\LoginController@logoutBahasa')->name('logout.bahasa');

    Route::Resource('/proposal','InputBahasaController');
    Route::get('/all','InputBahasaController@all')->name('bahasa.all');
    Route::get('proposal/{bahasa}/download', 'InputBahasaController@download')->name('bahasa.download');

    
});

Route::group(['prefix' => 'dcfc'], function() {
    Route::get('/', 'DcfcController@index')->name('dcfc.home');
    Route::get('/login', 'AuthDcfc\LoginController@ShowLoginForm')->name('dcfc.login');
    Route::post('/login', 'AuthDcfc\LoginController@Login')->name('dcfc.submit.login');
    Route::get('admin/logout','AuthAdmin\LoginController@logoutAdmin')->name('admin.logout');

    Route::Resource('/inputdcfc', 'InputDcfcController');
});


