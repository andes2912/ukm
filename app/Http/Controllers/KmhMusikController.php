<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\KmhMusik;
use App\Model\InputMusik;
use Storage;

class KmhMusikController extends Controller
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
        $KmhMusikAcc        = KmhMusik::where('status','Disetujui')->LIMIT('5')->orderby('id','desc')->get();
        $KmhMusikRevIn      = InputMusik::where('user','KMH')->where('status','Revisi')->LIMIT('5')->orderby('id','desc')->get();
        $KmhMusikDelay      = KmhMusik::where('status','Menunggu')->LIMIT('5')->orderby('id','desc')->get();
        $KmhMusikRevSend    = KmhMusik::where('status','Revisi')->LIMIT('5')->orderby('id','desc')->get();
        return view('admin.UkmMusik.validasiMusik', compact('KmhMusikAcc','KmhMusikRevIn','KmhMusikDelay','KmhMusikRevSend'));
        
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
        $KmhMusik = KmhMusik::create([
        'title' => $request->title ?? $uploadedFile->getClientOriginalName(),
        'status' => $request->status,
        'filename' => $path
        ]);

        return redirect()->route('validasikmhMusik.index');
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
        $EditMusik = InputMusik::findOrFail($id);
        return view('admin.UkmMusik.editMusik', compact('EditMusik'));
    }

    public function editMusik($id)
    {
        $UpdateMusik = InputMusik::findorfail($id);
        return view('admin.UkmMusik.updateMusik', compact('UpdateMusik'));
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

        $UpdateMusik = KmhMusik::findorfail($id);
        $UpdateMusik->update($request->all());

        return redirect()->route('validasikmhMusik.index');
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

    public function KmhMusikIn(InputMusik $KmhMusikIn)
    {
        return storage::download($KmhMusikIn->filename, $KmhMusikIn->title);
    }

    public function KmhMusikOut(KmhMusik $KmhMusikOut)
    {
        return storage::download($KmhMusikOut->filename, $KmhMusikOut->title);
    }
}
