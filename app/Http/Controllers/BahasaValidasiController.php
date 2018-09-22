<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BahasaValidasi;
use App\Model\InputBahasa;
use Illuminate\Support\Facades\Input;
use Storage;

class BahasaValidasiController extends Controller
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
        $BahasaValidasiAcc = BahasaValidasi::WHERE('status','Disetujui')->orderby('id','DESC')->LIMIT('3')->get();
        $BahasaValidasiRev = BahasaValidasi::Where('status','Revisi')->OrderBy('id','desc')->LIMIT('3')->get();
        $BahasaValidasiDelay = BahasaValidasi::WHERE('status','Menunggu')->orderby('id','DESC')->LIMIT('3')->get();
        $BahasaKmhRev = InputBahasa::WHERE('status','Revisi')->orderby('id','DESC')->LIMIT('5')->get();
       
        return view('admin.UkmBahasa.bahasavalidasi', compact('BahasaValidasiAcc','BahasaValidasiRev','BahasaValidasiDelay','BahasaKmhRev'));  
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
        $BahasaValidasi = BahasaValidasi::create([
        'title' => $request->title ?? $uploadedFile->getClientOriginalName(),
        'status' => $request->status,
        'filename' => $path
    ]);

            return redirect()->route('validasi.index');
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
        $InputBahasa1 = InputBahasa::FindOrFail($id);
        return view('admin.UkmBahasa.edit', compact('InputBahasa1'));
    }

    public function editBhs($id)
    {
        $UpdateBhs = InputBahasa::findorfail($id);
        return view('admin.UkmBahasa.updateBhs', compact('UpdateBhs'));
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

        $UpdateBhs = BahasaValidasi::findorfail($id);
        $UpdateBhs->update($request->all());
        return redirect()->route('validasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $BahasaValidasi = BahasaValidasi::findOrFail($id);
        Storage::delete($BahasaValidasi->filename);
        $BahasaValidasi->delete();
        
        return redirect()->route('admin.UkmBahasa.arsipbhs');  
    }
    

        public function download(BahasaValidasi $validasi)
    {
        return Storage::download($validasi->filename, $validasi->title);
    }
    
        public function unduh(InputBahasa $bahasa)
    {
        return Storage::download($bahasa->filename, $bahasa->title);
    }

    
}
