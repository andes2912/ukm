<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Model\InputDcfc;
use App\Model\BemDcfc;
class BemDcfcController extends Controller
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
        $InputDcfcMasuk = InputDcfc::Where('status','Baru')->OrderBy('id','Desc')->get();
        $InputDcfcRev = InputDcfc::where('status','Revisi')->orderBy('id', 'Desc')->get();
        $BemDcfcAcc = BemDcfc::where('status','Disetujui')->orderBy('id', 'Desc')->get();
        $BemDcfcRev = BemDcfc::where('status','Revisi')->orderBy('id', 'Desc')->get();
        $BemDcfcDelay = BemDcfc::where('status','Menunggu')->orderBy('id', 'Desc')->get();

        return view('bem.dcfc.validasidcfc', compact( 'InputDcfcMasuk','InputDcfcRev','BemDcfcAcc', 
                    'BemDcfcRev','BemDcfcDelay'));
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
        'status' => 'required|min:2',
            ]);

        $uploadedFile = $request->file('file');        
        $path = $uploadedFile->store('public/validasi');
        $BemDcfc = BemDcfc::create([
        'title' => $request->title ?? $uploadedFile->getClientOriginalName(),
        'status' => $request->status,
        'filename' => $path
    ]);
        return redirect()->route('validasidcfc.index');
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
        $InputDcfc = InputDcfc::findOrFail($id);
        return view('bem.dcfc.InputValDcfc', compact('InputDcfc'));
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
        $BemDcfc = BemDcfc::findOrFail($id);
        Storage::delete($BemDcfc->filename);
        $BemDcfc->delete();
        return redirect()->route('dcfc.arsip');
    }

       public function unduhDcfc(InputDcfc $unduhDcfc)
    {
        return Storage::download($unduhDcfc->filename, $unduhDcfc->title);
    }

       public function unduhBemDcfc(BemDcfc $unduhBemDcfc)
    {
        return Storage::download($unduhBemDcfc->filename, $unduhBemDcfc->title);
    }
}
