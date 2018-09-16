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
    Route::get('/logout','AuthAdmin\LoginController@logoutAdmin')->name('admin.logout');
        
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

    // Halaman Route Admin - UKM Musik
    Route::get('/UkmMusik','AdminController@indexMusik')->name('admin.UkmMusik.indexMusik');
    Route::Resource('/UkmMusik/validasikmhMusik','KmhMusikController');

    // Halaman Route Admin - Psdj
    Route::get('/UkmPsdj','AdminController@indexPsdj')->name('admin.UkmPsdj.indexPsdj');
    Route::Resource('/UkmPsdj/validasikmhPsdj','KmhPsdjController');
;});


// Halaman Route BEM
Route::group(['prefix' => 'bem'], function(){
    Route::get('/','BEMController@index')->name('bem.home');
    Route::get('/login','AuthBem\LoginController@ShowLoginForm')->name('bem.login');
    Route::post('/login','AuthBem\LoginController@Login')->name('bem.submit.login');
    Route::get('/logout','AuthBem\LoginController@logoutBem')->name('bem.logout');

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

    // Halaman Route BEM - Musik
    Route::get('/musik','BemController@indexMusik')->name('bem.musik.index');
    Route::Resource('/musik/validasimusik','BemMusikController');

    //  Halaman Route BEM - Psdj
    Route::get('/psdj', 'BemController@indexPsdj')->name('bem.psdj.index');
    Route::Resource('/psdj/validasipsdj','BemPsdjController');
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
    Route::get('/arsip/revisiBem','BahasaController@revisiBhsBem')->name('bahasa.revisiBem');
    Route::get('/arsip/revisiKmh','BahasaController@revisiBhsKmh')->name('bahasa.revisiKmh');

    Route::get('/arsip/disetujui', 'BahasaController@disetujuiBahasa')->name('bahasa.disetujui');
    Route::get('/arsip/disetujuibem','BahasaController@disetujuiBem')->name('bahasa.disetujuiBem');
    Route::get('/arsip/disetujuikmh','BahasaController@disetujuiKmh')->name('bahasa.disetujuiKmh');

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
    Route::get('/logout','AuthAdmin\LoginController@logoutAdmin')->name('dcfc.logout');

    //Controller Home
    Route::get('/', 'DcfcController@index')->name('dcfc.home');
    // Controller Arsip
    Route::get('/arsip','DcfcController@ArsipDcfc')->name('dcfc.arsip');
    Route::get('/arsip/disetujui','DcfcController@ArsipDcfcAcc')->name('dcfc.disetujui');
    Route::get('/arsip/disetujuiBem','DcfcController@ArsipDcfcAccBem')->name('dcfc.disetujuiBem');
    Route::get('/arsip/disetujuiKmh','DcfcController@ArsipDcfcAccKmh')->name('dcfc.disetujuiKmh');

    Route::get('/arsip/pengajuanbem','DcfcController@ArsipDcfcSendBem')->name('dcfc.pengajuanBem');
    Route::get('/arsip/pengajuankmh','DcfcController@ArsipDcfcSendKmh')->name('dcfc.pengajuanKmh');

    Route::get('/arsip/revisibem','DcfcController@ArsipDcfcRevBem')->name('dcfc.revisiBem');
    Route::get('/arsip/revisikmh','DcfcController@ArsipDcfcRevKmh')->name('dcfc.revisiKmh');

    //Controller Input
    Route::Resource('/proposaldcfc', 'InputDcfcController');
    Route::get('/arsip/pengajuanbem/{unduhDcfc}/unduhDcfc','InputDcfcController@unduhDcfc')->name('unduhDcfc.download');
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

// Halaman Route UKM Psdj
Route::group(['prefix' => 'psdj'], function(){
    // Login
    Route::get('/login','AuthPsdj\LoginController@ShowLoginForm')->name('psdj.login');
    Route::post('/login','AuthPsdj\LoginController@Login')->name('psdj.submit.login');
    Route::get('/logout','AuthPsdj\LoginController@logoutPsdj')->name('psdj.logout');

    Route::get('/', 'PsdjController@index')->name('psdj.home');
    Route::get('/validasibem','PsdjController@validasiBem')->name('psdj.validasiBem');
    Route::get('/validasikmh','PsdjController@validasiKmh')->name('psdj.validasiKmh');

    // Halaman route input Bem
    Route::Resource('proposalpsdj','InputPsdjController');

    // Halaman route KMH
    Route::get('/proposalpsdj/kmh/{id}','InputPsdjController@createKmh')->name('psdj.inputKmh');
    Route::get('/proposalpsdj/kmh/{id}','InputPsdjController@editKmh')->name('psdj.inputKmh');
    Route::get('/proposalpsdj/kmhrev/{id}','InputPsdjController@createKmhRev')->name('psdj.inputKmhRev');
    Route::get('/proposalpsdj/kmhrev/{id}','InputPsdjController@editKmhRev')->name('psdj.inputKmhRev');
});


// Halaman Route UKM Musik
Route::group(['prefix' => 'musik'], function(){
    // login 
    Route::get('/login','AuthMusik\LoginController@ShowLoginForm')->name('musik.login');
    Route::post('/login','AuthMusik\LoginController@Login')->name('musik.submit.login');

    Route::get('/','MusikController@index')->name('musik.home');

    // Controller  BEM
    Route::Resource('/proposalmusik','InputMusikController');
    Route::get('/validasibem','MusikController@validasiBem')->name('musik.validasibem');
    Route::get('/validasibem/{unduhBemMusik}/unduhBemMusik','InputMusikController@unduhBemMusik')->name('unduhBemMusik.download');
    
    // Controller KMH
    Route::get('/validasikmh','MusikController@validasikmh')->name('musik.validasikmh');
    Route::get('/proposalmusik/kmh/{id}','InputMusikController@createKmh')->name('musik.inputKmh');
    Route::get('/proposalmusik/kmh/{id}','InputMusikController@editKmh')->name('musik.inputKmh');

    Route::get('/proposalmusik/kmhval/{id}','InputMusikController@createKmhRev')->name('musik.inputKmhRev');
    Route::get('/proposalmusik/kmhval/{id}','InputMusikController@editKmhRev')->name('musik.inputKmhRev');
    Route::get('/validasikmh/{unduhKmhMusik}/unduhKmhMusik','InputMusikController@unduhKmhMusik')->name('unduhKmhMusik.download');

    // Arsip
    Route::get('/arsip/{unduhMusik}/unduhMusik','InputMusikController@unduhMusik')->name('unduhMusik.download');
    Route::get('/arsip/pengajuan','MusikController@arsip')->name('musik.arsip');
    Route::get('/arsip/pengajuan/bem','MusikController@pengajuanBem')->name('musik.pengajuanBem');
    Route::get('/arsip/pengajuan/kmh','MusikController@pengajuanKmh')->name('musik.pengajuanKmh');
    Route::get('/arsip/revisi/bem','MusikController@revisiBem')->name('musik.revisiBem');
    Route::get('/arsip/revisi/kmh','MusikController@revisiKmh')->name('musik.revisiKmh');

    Route::get('/arsip/disetujui', 'MusikController@disetujui')->name('musik.disetujui');
    Route::get('/arsip/disetujui/bem', 'MusikController@disetujuiBem')->name('musik.disetujuiBem');
});


