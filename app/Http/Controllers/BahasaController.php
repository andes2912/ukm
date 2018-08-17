<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BahasaValidasi;
use App\Model\InputBahasa;
use App\Model\BemBahasa;
use App\Model\News;
class BahasaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:bahasa');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = news::orderby('id','DESC')->get();
        return view('bahasa.home', compact('news'));
    }

    public function validasi()
    {
        $BahasaValidasi = BahasaValidasi::WHERE('status','Disetujui')->orderby('id','DESC')->LIMIT('5')->get();
        $EditValKmh = BahasaValidasi::WHERE('status','Revisi')->orderby('id','DESC')->LIMIT('5')->get();
        $BahasaValidasi3 = BahasaValidasi::WHERE('status','Menunggu')->orderby('id','DESC')->LIMIT('5')->get();
        $InputBhsRev = InputBahasa::where('user','KMH')->where('status','Revisi')->orderBy('id','Desc')->LIMIT('5')->get();
        return view('bahasa.validasi', compact('BahasaValidasi','EditValKmh','BahasaValidasi3','InputBhsRev'));
    }

    public function validasiBem()
    {
        $validasiBemRev = InputBahasa::Where('user','BEM')->Where('status','Revisi')->LIMIT('5')->get();
        $InputValidasiBemRev = BemBahasa::Where('status','Revisi')->LIMIT('5')->get();
        $InputValidasiBemAcc = BemBahasa::Where('status','Disetujui')->LIMIT('5')->get();
        $InputValidasiBemDelay = BemBahasa::Where('status','Menunggu')->LIMIT('5')->get();
        return view('bahasa.validasiBem', compact('validasiBemRev','InputValidasiBemRev', 'InputValidasiBemAcc','InputValidasiBemDelay'));
    }

    public function all()
    {
        $InputBahasaBemNew = InputBahasa::Where('user','BEM')->Where('status','Baru')->orderby('id','DESC')->LIMIT('3')->get();
        $InputBahasaKmhNew = InputBahasa::where('user','KMH')->where('status','Baru')->orderBy('id','Desc')->LIMIT('3')->get();
        $InputBahasaRev = InputBahasa::Where('status','Revisi')->orderby('id','DESC')->LIMIT('3')->get();
        return view('bahasa.all', compact('InputBahasaBemNew','InputBahasaRev','InputBahasaKmhNew'));
    }


        // Validasi revisi bahasa
    public function revisiBhs()
    {
        $RevisiBhs = InputBahasa::WHERE('status','revisi')->orderBy('id','Desc')->get();
        return view('bahasa.revisiBhs', compact('RevisiBhs'));
    }

        // Pengajuan untuk BEM
    public function allBem()
    {
        $allBem = InputBahasa::Where('status','Baru')->where('user','BEM')->orderBy('id','Desc')->get();
        return view('bahasa.allbem', compact('allBem'));
    }    

          // Pengajuan untuk BEM
    public function allKmh()
    {
        $allKmh = InputBahasa::Where('status','Baru')->where('user','KMH')->orderBy('id','Desc')->get();
        return view('bahasa.allkmh', compact('allKmh'));
    }    

}
