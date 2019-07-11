<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Eskul;
use DataTables;

class EskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.eskul.index');
    }

    public function eskulDatatables()
    {
        $eskul = Eskul::All();
        return Datatables::of($eskul)->addIndexColumn()
                                     ->addColumn('action', 'admin.eskul.action')
                                     ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.eskul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => 'Form ini harus diisi.',
            'max' => 'Maksimal form ini diisi 50 karakter.',
            'alpha' => 'Form ini hanya bisi diisi oleh Teks.'
        ];
        $this->validate($request, [
            'nama' => 'required|alpha|max:50',
            'pembimbing' => 'required|alpha|max:50',
            'jadwal' => 'required'
        ], $message);

        $eskul = new Eskul;
        $eskul->nama = $request->nama;
        $eskul->pembimbing = $request->pembimbing;
        $eskul->jadwal = $request->jadwal;
        $eskul->save();

        return redirect()->route('eskul');   
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
        $eskul = Eskul::find($id);
        return view('admin.eskul.update', compact('eskul'));
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
         $message = [
            'required' => 'Form ini harus diisi.',
            'max' => 'Maksimal form ini diisi 50 karakter.',
            'alpha' => 'Form ini hanya bisi diisi oleh Teks.'
        ];
        $this->validate($request, [
            'nama' => 'required|alpha|max:50',
            'pembimbing' => 'required|alpha|max:50',
            'jadwal' => 'required'
        ], $message);
        
        $eskul =  Eskul::find($id);
        $eskul->nama = $request->nama;
        $eskul->pembimbing = $request->pembimbing;
        $eskul->jadwal = $request->jadwal;
        $eskul->save();
        return redirect()->route('eskul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eskul = Eskul::find($id);
        $eskul->delete();
        return redirect()->route('eskul');
    }
}
