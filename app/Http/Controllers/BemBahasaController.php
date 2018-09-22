<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Model\BemBahasa;
use App\Model\InputBahasa;
use App\Model\BahasaValidasi;
use File;
use Illuminate\Support\Facades\Storage;

class BemBahasaController extends Controller
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
        $InputBhsMasuk = InputBahasa::Where('status','Baru')->OrderBy('id','Desc')->get();
        $InputBhsRev = InputBahasa::where('status','Revisi')->orderBy('id', 'Desc')->get();
        $BemBahasaAcc = BemBahasa::where('status','Disetujui')->orderBy('id', 'Desc')->get();
        $BemBahasaRev = BemBahasa::where('status','Revisi')->orderBy('id', 'Desc')->get();
        $BemBahasaDelay = BemBahasa::where('status','Menunggu')->orderBy('id', 'Desc')->get();

        return view('bem.bahasa.validasi', compact( 'InputBhsMasuk','InputBhsRev','BemBahasaMasuk', 'BemBahasaRev','BemBahasaAcc','BemBahasaDelay'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $InputBahasa = InputBahasa::all();
        // return view('bem.bahasa.InputValBhs', compact('InputBahasa'));
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
        'status' => 'required|min:2',
            ]);

        $uploadedFile = $request->file('file');        
        $path = $uploadedFile->store('public/validasi');
        $BemBahasa = BemBahasa::create([
        'title' => $request->title ?? $uploadedFile->getClientOriginalName(),
        'status' => $request->status,
        'filename' => $path
    ]);
        return redirect()->route('bahasavalidasi.index');
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
        $InputBahasa = InputBahasa::findOrFail($id);
        return view('bem.bahasa.InputValBhs', compact('InputBahasa'));
    }

    public function editBhs($id)
    {
        $UpdateBhs = InputBahasa::findorfail($id);
        return view('bem.bahasa.updateBhs', compact('UpdateBhs'));
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
        'status' => 'required|min:2',
            ]);

        $UpdateBhs = BemBahasa::findorfail($id);
        $UpdateBhs->update($request->all());
        return redirect()->route('bahasavalidasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $BemBahasa = BemBahasa::findOrFail($id);
        Storage::delete($BemBahasa->filename);
        $BemBahasa->delete();
        
        return redirect()->route('bem.Bahasa.arsipBhs');
    }

      public function unduhBem(BemBahasa $unduhBem)
    {
        return Storage::download($unduhBem->filename, $unduhBem->title);
    }

       public function unduhBhs(InputBahasa $unduhBhs)
    {
        return Storage::download($unduhBhs->filename, $unduhBhs->title);
    }
}
