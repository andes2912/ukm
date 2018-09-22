<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\InputBahasa;
use App\Model\BahasaValidasi;
use App\Model\InputDcfc;
use App\Model\KmhDcfc;
use App\Model\InputMusik;
use App\Model\InputPsdj;
use App\Model\KmhMusik;
use App\Model\KmhPsdj;
use App\Model\News;

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
        $news = News::orderby('id','desc')->get();
        return view('admin.home',compact('news'));
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
        $direvisi = BahasaValidasi::where('status','Revisi')->LIMIT('3')->orderby('id','Desc')->get();
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

    public function ArsipDcfc()
    {
        $disetujui = KmhDcfc::where('status','Disetujui')->LIMIT('3')->orderby('id','Desc')->get();
        $direvisi = KmhDcfc::where('status','Revisi')->LIMIT('3')->orderby('id','Desc')->get();
        $menunggu = KmhDcfc::where('status','Menunggu')->LIMIT('3')->orderby('id','Desc')->get();
        return view('admin.UkmDcfc.arsipDcfc',compact('disetujui','direvisi','menunggu'));
    }

    public function pengajuanDcfc()
    {
        $pengajuanDcfc = InputDcfc::where('user','KMH')->where('status','Baru')->LIMIT('5')->orderby('id','desc')->get();
        return view('admin.UkmDcfc.pengajuanDcfc', compact('pengajuanDcfc'));
    }

    public function revisiMasuk()
    {
        $revisimasuk = InputDcfc::where('user','KMH')->where('status','Revisi')->LIMIT('5')->orderby('id','DESC')->get();
        return view('admin.UkmDcfc.revisiMasuk', compact('revisimasuk'));
    }

    public function revisiKeluar()
    {
        $revisikeluar = KmhDcfc::where('status','Revisi')->LIMIT('5')->orderby('id','Desc')->get();
        return view('admin.UkmDcfc.revisiKeluar', compact('revisikeluar'));
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // UKM Musik
    public function indexMusik()
    {           
        $indexMusik = InputMusik::where('status','Baru')->where('user','KMH')->LIMIT('5')->orderBy('id','DESC')->get();
        return view('admin.UkmMusik.indexMusik', compact('indexMusik'));
    }

    public function pengajuanmusik()
    {
        $pengajuanmusik = InputMusik::where('user','KMH')->where('status','Baru')->LIMIT('5')->orderby('id','desc')->get();
        return view('admin.UkmMusik.pengajuanMusik', compact('pengajuanmusik'));
    }

    public function revisiKeluarMusik()
    {
        $revisiKeluarMusik = KmhMusik::where('status','Revisi')->LIMIT('5')->orderby('id','Desc')->get();
        return view('admin.UkmMusik.revisiKeluar', compact('revisiKeluarMusik'));
    }

    public function revisiMasukMusik()
    {
        $revisiMasukMusik = InputMusik::where('user','KMH')->where('status','Revisi')->LIMIT('5')->orderby('id','Desc')->get();
        return view('admin.UkmMusik.revisiMasuk', compact('revisiMasukMusik'));
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // UKM Psdj
    public function indexPsdj()
    {           
        $indexPsdj = InputPsdj::where('status','Baru')->where('user','KMH')->LIMIT('5')->orderBy('id','DESC')->get();
        return view('admin.UkmPsdj.indexPsdj', compact('indexPsdj'));
    } 

    public function pengajuanPsdj()
    {
        $pengajuanPsdj = InputPsdj::where('status','Baru')->where('user','KMH')->orderby('id','desc')->get();
        return view('admin.UkmPsdj.pengajuanPsdj', compact('pengajuanPsdj'));
    }

    public function revisikeluarPsdj()
    {
        $revisiKeluar = KmhPsdj::where('status','Revisi')->orderby('id','desc')->get();
        return view('admin.UkmPsdj.revisikeluar', compact('revisiKeluar'));
    }

    public function revisimasukPsdj()
    {
        $revisimasukPsdj = InputPsdj::where('user','KMH')->where('status','Revisi')->orderby('id','desc')->get();
        return view('admin.UkmPsdj.revisimasuk', compact('revisimasukPsdj'));
    }

}
