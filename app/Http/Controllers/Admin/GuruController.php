<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Guru;
use DataTables;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.guru.index');
    }

    public function guruDatatables()
    {
        $guru = Guru::all();
        return Datatables::of($guru)
                            ->addColumn('action', 'admin.guru.action')
                            ->addIndexColumn()
                            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guru.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id = $request->get('id');
        if ($id) {
            $guru = Guru::findOrFail($id);
        }else{
            $guru = new Guru;
        }

        $guru->nuptk = $request->nuptk;
        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->jk = $request->jk;
        $guru->tgl_lahir = $request->tgl_lahir;
        $guru->tmpt_lahir = $request->tmpt_lahir;
        $guru->alamat = $request->alamat;
        $guru->save();

        return redirect()->route('guru');

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
        $guru = Guru::findOrFail($id);
        return view('admin.guru.edit', compact('guru'));
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
        $guru = Guru::where('id', $id)->delete();
        return redirect()->route('guru');
    }
}
