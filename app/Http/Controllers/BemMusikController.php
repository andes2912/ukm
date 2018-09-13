<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\InputMusik;
use App\Model\BemMusik;
class BemMusikController extends Controller
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
        $BemMusikAcc = BemMusik::where('status','Disetujui')->orderBy('id','Desc')->LIMIT('5')->get();
        $BemMusikRev = BemMusik::where('status','Revisi')->orderBy('id','Desc')->LIMIT('5')->get();
        $BemMusikDelay = BemMusik::where('status','Menunggu')->orderBy('id','Desc')->LIMIT('5')->get();
        $BemMusikMasuk = InputMusik::where('status','Revisi')->orderBy('id','Desc')->LIMIT('5')->get();
        return view('bem.musik.validasimusik',compact('BemMusikAcc','BemMusikRev','BemMusikDelay','BemMusikMasuk'));
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
        $BemMusik = BemMusik::create([
            'title' => $request->title ?? $uploadFile->GetClientOriginalName(),
            'status' => $request->status,
            'filename' => $path
        ]);

        return redirect()->route('bem.musik.index');
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
        $InputMusik = InputMusik::findOrFail($id);
        return view('bem.musik.inputValMusik',compact('InputMusik'));
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
