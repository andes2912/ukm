<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\InputPsdj;
use App\Model\BemPsdj;
use App\Model\KmhPsdj;

class InputPsdjController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:psdj');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inputBem = InputPsdj::all();
        return view('psdj.inputBem', compact('inputBem'));
    }

    public function createKmh()
    {
        $inputKmh = InputPsdj::all();
        return view('psdj.inputKmh',compact('inputKmh'));
    }

    public function creatKmhRev()
    {
        $inputKmhRev = InputPsdj::all();
        return view('psdj.inputKmhRev', compact('inputKmhRev'));
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
            'user'  => 'required|min:2',
            'status'=> 'required|min:2'
        ]);

        $uploadFile = $request->file('file');
        $path       = $uploadFile->store('public/files');
        $inputPsdj  = InputPsdj::create([
            'title' => $uploadFile->getClientOriginalName(),
            'user'  => $request->user,
            'status'=> $request->status,
            'filename' => $path        
        ]);

        return redirect()->route('psdj.home');
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
        $InputBemRev = BemPsdj::findorfail($id);
        return view('psdj.inputBemRev', compact('InputBemRev'));
    }

    public function editKmh($id)
    {
        $inputKmh = BemPsdj::findorfail($id);
        return view('psdj.inputKmh', compact('inputKmh'));
    }

    public function editKmhRev($id)
    {
        $inputKmhRev = KmhPsdj::findorfail($id);
        return view('psdj.inputKmhRev', compact('inputKmhRev'));
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
}
