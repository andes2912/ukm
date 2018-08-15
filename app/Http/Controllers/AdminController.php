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

    public function Revisi()
    {
        $BahasaValidasi2 = BahasaValidasi::Where('status','Revisi')->OrderBy('id','desc')->get();
        return view('admin.UkmBahasa.revisi', compact('BahasaValidasi2'));
    }

    // public function UkmBahasaValidasi() 
    // {
    //     $InputBahasas = InputBahasa::orderBy('id','DESC')->get();       
    //     return view('admin.UkmBahasa.bahasavalidasi', compact('InputBahasas'));       
    // }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // UKM DCFC
    public function UkmDcfc()
    {           
        $InputDcfc = InputDcfc::orderBy('id','DESC')->get();
        return view('admin.UkmDcfc.dcfc', compact('InputDcfc'));
    }

    public function UkmDcfcValidasi() 
    {
        $InputDcfc = InputDcfc::orderBy('id','DESC')->get();       
        return view('admin.UkmDcfc.dcfc', compact('InputDcfc'));       
    }
}
