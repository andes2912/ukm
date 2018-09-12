<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\InputMusik;
use App\Model\BemMusik;
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
        return view('musik.home');
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
        $InputMusikSend = InputMusik::where('user','BEM')->where('status','Baru')->Limit('5')->orderBy('id','Desc')->get();
        return view('musik.validasiBem', compact('BemMusikAcc','BemMusikRev','BemMusikDelay','InputMusikSend'));
    }
}
