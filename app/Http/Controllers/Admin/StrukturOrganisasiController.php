<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StrukturOrganisasi;
use DataTables;
use Image;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.strukturorganisasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function strukturDatatable() 
    {
        $struktur = StrukturOrganisasi::All();
        return Datatables()->of($struktur)
                           ->addColumn('action', 'admin.strukturorganisasi.action')
                           ->addIndexColumn()
                           ->make(true);
    } 

    public function create()
    {
        return view('admin.strukturorganisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $struktur = new StrukturOrganisasi;
        $foto = $request->file('foto');
        $filename = time() .'.'. $foto->getClientOriginalExtension();
        Image::make($foto)->resize(400, 400)->save( public_path('/image/strukturorganisasi/' .$filename));
        $struktur->foto = $filename;
        
        $struktur->save();

        return redirect()->route('struktur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $struktur = StrukturOrganisasi::find($id);
        return view('admin.strukturorganisasi.show', compact('struktur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $struktur = StrukturOrganisasi::find($id);
        return view('admin.strukturorganisasi.update');
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $struktur = StrukturOrganisasi::find($id);
        $struktur->delete();

        return redirect()->route('struktur');
    }
}
