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
    Route::get('/UkmBahasa/validasi/update/{id}','BahasaValidasiController@editBhs')->name('admin.UkmBahasa.updateBhs');
    Route::get('UkmBahasa/validasi/{validasi}/download', 'BahasaValidasiController@download')->name('validasi.download');
    Route::get('UkmBahasa/{bahasa}/unduh','BahasaValidasiController@unduh')->name('bahasa.unduh');    

    //Halaman Route Admin - UKM Dcfc
    Route::get('/UkmDcfc','AdminController@indexDcfc')->name('admin.UkmDcfc.indexDcfc'); 
    Route::Resource('/UkmDcfc/validasikmh','KmhDcfcController');
    Route::get('/UkmDfc/pengajuan','AdminController@pengajuanDcfc')->name('admin.UkmDcfc.pengajuanDcfc');
    Route::get('/UkmDcfc/arsip','AdminController@arsipDcfc')->name('admin.UkmDcfc.arsipDcfc');
    Route::get('/UkmDcfc/revisimasuk','AdminController@revisimasuk')->name('admin.UkmDcfc.revisiMasuk');
    Route::get('/UkmDcfc/revisikeluar','AdminController@revisikeluar')->name('admin.UkmDcfc.revisiKeluar');
    Route::get('/UkmDcfc/disetujui','AdminController@DisetujuiDcfc')->name('admin.UkmDcfc.disetujui');
    Route::get('/UkmDcfc/menunggu','AdminController@delayDcfc')->name('admin.UkmDcfc.menunggu');

    Route::get('/UkmDcfc/validasikmh/update/{id}','KmhDcfcController@editDcfc')->name('admin.UkmDcfc.updateDcfc');

    Route::get('/UkmDcfc/{unduhDcfcKmh}/unduh','KmhDcfcController@unduhDcfcKmh')->name('unduhDcfcKmh.download');
    Route::get('/UkmDcfc/validasikmh/{DownloadKmhDcfc}/download', 'KmhDcfcController@DownloadKmhDcfc')->name('DownloadKmhDcfc.download');

    // Halaman Route Admin - UKM Musik
    Route::get('/UkmMusik','AdminController@indexMusik')->name('admin.UkmMusik.indexMusik');
    Route::Resource('/UkmMusik/validasikmhMusik','KmhMusikController');
    Route::get('/UkmMusik/pengajuan','AdminController@pengajuanmusik')->name('admin.UkmMusik.pengajuanMusik');
    Route::get('/UkmMusik/revisikeluar','AdminController@revisiKeluarMusik')->name('admin.UkmMusik.revisiKeluar');
    Route::get('/UkmMusik/revisimasuk','AdminController@revisiMasukMusik')->name('admin.UkmMusik.revisiMasuk');

    Route::get('/UkmMusik/arsip','AdminController@arsipMusik')->name('admin.UkmMusik.arsipMusik');
    Route::get('/UkmMusik/disetujui','AdminController@DisetujuiMusik')->name('admin.UkmMusik.disetujui');
    Route::get('/UkmMusik/menunggu', 'AdminController@delayMusik')->name('admin.UkmMusik.menunggu');

    Route::get('/UkmMusik/validasikmhMusik/update/{id}','KmhMusikController@editMusik')->name('admin.UkmMusik.updateMusik');

    Route::get('/UkmMusik/{KmhMusikIn}/downloadIn','KmhMusikController@KmhMusikIn')->name('KmhMusikIn.download');
    Route::get('/UkmMusik/validasikmhMusik/{KmhMusikOut}/downloadOut','KmhMusikController@KmhMusikOut')->name('KmhMusikOut.download');

    // Halaman Route Admin - Psdj
    Route::get('/UkmPsdj','AdminController@indexPsdj')->name('admin.UkmPsdj.indexPsdj');
    Route::Resource('/UkmPsdj/validasikmhPsdj','KmhPsdjController');
    Route::get('/UkmPsdj/pengajuan','AdminController@pengajuanPsdj')->name('admin.UkmPsdj.pengajuanPsdj');
    Route::get('/UkmPsdj/revisikeluar','AdminController@revisikeluarPsdj')->name('admin.UkmPsdj.revisikeluar');
    Route::get('/UkmPsdj/revisimasuk','AdminController@revisimasukPsdj')->name('admin.UkmPsdj.revisimasuk');
    Route::get('/UkmPsdj/arsip','AdminController@arsipPsdj')->name('admin.UkmPsdj.arsipPsdj');
    Route::get('/UkmPsdj/disetujui','AdminController@DisetujuiPsdj')->name('admin.UkmPsdj.disetujui');
    Route::get('/UkmPsdj/menunggu','AdminController@delayPsdj')->name('admin.UkmPsdj.menunggu');

    Route::get('/UkmPsdj/validasikmhPsdj/update/{id}','KmhPsdjController@editPsdj')->name('admin.UkmPsdj.updatePsdj');

    Route::get('/psdj/{DownloadKmhPsdj}/download','KmhPsdjController@DownloadKmhPsdj')->name('DownloadKmhPsdj.download');
    Route::get('/psdj/validasikmhPsdj/{DownloadKmhIn}/dowloadFile','KmhPsdjController@DownloadKmhIn')->name('DownloadKmhIn.download');
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
    Route::get('/bahasa/menunggu','BemController@delayBhs')->name('bem.bahasa.menunggu');

    Route::get('/bahasa/bahasavalidasi','BemBahasaController@index')->name('bem.Bahasa.validasi');
    Route::resource('/bahasa/bahasavalidasi','BemBahasaController');

    Route::get('/bahasa/bahasavalidasi/update/{id}','BemBahasaController@editBhs')->name('bem.bahasa.updateBhs');

    Route::get('/bahasa/bahasavalidasi/{unduhBemOut}/unduhBemOut','BemBahasaController@unduhBemOut')->name('unduhBemOut.download');
    Route::get('/bahasa/bahasavalidasi/{unduhBhsIn}/unduhBhsIn','BemBahasaController@unduhBhsIn')->name('unduhBhsIn.download');
    

    // Halaman Route BEM - UKM Dcfc
    Route::get('/dcfc','BEMController@indexdcfc')->name('bem.dcfc.index');
    Route::Resource('/dcfc/validasidcfc','BemDcfcController');
    Route::get('/dcfc/arsip','BemController@arsipDcfc')->name('bem.dcfc.arsipDcfc');
    Route::get('/dcfc/disetujui','BemController@approveDcfc')->name('bem.dcfc.approveDcfc');
    Route::get('/dcfc/pengajuan','BemController@pengajuanDcfc')->name('bem.dcfc.pengajuanDcfc');
    Route::get('/dcfc/revisimasuk','BemController@RevisiDcfcMasuk')->name('bem.dcfc.revisiDcfcMasuk');
    Route::get('/dcfc/revisikeluar','BemController@RevisiDcfcSend')->name('bem.dcfc.revisiDcfcSend');
    Route::get('/dcfc/menunggu','BemController@delayDcfc')->name('bem.dcfc.menunggu');

    Route::get('/dcfc/validasidcfc/update/{id}', 'BemDcfcController@editDcfc')->name('bem.dcfc.updateDcfc');

    Route::get('/dcfc/validasidcfc/{unduhDcfcIn}/unduhDcfcIn','BemDcfcController@unduhDcfcIn')->name('unduhDcfcIn.download');
    Route::get('/dcfc/validasidcfc/{unduhBemDcfcOut}/unduhBemDcfcOut','BemDcfcController@unduhBemDcfcOut')->name('unduhBemDcfcOut.download');

    // Halaman Route BEM - Musik
    Route::get('/musik','BemController@indexMusik')->name('bem.musik.index');
    Route::Resource('/musik/validasimusik','BemMusikController');
    Route::get('/musik/pengajuan','BemController@pengajuanMusik')->name('bem.musik.pengajuanMusik');
    Route::get('/musik/revisimasuk','BemController@revisiMasuk')->name('bem.musik.revisiMusikMasuk');
    Route::get('/musik/revisikeluar','BemController@revisikeluar')->name('bem.musik.revisiMusikSend');
    Route::get('/musik/arsip','BemController@arsipMusik')->name('bem.musik.arsipMusik');
    Route::get('/musik/disetujui','BemController@approveMusik')->name('bem.musik.approveMusik');
    Route::get('/musik/menunggu', 'BemController@delayMusik')->name('bem.musik.menunggu');

    Route::get('/musik/validasimusik/update/{id}','BemMusikController@editMusik')->name('bem.musik.updateMusik');

    Route::get('/musik/{DownloadMusikBem}/download','BemMusikController@DownloadMusikBem')->name('DownloadMusikBem.download');
    Route::get('/musik/{DownloadMusikIn}/downloadfile','BemMusikController@DownloadMusikIn')->name('DownloadMusikIn.download');

    //  Halaman Route BEM - Psdj
    Route::get('/psdj', 'BemController@indexPsdj')->name('bem.psdj.index');
    Route::Resource('/psdj/validasipsdj','BemPsdjController');
    Route::get('/psdj/pengajuan','BemController@pengajuanPsdj')->name('bem.psdj.pengajuanPsdj');
    Route::get('/psdj/revisimasuk','BemController@revisimasukPsdj')->name('bem.psdj.revisiMasukPsdj');
    Route::get('/psdj/revisikeluar','BemController@revisikeluarPsdj')->name('bem.psdj.revisiKeluarPsdj');
    Route::get('/psdj/arsip', 'BemController@arsipPsdj')->name('bem.psdj.arsipPsdj');
    Route::get('/psdj/disetujui', 'BemController@approvePsdj')->name('bem.psdj.approvePsdj');
    Route::get('/psdj/menunggu','BemController@delayPsdj')->name('bem.psdj.menunggu');

    Route::get('/psdj/validasipsdj/update/{id}', 'BemPsdjController@editPsdj')->name('bem.psdj.updatePsdj');

    Route::get('/psdj/{downloadPsdj}/download','BemPsdjController@downloadPsdj')->name('downloadPsdj.download');
    Route::get('/psdj/{downloadBemPsdj}/downloadFile','BemPsdjController@downloadBemPsdj')->name('downloadBemPsdj.download');
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
    Route::get('/logout','AuthDcfc\LoginController@logoutAdmin')->name('dcfc.logout');

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

    // Route Arsip
    Route::get('/arsip','PsdjController@arsip')->name('psdj.arsip');
    Route::get('/arsip/pengajuanbem','PsdjController@pengajuanBem')->name('psdj.pengajuanBem');
    Route::get('/arsip/pengajuankmh','PsdjController@pengajuanKmh')->name('psdj.pengajuanKmh');

    Route::get('/', 'PsdjController@index')->name('psdj.home');
    Route::get('/validasibem','PsdjController@validasiBem')->name('psdj.validasiBem');
    Route::get('/validasikmh','PsdjController@validasiKmh')->name('psdj.validasiKmh');

    // Route Revisi
    Route::get('/arsip/revisibem','PsdjController@revisiBem')->name('psdj.revisiBem');
    Route::get('/arsip/revisikmh','PsdjController@revisiKmh')->name('psdj.revisiKmh');

    // Route Arsip Validasi
    Route::get('arsip/disetujui','PsdjController@disetujui')->name('psdj.disetujui');
    Route::get('arsip/disetujuibem','PsdjController@accBem')->name('psdj.disetujuiBem');
    Route::get('arsip/disetujuikmh','PsdjController@accKmh')->name('psdj.disetujuiKmh');
    
    // Halaman route input Bem
    Route::Resource('proposalpsdj','InputPsdjController');
    Route::get('/{unduhPsdj}/download','InputPsdjController@unduhPsdj')->name('unduhPsdj.download');
    Route::get('/{unduhPsdjIn}/downloadIn','InputPsdjController@unduhPsdjIn')->name('unduhPsdjIn.download');

    // Halaman route input KMH
    Route::get('/proposalpsdj/kmh/{id}','InputPsdjController@createKmh')->name('psdj.inputKmh');
    Route::get('/proposalpsdj/kmh/{id}','InputPsdjController@editKmh')->name('psdj.inputKmh');
    Route::get('/proposalpsdj/kmhrev/{id}','InputPsdjController@createKmhRev')->name('psdj.inputKmhRev');
    Route::get('/proposalpsdj/kmhrev/{id}','InputPsdjController@editKmhRev')->name('psdj.inputKmhRev');
    Route::get('kmh/{unduhPsdjKmh}','InputPsdjController@unduhPsdjKmh')->name('unduhPsdjKmh.download');
});


