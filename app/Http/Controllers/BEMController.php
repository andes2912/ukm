<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\News;
use App\Model\InputBahasa;
use App\Model\InputDcfc;
use App\Model\InputMusik;
use App\Model\InputPsdj;
use App\Model\BahasaValidasi;
use App\Model\BemBahasa;
use App\Model\BemDcfc;
use App\Model\BemMusik;
use App\Model\BemPsdj;

class BemController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:bem');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = news::orderby('id','DESC')->get();
        return view('bem.home', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
// 
    }

    // Khusus Controller UKM BAHASA
    public function Bahasa()
    {
        $InputBahasa = InputBahasa::Where('status','Baru')->where('user','BEM')->OrderBy('id','Desc')->get();
        return view('bem.Bahasa.bahasa',compact('InputBahasa'));
    }

    public function arsipBhs()
    {
        $ArsipBhsAcc = BemBahasa::where('status','Disetujui')->orderBy('id','Desc')->LIMIT('3')->get();
        $ArsipBhsRev = BemBahasa::where('status','Revisi')->orderBy('id','Desc')->LIMIT('3')->get();
        $ArsipBhsDelay = BemBahasa::where('status','Menunggu')->orderBy('id','Desc')->LIMIT('3')->get();
        return view('bem.Bahasa.arsipBhs',compact('ArsipBhsAcc','ArsipBhsRev','ArsipBhsDelay'));
    }

    public function approveBhs()
    {
        $ArsipBhsApprov = BemBahasa::where('status','Disetujui')->orderBy('id','Desc')->get();
        return view('bem.Bahasa.approveBhs', compact('ArsipBhsApprov'));
    }

    public function revisiBhs()
    {
        $ArsipBhsRev = BemBahasa::where('status','Revisi')->orderBy('id','Desc')->get();
        return view('bem.Bahasa.revisiBhs', compact('ArsipBhsRev'));
    }

    public function delayBhs()
    {
        $delay = BemBahasa::where('status','Menunggu')->orderby('id','desc')->get();
        return view('bem.Bahasa.menunggu', compact('delay'));
    }

    public function pengajuanBhs()
    {
        $PengajuanBhs = InputBahasa::where('status','Baru')->where('user','BEM')->OrderBy('id','Desc')->get();
        return view('bem.Bahasa.pengajuanBhs',compact('PengajuanBhs'));
    }

    public function revisiBhsMasuk()
    {
        $revisiBhsMasuk = InputBahasa::where('status','Revisi')->where('user','BEM')->OrderBy('id','Desc')->get();
        return view('bem.Bahasa.revisiBhsMasuk',compact('revisiBhsMasuk'));
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////
    /// Khusus Controller UKM Dcfc ///

    public function indexdcfc()
    {
        $indexdcfc = InputDcfc::where('status','Baru')->where('user','BEM')->orderby('id','Desc')->get();
        return view('bem.dcfc.index',compact('indexdcfc'));
    }

    public function arsipDcfc()
    {
        $ArsipAcc = BemDcfc::where('status','Disetujui')->orderBy('id','Desc')->LIMIT('3')->get();
        $ArsipRev = BemDcfc::where('status','Revisi')->orderBy('id','Desc')->LIMIT('3')->get();
        $ArsipDelay = BemDcfc::where('status','Menunggu')->orderBy('id','Desc')->LIMIT('3')->get();
        return view('bem.dcfc.arsipDcfc',compact('ArsipAcc','ArsipRev','ArsipDelay'));
    }

    public function approveDcfc()
    {
        $approve = BemDcfc::where('status','Disetujui')->orderby('id','Desc')->get();
        return view('bem.dcfc.approveDcfc', compact('approve'));
    }

    public function pengajuanDcfc()
    {
        $pengajuanDcfc = InputDcfc::where('status','Baru')->where('user','BEM')->LIMIT('5')->orderby('id','DESC')->get();
        return view('bem.dcfc.pengajuanDcfc', compact('pengajuanDcfc'));
    }

    public function RevisiDcfcMasuk()
    {
        $RevisiDcfcMasuk = InputDcfc::where('user','BEM')->where('status','Revisi')->LIMIT('5')->orderby('id','desc')->get();
        return view('bem.dcfc.revisiDcfcMasuk', compact('RevisiDcfcMasuk'));
        
    }

    public function delayDcfc()
    {
        $delay = BemDcfc::where('status','Menunggu')->orderby('id','Desc')->get();
        return view('bem.dcfc.menunggu', compact('delay'));
    }

    public function RevisiDcfcSend()
    {
         $RevisiDcfcSend = BemDcfc::where('status','Revisi')->LIMIT('5')->orderby('id','desc')->get();
         return view('bem.dcfc.revisiDcfcSend',compact('RevisiDcfcSend'));
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////
    /// Khusus Controller UKM Musik ///

    public function indexMusik()
    {
        $indexmusik = InputMusik::where('status','Baru')->where('user','BEM')->orderby('id','Desc')->get();
        return view('bem.musik.index',compact('indexmusik'));
    }

    public function arsipMusik()
    {
        $ArsipAcc = BemMusik::where('status','Disetujui')->orderBy('id','Desc')->LIMIT('3')->get();
        $ArsipRev = BemMusik::where('status','Revisi')->orderBy('id','Desc')->LIMIT('3')->get();
        $ArsipDelay = BemMusik::where('status','Menunggu')->orderBy('id','Desc')->LIMIT('3')->get();
        return view('bem.musik.arsipMusik',compact('ArsipAcc','ArsipRev','ArsipDelay'));
    }

    public function approveMusik()
    {
        $approve = BemMusik::where('status','Disetujui')->orderby('id','desc')->get();
        return view('bem.musik.approveMusik', compact('approve'));
    }

    public function delayMusik()
    {
        $delay = BemMusik::where('status','Menunggu')->orderby('id','desc')->get();
        return view('bem.musik.menunggu', compact('delay'));
    }

    public function pengajuanMusik()
    {
        $pengajuanmusik = InputMusik::where('user','BEM')->where('status','Baru')->LIMIT('5')->orderby('id','Desc')->get();
        return view('bem.musik.pengajuanMusik', compact('pengajuanmusik'));
    }

    public function revisiMasuk()
    {
        $revisimasuk = InputMusik::where('user','BEM')->where('status','Revisi')->LIMIT('5')->orderby('id','desc')->get();
        return view('bem.musik.revisiMusikMasuk', compact('revisimasuk'));
    }

    public function revisiKeluar()
    {
        $revisikeluar = BemMusik::where('status','Revisi')->LIMIT('5')->orderby('id','desc')->get();
        return view('bem.musik.revisiMusikSend', compact('revisikeluar'));
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    /// Khusus Controller UKM Psdj ///

    public function indexPsdj()
    {
        $indexPsdj = InputPsdj::where('status','Baru')->where('user','BEM')->orderby('id','Desc')->get();
        return view('bem.psdj.index',compact('indexPsdj'));
    }

    public function arsipPsdj()
    {
        $ArsipAcc = BemPsdj::where('status','Disetujui')->orderBy('id','Desc')->LIMIT('3')->get();
        $ArsipRev = BemPsdj::where('status','Revisi')->orderBy('id','Desc')->LIMIT('3')->get();
        $ArsipDelay = BemPsdj::where('status','Menunggu')->orderBy('id','Desc')->LIMIT('3')->get();
        return view('bem.psdj.arsipPsdj',compact('ArsipAcc','ArsipRev','ArsipDelay'));
    }

    public function approvePsdj()
    {
        $approve = BemPsdj::where('status','Disetujui')->orderby('id','desc')->get();
        return view('bem.psdj.approvePsdj', compact('approve'));
    }

    public function delayPsdj()
    {
        $delay = BemPsdj::where('status','Menunggu')->orderby('id','desc')->get();
        return view('bem.psdj.menunggu', compact('delay'));
    }

    public function pengajuanPsdj()
    {
        $pengajuanPsdj = InputPsdj::where('user','BEM')->where('status','Baru')->orderby('id','Desc')->get();
        return view('bem.psdj.pengajuanPsdj', compact('pengajuanPsdj'));
    }

    public function revisimasukPsdj()
    {
        $revisimasuk = InputPsdj::where('user','BEM')->where('status','Revisi')->orderby('id','desc')->get();
        return view('bem.psdj.revisiPsdjMasuk', compact('revisimasuk'));
    }

    public function revisikeluarPsdj()
    {
        $revisikeluar = BemPsdj::where('status','Revisi')->orderby('id','desc')->get();
        return view('bem.psdj.revisiPsdjKeluar', compact('revisikeluar'));
    }
}
