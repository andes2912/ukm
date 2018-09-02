<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\InputBahasa;
use App\Model\BahasaValidasi;
use App\Model\InputDcfc;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    // UKM BAHASA
    public function UkmBahasa() 
    {
        $InputBahasa = InputBahasa::WHERE('status','Baru')->where('user','KMH')->OrderBy('id','desc')->get();
        $BahasaValidasi2 = BahasaValidasi::WHERE('status','Revisi')->OrderBy('id','desc')->get();
        return view('admin.UkmBahasa.bahasa', compact('InputBahasa','BahasaValidasi2'));
    }

    public function ArsipBhs()
    {
        $disetujui = BahasaValidasi::where('status','Disetujui')->LIMIT('3')->orderby('id','Desc')->get();
        $direvisi = BahasaValidasi::where('status','Direvisi')->LIMIT('3')->orderby('id','Desc')->get();
        $menunggu = BahasaValidasi::where('status','Menunggu')->LIMIT('3')->orderby('id','Desc')->get();
        return view('admin.UkmBahasa.arsipbhs',compact('disetujui','direvisi','menunggu'));
    }

    public function Pengajuan()
    {
        $pengajuanbhs = InputBahasa::where('status','Baru')->where('user','KMH')->Limit('5')->orderby('id','Desc')->get();
        return view('admin.UkmBahasa.pengajuanBhs',compact('pengajuanbhs'));
    }

    public function Disetujui()
    {
        $disetujui = BahasaValidasi::where('status','Disetujui')->orderby('id','Desc')->get();
        return view('admin.UkmBahasa.disetujui',compact('disetujui'));
    }

    public function Revisi()
    {
        $BahasaValidasi2 = BahasaValidasi::Where('status','Revisi')->OrderBy('id','desc')->get();
        return view('admin.UkmBahasa.revisi', compact('BahasaValidasi2'));
    }

    public function RevisiMsk()
    {
        $revisiMsk = InputBahasa::where('status','Revisi')->where('user','KMH')->orderby('id','desc')->get();
        return view('admin.UkmBahasa.revisiMsk',compact('revisiMsk'));
    }

    public function Menunggu()
    {
        $menunggu = BahasaValidasi::where('status','Menunggu')->orderby('id','DESC')->get();
        return view('admin.UkmBahasa.menunggu',compact('menunggu'));
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // UKM DCFC
    public function indexDcfc()
    {           
        $indexDcfc = InputDcfc::where('status','Baru')->where('user','KMH')->LIMIT('5')->orderBy('id','DESC')->get();
        return view('admin.UkmDcfc.indexDcfc', compact('indexDcfc'));
    }

}
