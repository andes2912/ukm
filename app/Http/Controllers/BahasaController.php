<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BahasaValidasi;
use App\Model\News;
class BahasaController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = news::orderby('id','DESC')->get();
        return view('bahasa.home', compact('news'));
    }

    public function validasi()
    {
        $BahasaValidasi = BahasaValidasi::WHERE('status','Disetujui')->orderby('id','DESC')->get();
        $BahasaValidasi2 = BahasaValidasi::WHERE('status','Revisi')->orderby('id','DESC')->get();
        $BahasaValidasi3 = BahasaValidasi::WHERE('status','Menunggu')->orderby('id','DESC')->get();
        return view('bahasa.validasi', compact('BahasaValidasi','BahasaValidasi2','BahasaValidasi3'));
    }

        // Validasi revisi bahasa
        public function inputvalidasi()
    {
        $BahasaValidasi = BahasaValidasi::WHERE('status','menunggu')->get();
        return view('bahasa.inputvalidasi', compact('BahasaValidasi'));
    }

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
                return redirect()->route('bahasa.validasi');
    }
}
