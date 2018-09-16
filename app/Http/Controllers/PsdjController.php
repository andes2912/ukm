<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\News;
use App\Model\InputPsdj;
use App\Model\BemPsdj;
use App\Model\KmhPsdj;

class PsdjController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:psdj');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderby('id','Desc')->get();
        return view('psdj.home', compact('news'));
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

    // Controller Validasi BEM
    public function validasiBem()
    {
        $PsdjBemAcc = BemPsdj::where('status','Disetujui')->Limit('5')->orderby('id','Desc')->get();
        $PsdjBemRev = BemPsdj::where('status','Revisi')->Limit('5')->orderby('id','Desc')->get();
        $PsdjBemDelay = BemPsdj::where('status','Menunggu')->Limit('5')->orderby('id','Desc')->get();
        $PsdjBemRevSend = InputPsdj::where('status','Revisi')->Limit('5')->orderby('id','Desc')->get();
        return view('psdj.validasiBem', compact('PsdjBemAcc','PsdjBemRev','PsdjBemDelay','PsdjBemRevSend'));
    }

    // Controller Validasi KMH
    public function validasiKmh()
    {
        $PsdjKmhAcc = KmhPsdj::where('status','Disetujui')->Limit('5')->orderby('id','Desc')->get();
        $PsdjKmhRev = KmhPsdj::where('status','Revisi')->Limit('5')->orderby('id','Desc')->get();
        $PsdjKmhDelay = KmhPsdj::where('status','Menunggu')->Limit('5')->orderby('id','Desc')->get();
        $PsdjKmhRevSend = InputPsdj::where('status','Revisi')->Limit('5')->orderby('id','Desc')->get();
        return view('psdj.validasiKmh', compact('PsdjKmhAcc','PsdjKmhRev','PsdjKmhDelay','PsdjKmhRevSend'));
    }
}
