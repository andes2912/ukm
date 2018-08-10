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
        $BahasaValidasi = BahasaValidasi::WHERE('status','Disetujui')->orderby('id','DESC')->get();
        $InputBahasa1 = InputBahasa::WHERE('status','Revisi')->orderby('id','DESC')->get();
        $BahasaValidasi3 = BahasaValidasi::WHERE('status','Menunggu')->orderby('id','DESC')->get();       
        return view('admin.UkmBahasa.bahasavalidasi', compact('BahasaValidasi','InputBahasa1','BahasaValidasi3'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $BahasaValidasi = BahasaValidasi::WHERE('status','menunggu')->get();
        return view('admin.UkmBahasa.edit', compact('BahasaValidasi'));
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

            return redirect()->route('admin.UkmBahasa.bahasa');
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
        $BahasaValidasi2 = BahasaValidasi::findOrFail($id);
        Storage::delete($BahasaValidasi2->filename);
        $BahasaValidasi2->delete();
        
        return redirect()->route('admin.UkmBahasa.bahasa');
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
