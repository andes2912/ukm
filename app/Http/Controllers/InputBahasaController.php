<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Model\InputBahasa;
use App\Model\BahasaValidasi;
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
        $BahasaValidasi = BahasaValidasi::WHERE('status','Disetujui')->orderby('id','DESC')->get();        
        return view('bahasa.index', compact('BahasaValidasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $InputBahasa = InputBahasa::all();
        return view('bahasa.input', compact('InputBahasa'));
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
        'file' => 'required|file|max:2000'
            ]);

        $uploadedFile = $request->file('file');        
        $path = $uploadedFile->store('public/files');
        $InputBahasa = InputBahasa::create([
        'title' => $uploadedFile->getClientOriginalName(),
        'filename' => $path
    ]);

        return redirect()->route('bahasa.all');
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
        $InputBahasa = InputBahasa::findOrFail($id);
        Storage::delete($InputBahasa->filename);
        $InputBahasa->delete();
        return redirect()->route('bahasa.all');
    }

    public function download(InputBahasa $bahasa)
    {
        return Storage::download($bahasa->filename, $bahasa->title);
    }

        public function all()
    {
        $InputBahasa = InputBahasa::orderby('id','DESC')->get();
        return view('bahasa.all', compact('InputBahasa'));
    }
}
