<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\KmhDcfc;
use App\Model\InputDcfc;
use Storage;
class KmhDcfcController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KmhDcfcAcc = KmhDcfc::where('status','Disetujui')->Limit('5')->orderby('id','Desc')->get();
        $KmhDcfcRev = KmhDcfc::where('status','Revisi')->Limit('5')->orderby('id','Desc')->get();
        $KmhDcfcDelay = KmhDcfc::where('status','Menunggu')->Limit('5')->orderby('id','Desc')->get();
        $KmhDcfcRevMasuk = InputDcfc::where('status','Revisi')->where('user','KMH')->Limit('5')->orderby('id','Desc')->get();
        return view('admin.UkmDcfc.dcfcvalidasi', compact('KmhDcfcAcc','KmhDcfcRev','KmhDcfcDelay','KmhDcfcRevMasuk'));
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
        $this->validate($request, [
        'title' => 'nullable|max:100',
        'status' => 'required|min:3',
        'file' => 'required|file|max:2000'
            ]);   

        $uploadedFile = $request->file('file');        
        $path = $uploadedFile->store('public/validasi');
        $KmhDcfc = KmhDcfc::create([
        'title' => $request->title ?? $uploadedFile->getClientOriginalName(),
        'status' => $request->status,
        'filename' => $path
    ]);

            return redirect()->route('validasikmh.index');
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
        $kmhdcfc = InputDcfc::findOrFail($id);
        return view('admin.UkmDcfc.editKmh',compact('kmhdcfc'));
    }

    public function editDcfc($id)
    {
        $UpdateDcfc = InputDcfc::findorfail($id);
        return view('admin.UkmDcfc.updateDcfc', compact('UpdateDcfc'));
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
        $this->validate($request, [
        'title' => 'nullable|max:100',
        'status' => 'required|min:3',
        'file' => 'required|file|max:2000'
            ]); 

        $UpdateDcfc = KmhDcfc::findorfail($id);
        $UpdateDcfc->update($request->all());
        return redirect()->route('validasikmh.index');

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

    public function unduhDcfcKmh(InputDcfc $unduhDcfcKmh)
    {
       return storage::download($unduhDcfcKmh->filename, $unduhDcfcKmh->title);
    }

    public function DownloadKmhDcfc(KmhDcfc $DownloadKmhDcfc)
    {
        return storage::download($DownloadKmhDcfc->filename, $DownloadKmhDcfc->title);
    }
}
