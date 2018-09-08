<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Model\InputDcfc;
use App\Model\BemDcfc;
use App\Model\KmhDcfc;
use Illuminate\Http\Request;

class InputDcfcController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:dcfc');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $inputdcfc = InputDcfc::all();
        // return view('dcfc.index',compact('inputdcfc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inputdcfcBem = InputDcfc::all();
        return view('dcfc.inputbem',compact('inputdcfcBem'));
    }

    public function createKmh()
    {
        $inputdcfcBemAcc = InputDcfc::all();
        return view('dcfc.inputKmh',compact('inputdcfcBemAcc'));
    }

    public function createValKmh()
    {
        $inputdcfcValKmh = InputDcfc::all();
        return view('dcfc.inputKmhVal',compact('inputdcfcValKmh'));
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
        $InputDcfc = InputDcfc::create([
        'title' => $uploadedFile->getClientOriginalName(),
        'user' => $request->user,
        'status' => $request->status,
        'filename' => $path
    ]);

        return redirect()->route('dcfc.home');
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
        $InputBemVal = BemDcfc::findOrFail($id);
        return view('dcfc.InputBemVal',compact('InputBemVal'));
    }

    public function editKmh($id)
    {
        $inputKmh = BemDcfc::findOrFail($id);
        return view('dcfc.inputKmh',compact('inputKmh'));
    }

     public function editValKmh($id)
    {
        $inputKmhVal = KmhDcfc::findOrFail($id);
        return view('dcfc.inputKmhVal',compact('inputKmhVal'));
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
        $InputDcfc = InputDcfc::findOrFail($id);
        Storage::delete($InputDcfc->filename);
        $InputDcfc->delete();
        return redirect()->route('dcfc.arsip');
    }

// Controller Download

    // BEM
    public function unduhBemDcfc(BemDcfc $unduhBemDcfc)
    {
        return Storage::download($unduhBemDcfc->filename, $unduhBemDcfc->title);
    }

    // KMH
    public function unduhKmhDcfc(KmhDcfc $unduhKmhDcfc)
    {
        return Storage::download($unduhKmhDcfc->filename, $unduhKmhDcfc->title);
    }
}
