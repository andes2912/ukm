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


Route::get('/', function () {return view('landing'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'AuthAdmin\LoginController@ShowLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@Login')->name('admin.submit.login');
        
    //Halaman Route Admin-News
    Route::resource('/news','NewsController');
    
    //Halaman Route Admin - UKM Bahasa
    Route::get('/UkmBahasa', 'AdminController@UkmBahasa')->name('admin.UkmBahasa.bahasa');
    Route::get('/UkmBahasa/Revisi','AdminController@Revisi')->name('admin.UkmBahasa.revisi');
    Route::Resource('/UkmBahasa/validasi', 'BahasaValidasiController');    
    Route::get('UkmBahasa/validasi/{validasi}/download', 'BahasaValidasiController@download')->name('validasi.download');
    Route::get('UkmBahasa/{bahasa}/unduh','BahasaValidasiController@unduh')->name('bahasa.unduh');    

    //Halaman Route Admin - UKM Dcfc
    Route::get('/UkmDcfc','AdminController@UkmDcfc')->name('admin.UkmDcfc.dcfc');
    Route::get('/UkmDcfc/validasi', 'AdminController@UkmDcfcValidasi')->name('admin.UkmDcfc.dcfcvalidasi');

});


// Halaman Route BEM
Route::group(['prefix' => 'bem'], function(){
    Route::get('/','BEMController@index')->name('bem.home');
    Route::get('/login','AuthBem\LoginController@ShowLoginForm')->name('bem.login');
    Route::post('/login','AuthBem\LoginController@Login')->name('bem.submit.login');

    // Halaman Route BEM - UKM Bahasa
    Route::get('/bahasa','BEMController@Bahasa')->name('bem.Bahasa.bahasa');
    Route::get('/bahasa/arsip','BEMController@arsipBhs')->name('bem.Bahasa.arsipBhs');
    Route::get('/bahasa/bahasavalidasi','BemBahasaController@index')->name('bem.Bahasa.validasi');
    Route::resource('/bahasa/bahasavalidasi','BemBahasaController');
    Route::get('/bahasa/{unduhBem}/unduhBem','BemBahasaController@unduhBem')->name('unduhBem.download');
    Route::get('/bahasa/{unduhBhs}/unduhBhs','BemBahasaController@unduhBhs')->name('unduhBhs.download');
    
});

// Halaman Route UKM Bahasa
Route::group(['prefix' => 'bahasa'], function() {  
    Route::get('/', 'BahasaController@index')->name('bahasa.home');
    Route::get('/validasi', 'BahasaController@validasi')->name('bahasa.validasi');
    Route::get('/login', 'AuthBahasa\LoginController@ShowLoginForm')->name('bahasa.login');
    Route::post('/login', 'AuthBahasa\LoginController@Login')->name('bahasa.submit.login');
    Route::get('/logout','AuthBahasa\LoginController@logoutBahasa')->name('logout.bahasa');

    Route::Resource('/proposal','InputBahasaController');
    Route::get('/all','BahasaController@all')->name('bahasa.all');
    Route::get('/revisibhs','BahasaController@RevisiBhs')->name('bahasa.revisiBhs');
    Route::get('proposal/{bahasa}/download', 'InputBahasaController@download')->name('bahasa.download');
    Route::get('proposal/{validasi}/unduh','InputBahasaController@unduh')->name('unduh.download');
    Route::get('validasi/{BahasaValidasi}/unduhvalidasi','InputBahasaController@unduhvalidasi')->name('unduhvalidasi.download');
    Route::get('validasibahasa/create','BahasaController@inputvalidasi')->name('validasibahasa.inputvalidasi');
   
    // BEM
    Route::get('validasi/bem{unduhBem}/unduhBem','InputBahasaController@unduhBem')->name('unduhBem.download');
    Route::get('/validasi/Bem', 'BahasaController@validasiBem')->name('bahasa.validasiBem');

    // Kemahasiswaan
    Route::get('proposal/kmh/{id}','InputBahasaController@KirimKmh')->name('bahasa.inputKmh');
    Route::get('proposal/kmh/{id}','InputBahasaController@editKmh')->name('bahasa.inputKmh');
    Route::get('proposal/kmhval/{id}','InputBahasaController@KirimValKmh')->name('bahasa.inputBhsKmh');
    Route::get('proposal/kmhval/{id}','InputBahasaController@editValKmh')->name('bahasa.inputBhsKmh');

    

});

Route::group(['prefix' => 'dcfc'], function() {
    Route::get('/', 'DcfcController@index')->name('dcfc.home');
    Route::get('/login', 'AuthDcfc\LoginController@ShowLoginForm')->name('dcfc.login');
    Route::post('/login', 'AuthDcfc\LoginController@Login')->name('dcfc.submit.login');
    Route::get('admin/logout','AuthAdmin\LoginController@logoutAdmin')->name('admin.logout');

    Route::Resource('/inputdcfc', 'InputDcfcController');
});


