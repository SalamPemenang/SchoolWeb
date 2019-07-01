<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TahunAjaran;
use DataTables;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tahunajaran.index');
    }

    public function tahunDatatables()
    {
        $tahun = TahunAjaran::all();
        return Datatables::of($tahun)
                            ->addColumn('action', 'admin.tahunajaran.action')
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
        return view('admin.tahunajaran.add');    
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
            $tahun = TahunAjaran::findOrFail($id);
        }else{
            $tahun = new TahunAjaran;
        }

        $tahun->tahun_ajaran = $request->tahun_ajaran;
        $tahun->save();

        return redirect()->route('tahunajaran');

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
        $tahun = TahunAjaran::findOrFail($id);
        return view('admin.tahunajaran.edit', ['tahun' => $tahun]);
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
        $tahun = TahunAjaran::where('id', $id)->delete();
        return redirect()->route('tahunajaran');
    }
}
