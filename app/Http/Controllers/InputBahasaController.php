<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Model\InputBahasa;
use App\Model\BahasaValidasi;
use App\Model\BemBahasa;
use Illuminate\Support\Facades\Input;
use File;
class InputBahasaController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:bahasa');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $BahasaValidasi = BahasaValidasi::WHERE('status','Disetujui')->LIMIT('5')->orderby('id','DESC')->LIMIT('5')->get();
        // $BemValidasi = BemBahasa::WHERE('status','Disetujui')->LIMIT('5')->orderby('id','DESC')->LIMIT('5')->get();        
        // return view('bahasa.index', compact('BahasaValidasi','BemValidasi'));
    }

    /**
     * Show the form for creating a new resource.
     * Input Data
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $InputBahasa = InputBahasa::all();
        return view('bahasa.input', compact('InputBahasa'));
    }

    public function KirimKmh()
    {
        $InputBahasaKmh = InputBahasa::all();
        return view('bahasa.inputKmh', compact('InputBahasaKmh'));
    }

    public function KirimValKmh()
    {
        $InputBahasaValKmh = InputBahasa::all();
        return view('bahasa.inputBhsKmh', compact('InputBahasaValKmh'));
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
        'user' => 'required|min:2',
        'status' => 'required|min:2',
            ]);

        $uploadedFile = $request->file('file');        
        $path = $uploadedFile->store('public/files');
        $InputBahasa = InputBahasa::create([
        'title' => $uploadedFile->getClientOriginalName(),
        'user' => $request->user,
        'status' => $request->status,
        'filename' => $path
    ]);

        return redirect()->route('bahasa.arsip');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $InputValidasiBemRev = BemBahasa::findOrFail($id);
        return view('bahasa.edit',compact('InputValidasiBemRev'));
    }

    public function editKmh($id)
    {
        $InputValidasiBemAcc = BemBahasa::findOrFail($id);
        return view('bahasa.inputKmh',compact('InputValidasiBemAcc'));
    }

    public function editValKmh($id)
    {
        $EditValKmh = BahasaValidasi::findOrFail($id);
        return view('bahasa.inputBhsKmh',compact('EditValKmh'));
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
        $InputBahasa = InputBahasa::findOrFail($id);
        Storage::delete($InputBahasa->filename);
        $InputBahasa->delete();
        return redirect()->route('bahasa.arsip');
    }



    // Download file //
 
// Unduh BEM
   public function unduhBem(BemBahasa $unduhBem)
    {
        return Storage::download($unduhBem->filename, $unduhBem->title);
    }

// Unduh Bahasa
    public function unduhvalidasi(BahasaValidasi $BahasaValidasi)
    {
        return Storage::download($BahasaValidasi->filename, $BahasaValidasi->title);
    }

    public function download(InputBahasa $bahasa)
    {
        return Storage::download($bahasa->filename, $bahasa->title);
    }

    public function unduh(BahasaValidasi $validasi)
    {
        return Storage::download($validasi->filename, $validasi->title);
    }

}
