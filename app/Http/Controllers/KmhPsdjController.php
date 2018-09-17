<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\KmhPsdj;
use App\Model\InputPsdj;
use Storage;

class KmhPsdjController extends Controller
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

        $acckmh = KmhPsdj::where('status','Disetujui')->LIMIT('5')->orderby('id','desc')->get();
        $revkmh = KmhPsdj::where('status','Revisi')->LIMIT('5')->orderby('id','desc')->get();
        $delaykmh = KmhPsdj::where('status','Menunggu')->LIMIT('5')->orderby('id','desc')->get();
        $revInkmh = InputPsdj::where('status','Revisi')->LIMIT('5')->orderby('id','desc')->get();
        return view('admin.UkmPsdj.validasiPsdj', compact('acckmh','revkmh','delaykmh','revInkmh'));
    
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
            'status' => 'required|min:2'
        ]);

        $uploadFile = $request->file('file');
        $path       = $uploadFile->store('public/validasi');
        $KmhPsdj    = KmhPsdj::create([
            'title' =>  $request->title ?? $uploadFile->getClientOriginalName(),
            'status'=>  $request->status,
            'filename' => $path
        ]);

        return redirect()->route('admin.UkmPsdj.indexPsdj');
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
        $editPsdj = InputPsdj::findorfail($id);
        return view('admin.UkmPsdj.editPsdj', compact('editPsdj'));
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

    public function DownloadKmhPsdj(InputPsdj $DownloadKmhPsdj)
    {
        return storage::download($DownloadKmhPsdj->filename, $DownloadKmhPsdj->title);
    }

    public function DownloadKmhIn(KmhPsdj $DownloadKmhIn)
    {
        return storage::download($DownloadKmhIn->filename, $DownloadKmhIn->title);
    }
}