// Halaman Route UKM Musik
Route::group(['prefix' => 'musik'], function(){
    // login 
    Route::get('/login','AuthMusik\LoginController@ShowLoginForm')->name('musik.login');
    Route::post('/login','AuthMusik\LoginController@Login')->name('musik.submit.login');
    Route::get('/logout','AuthMusik\LoginController@logoutAdmin')->name('musik.logout');

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
    Route::get('/arsip','MusikController@arsip')->name('musik.arsip');
    Route::get('/arsip/pengajuan/bem','MusikController@pengajuanBem')->name('musik.pengajuanBem');
    Route::get('/arsip/pengajuan/kmh','MusikController@pengajuanKmh')->name('musik.pengajuanKmh');
    Route::get('/arsip/revisi/bem','MusikController@revisiBem')->name('musik.revisiBem');
    Route::get('/arsip/revisi/kmh','MusikController@revisiKmh')->name('musik.revisiKmh');

    Route::get('/arsip/disetujui', 'MusikController@disetujui')->name('musik.disetujui');
    Route::get('/arsip/disetujui/bem', 'MusikController@disetujuiBem')->name('musik.disetujuiBem');
    Route::get('/arsip/disetujui/kmh', 'MusikController@disetujuiKmh')->name('musik.disetujuiKmh');
});


