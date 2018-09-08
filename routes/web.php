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
    Route::get('/UkmBahasa/Pengajuan','AdminController@Pengajuan')->name('admin.UkmBahasa.pengajuanBhs');
    Route::get('/UkmBahasa/arsip','AdminController@ArsipBhs')->name('admin.UkmBahasa.arsipbhs');
    Route::get('/UkmBahasa/Disetujui','AdminController@Disetujui')->name('admin.UkmBahasa.disetujui');
    Route::get('/UkmBahasa/Revisi','AdminController@Revisi')->name('admin.UkmBahasa.revisi');
    Route::get('/UkmBahasa/RevisiMasuk','AdminController@RevisiMsk')->name('admin.UkmBahasa.revisiMsk');
    Route::get('/UkmBahasa/Menunggu','AdminController@Menunggu')->name('admin.UkmBahasa.menunggu');


    Route::Resource('/UkmBahasa/validasi', 'BahasaValidasiController');    
    Route::get('UkmBahasa/validasi/{validasi}/download', 'BahasaValidasiController@download')->name('validasi.download');
    Route::get('UkmBahasa/{bahasa}/unduh','BahasaValidasiController@unduh')->name('bahasa.unduh');    

    //Halaman Route Admin - UKM Dcfc
    Route::get('/UkmDcfc','AdminController@indexDcfc')->name('admin.UkmDcfc.indexDcfc');
    
    Route::Resource('/UkmDcfc/validasikmh','KmhDcfcController');
});


// Halaman Route BEM
Route::group(['prefix' => 'bem'], function(){
    Route::get('/','BEMController@index')->name('bem.home');
    Route::get('/login','AuthBem\LoginController@ShowLoginForm')->name('bem.login');
    Route::post('/login','AuthBem\LoginController@Login')->name('bem.submit.login');

    // Halaman Route BEM - UKM Bahasa
    Route::get('/bahasa','BEMController@Bahasa')->name('bem.Bahasa.bahasa');
    Route::get('/bahasa/arsip','BEMController@arsipBhs')->name('bem.Bahasa.arsipBhs');
    Route::get('/bahasa/disetujui','BEMController@approveBhs')->name('bem.bahasa.approveBhs');
    Route::get('/bahasa/revisi','BEMController@revisiBhs')->name('bem.bahasa.revisiBhs');
    Route::get('/bahasa/pengajuan','BEMController@pengajuanBhs')->name('bem.bahasa.pengajuanBhs');
    Route::get('/bahasa/revisimasuk','BEMController@revisiBhsMasuk')->name('bem.bahasa.revisiBhsMasuk');
    Route::get('/bahasa/bahasavalidasi','BemBahasaController@index')->name('bem.Bahasa.validasi');
    Route::resource('/bahasa/bahasavalidasi','BemBahasaController');
    Route::get('/bahasa/{unduhBem}/unduhBem','BemBahasaController@unduhBem')->name('unduhBem.download');
    Route::get('/bahasa/{unduhBhs}/unduhBhs','BemBahasaController@unduhBhs')->name('unduhBhs.download');
    

    // Halaman Route BEM - UKM Dcfc
    Route::get('/dcfc','BEMController@indexdcfc')->name('bem.dcfc.index');
    Route::Resource('/dcfc/validasidcfc','BemDcfcController');
});

// Halaman Route UKM Bahasa
Route::group(['prefix' => 'bahasa'], function() {  
    // Login
    Route::get('/login', 'AuthBahasa\LoginController@ShowLoginForm')->name('bahasa.login');
    Route::post('/login', 'AuthBahasa\LoginController@Login')->name('bahasa.submit.login');
    Route::get('/logout','AuthBahasa\LoginController@logoutBahasa')->name('logout.bahasa');

    // Dashboard
    Route::get('/', 'BahasaController@index')->name('bahasa.home');

    // Input Proposal
    Route::Resource('/proposal','InputBahasaController');

    Route::get('/revisibhs','BahasaController@RevisiBhs')->name('bahasa.revisiBhs');
    Route::get('proposal/{bahasa}/download', 'InputBahasaController@download')->name('bahasa.download');
    Route::get('proposal/{validasi}/unduh','InputBahasaController@unduh')->name('unduh.download');
    Route::get('validasi/{BahasaValidasi}/unduhvalidasi','InputBahasaController@unduhvalidasi')->name('unduhvalidasi.download');
    Route::get('validasibahasa/create','BahasaController@inputvalidasi')->name('validasibahasa.inputvalidasi');
    
    // Arsip
    Route::get('/arsip','BahasaController@arsip')->name('bahasa.arsip');

    // BEM
    Route::get('validasi/{unduhBem}/unduhBem','InputBahasaController@unduhBem')->name('unduhBem.download');
    Route::get('/validasi/Bem', 'BahasaController@validasiBem')->name('bahasa.validasiBem');
    Route::get('/allbem','BahasaController@allBem')->name('bahasa.allbem');

    // Kemahasiswaan
    Route::get('proposal/kmh/{id}','InputBahasaController@KirimKmh')->name('bahasa.inputKmh');
    Route::get('proposal/kmh/{id}','InputBahasaController@editKmh')->name('bahasa.inputKmh');
    Route::get('proposal/kmhval/{id}','InputBahasaController@KirimValKmh')->name('bahasa.inputBhsKmh');
    Route::get('proposal/kmhval/{id}','InputBahasaController@editValKmh')->name('bahasa.inputBhsKmh');
    Route::get('/validasi', 'BahasaController@validasi')->name('bahasa.validasi');
    Route::get('/allkmh','BahasaController@allKmh')->name('bahasa.allkmh');

});

// Halaman Route UKM DCFC
Route::group(['prefix' => 'dcfc'], function() {
    //lOGIN
    Route::get('/login', 'AuthDcfc\LoginController@ShowLoginForm')->name('dcfc.login');
    Route::post('/login', 'AuthDcfc\LoginController@Login')->name('dcfc.submit.login');
    Route::get('admin/logout','AuthAdmin\LoginController@logoutAdmin')->name('admin.logout');

    //Controller
    Route::get('/', 'DcfcController@index')->name('dcfc.home');
    Route::get('/arsip','DcfcController@ArsipDcfc')->name('dcfc.arsip');

    //Controller Input
    Route::Resource('/proposaldcfc', 'InputDcfcController');
    Route::get('/proposaldcfc/kmh/{id}','InputDcfcController@createKmh')->name('dcfc.inputKmh');
    Route::get('/proposaldcfc/kmh/{id}','InputDcfcController@editKmh')->name('dcfc.inputKmh');
    Route::get('/proposaldcfc/kmhval/{id}','InputDcfcController@createValKmh')->name('dcfc.inputKmhVal');
    Route::get('/proposaldcfc/kmhval/{id}','InputDcfcController@editValKmh')->name('dcfc.inputKmhVal');

    // BEM
    Route::get('/validasibem','DcfcController@ValidasiBem')->name('dcfc.ValidasiBem');
    Route::get('/validasibem/{unduhBemDcfc}/unduhBemDcfc', 'InputDcfcController@unduhBemDcfc')->name('unduhBemDcfc.download');

    //KMH
    Route::get('/validasikmh','DcfcController@validasiKmh')->name('dcfc.validasiKmh');
    Route::get('/validasikmh/{unduhKmhDcfc}/unduhKmhDcfc','InputDcfcController@unduhKmhDcfc')->name('unduhKmhDcfc.download');
});


