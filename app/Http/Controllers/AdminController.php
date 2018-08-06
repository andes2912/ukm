<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\InputBahasa;
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

    public function UkmBahasa() 
    {
        $InputBahasa = InputBahasa::orderBy('id','DESC')->get();
        return view('admin.UkmBahasa.bahasa', compact('InputBahasa'));
    }

    public function UkmBahasaValidasi() 
    {
        $InputBahasas = InputBahasa::orderBy('id','DESC')->get();       
        return view('admin.UkmBahasa.bahasavalidasi', compact('InputBahasas'));       
    }

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
