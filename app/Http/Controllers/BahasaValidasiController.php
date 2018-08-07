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
        $BahasaValidasi2 = BahasaValidasi::WHERE('status','Revisi')->orderby('id','DESC')->get();
        $BahasaValidasi3 = BahasaValidasi::WHERE('status','Menunggu')->orderby('id','DESC')->get();       
        return view('admin.UkmBahasa.bahasavalidasi', compact('BahasaValidasi','BahasaValidasi2','BahasaValidasi3'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $BahasaValidasi = BahasaValidasi::WHERE('status','menunggu')->get();
        return view('admin.UkmBahasa.input', compact('BahasaValidasi'));
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

            return redirect()->route('inputvalidasi.index');
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
        $BahasaValidasi2 = BahasaValidasi::findOrFail($id);
        Storage::delete($BahasaValidasi2->filename);
        $BahasaValidasi2->delete();
        
        return redirect()->route('inputvalidasi.index');
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
