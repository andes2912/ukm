<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\InputMusik;
use App\Model\BemMusik;
use App\Model\KmhMusik;
use App\Model\News;

class MusikController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:musik');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id','DESC')->get();
        return view('musik.home', compact('news'));
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

    public function ValidasiBem()
    {
        $BemMusikAcc    = BemMusik::where('status','Disetujui')->LIMIT('5')->orderBy('id','Desc')->get();
        $BemMusikRev    = BemMusik::where('status','Revisi')->LIMIT('5')->orderBy('id','Desc')->get();
        $BemMusikDelay  = BemMusik::where('status','Menunggu')->LIMIT('5')->orderBy('id','Desc')->get();
        $InputMusikSend = InputMusik::where('user','BEM')->where('status','Revisi')->Limit('5')->orderBy('id','Desc')->get();
        return view('musik.validasiBem', compact('BemMusikAcc','BemMusikRev','BemMusikDelay','InputMusikSend'));
    }

    public function validasikmh()
    {
        $KmhMusikAcc = KmhMusik::where('status','Disetujui')->LIMIT('5')->orderBy('id','Desc')->get();
        $KmhMusikRev = KmhMusik::where('status','Revisi')->LIMIT('5')->orderBy('id','Desc')->get();
        $KmhMusikDelay = KmhMusik::where('status','Menunggu')->LIMIT('5')->orderBy('id','Desc')->get();
        $KmhMusikSend = InputMusik::where('status','Revisi')->where('user','KMH')->LIMIT('5')->orderBy('id','Desc')->get();

        return view('musik.validasiKmh', compact('KmhMusikAcc','KmhMusikRev','KmhMusikDelay','KmhMusikSend'));
    }

// Controller Arsip
    public function arsip()
    {
        $arsipBem = InputMusik::where('status','Baru')->where('user','BEM')->LIMIT('5')->orderby('id','desc')->get();
        $arsipKmh = InputMusik::where('status','Baru')->where('user','KMH')->LIMIT('5')->orderby('id','desc')->get();
        return view('musik.arsip', compact('arsipBem','arsipKmh'));
    }

    public function pengajuanBem()
    {
        $pengajuanBem = InputMusik::where('status','Baru')->where('user','BEM')->orderby('id','desc')->get();
        return view('musik.pengajuanBem', compact('pengajuanBem'));
    }

    public function pengajuanKmh()
    {
        $pengajuanKmh = InputMusik::where('status','Baru')->where('user','KMH')->orderby('id','desc')->get();
        return view('musik.pengajuanKmh', compact('pengajuanKmh'));
    }

    public function revisiBem()
    {
        $revisiBem = InputMusik::where('status','Revisi')->where('user','BEM')->orderby('id','desc')->get();
        return view('musik.revisiBem', compact('revisiBem'));
    }

    public function revisiKmh()
    {
        $revisiKmh = InputMusik::where('status','Revisi')->where('user','KMH')->orderby('id','desc')->get();
        return view('musik.revisiKmh', compact('revisiKmh'));
    }

    public function disetujui()
    {
        $disetujuiBem = BemMusik::where('status','Disetujui')->LIMIT('5')->orderby('id','desc')->get();
        $disetujuiKmh = KmhMusik::where('status','Disetujui')->LIMIT('5')->orderby('id','desc')->get();
        return view('musik.disetujui', compact('disetujuiBem','disetujuiKmh'));
    }

    public function disetujuiBem()
    {
        $disetujuiBem = BemMusik::where('status','Disetujui')->orderby('id','desc')->get();
        return view('musik.disetujuiBem', compact('disetujuiBem'));
    }

    public function disetujuiKmh()
    {
        $disetujuiKmh = KmhMusik::where('status','Disetujui')->orderby('id','desc')->get();
        return view('musik.disetujuiKmh', compact('disetujuiKmh'));
    }
}
