<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\InputPsdj;
use App\Model\BemPsdj;

class BemPsdjController extends Controller
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
        $BemPsdjAcc = BemPsdj::where('status','Disetujui')->Limit('5')->orderby('id','desc')->get();
        $BemPsdjRev = BemPsdj::where('status','Revisi')->Limit('5')->orderby('id','desc')->get();
        $BemPsdjDelay = BemPsdj::where('status','Menunggu')->Limit('5')->orderby('id','desc')->get();
        $BemPsdjRevIn = InputPsdj::where('status','Revisi')->Limit('5')->orderby('id','desc')->get();
        return view('bem.psdj.validasipsdj', compact('BemPsdjAcc','BemPsdjRev','BemPsdjDelay','BemPsdjRevIn'));
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
        $this->validate($request,[
            'title' => 'nullable|max:100',
            'status' => 'required|min:2',
        ]);

        $uploadFile = $request->file('file');
        $path = $uploadFile->store('public/validasi');
        $BemPsdj = BemPsdj::create([
            'title' => $request->title ?? $uploadFile->GetClientOriginalName(),
            'status' => $request->status,
            'filename' => $path
        ]);

        return redirect()->route('bem.psdj.index');
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
        $BemPsdjEdit = InputPsdj::findorfail($id);
        return view('bem.psdj.InputValPsdj', compact('BemPsdjEdit'));
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
}
