<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BemDcfc;
use App\Model\KmhDcfc;
use App\Model\InputDcfc;
use App\Model\News;
class DcfcController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:dcfc');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderby('id','desc')->get();
        return view('dcfc.home', compact('news'));
    }

    public function ValidasiBem()
    {
        $BemDcfcAcc = BemDcfc::where('status','Disetujui')->LIMIT('5')->orderby('id','Desc')->get();
        $BemDcfcRev = BemDcfc::where('status','Revisi')->LIMIT('5')->orderby('id','Desc')->get();
        $BemDcfcDelay = BemDcfc::where('status','Menunggu')->LIMIT('5')->orderby('id','Desc')->get();
        $DcfcRevKeluar = InputDcfc::where('status','Revisi')->LIMIT('5')->orderby('id','Desc')->get();
        return view('dcfc.ValidasiBem',compact('BemDcfcAcc','BemDcfcRev','BemDcfcDelay','DcfcRevKeluar'));
    }

    public function ValidasiKmh()
    {
        $KmhDcfcAcc = KmhDcfc::where('status','Disetujui')->LIMIT('5')->orderby('id','Desc')->get();
        $KmhDcfcRev = KmhDcfc::where('status','Revisi')->LIMIT('5')->orderby('id','Desc')->get();
        $KmhDcfcDelay = KmhDcfc::where('status','Menunggu')->LIMIT('5')->orderby('id','Desc')->get();
        $DcfcRevKeluar = InputDcfc::where('status','Revisi')->LIMIT('5')->orderby('id','Desc')->get();
        return view('dcfc.ValidasiKmh',compact('KmhDcfcAcc','KmhDcfcRev','KmhDcfcDelay','DcfcRevKeluar'));
    }

    public function ArsipDcfc()
    {
        $ArsipDcfcBem = InputDcfc::where('status','Baru')->where('user','BEM')->LIMIT('5')->orderby('id','Desc')->get();
        $ArsipDcfcKmh = InputDcfc::where('status','Baru')->where('user','KMH')->LIMIT('5')->orderby('id','Desc')->get();
        $ArsipDcfcRevMskBem = BemDcfc::where('status','Revisi')->orderby('id','Desc')->LIMIT('5')->get();
        $ArsipDcfcRevMskKmh = KmhDcfc::where('status','Revisi')->orderby('id','Desc')->LIMIT('5')->get();
        return view('dcfc.arsip',compact('ArsipDcfcBem','ArsipDcfcKmh','ArsipDcfcRevMskBem','ArsipDcfcRevMskKmh'));
          
    }

    public function ArsipDcfcAcc()
    {
        $disetujuiBem = BemDcfc::where('status','Disetujui')->Limit('5')->orderby('id','desc')->get();
        $disetujuiKmh = KmhDcfc::where('status','Disetujui')->Limit('5')->orderby('id','desc')->get();
        return view('dcfc.disetujui',compact('disetujuiBem','disetujuiKmh'));
    }

    public function ArsipDcfcAccBem()
    {
        $disetujuiBemAll = BemDcfc::where('status','Disetujui')->orderby('id','desc')->get();
        return view('dcfc.disetujuiBem',compact('disetujuiBemAll'));
    }

    public function ArsipDcfcAccKmh()
    {
        $disetujuiKmhAll = KmhDcfc::where('status','Disetujui')->orderby('id','desc')->get();
        return view('dcfc.disetujuiKmh',compact('disetujuiKmhAll'));
    }

    public function ArsipDcfcSendBem()
    {
        $pengajuanBem = InputDcfc::where('status','Baru')->where('user','BEM')->orderby('id','desc')->get();
        return view('dcfc.pengajuanBem',compact('pengajuanBem'));
    }

    public function ArsipDcfcSendKmh()
    {
        $pengajuanKmh = InputDcfc::where('status','Baru')->where('user','KMH')->orderby('id','desc')->get();
        return view('dcfc.pengajuanKmh',compact('pengajuanKmh'));
    }

    public function ArsipDcfcRevBem()
    {
        $RevisiBem = InputDcfc::where('status','Revisi')->where('user','BEM')->orderby('id','desc')->get();
        return view('dcfc.revisiBem',compact('RevisiBem'));
    }

    public function ArsipDcfcRevKmh()
    {
        $RevisiKmh = InputDcfc::where('status','Revisi')->where('user','Kmh')->orderby('id','desc')->get();
        return view('dcfc.revisiKmh',compact('RevisiKmh'));
    }
}
