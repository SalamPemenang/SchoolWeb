<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Prestasi;
use DataTables;

class PrestasiController extends Controller
{
    public function index()
    {
    	$prestations = Prestasi::all();
    	return view('admin.prestasi.index', compact('prestations'));
    }

    public function prestasiDatatable()
    {
        $prestations = Prestasi::all();
        return Datatables::of($prestations)
                                ->addColumn('action', 'admin.prestasi.action')
                                ->addIndexColumn()
                                ->make(true);
    }

    public function create()
    {
    	return view('admin.prestasi.add');
    }


    public function store(Request $request)
    {
        $messages = [
            'required' => 'Form ini harus di isi!',
            'max' => 'Form ini harus di isi maksimal 50 karakter!'
        ];

        $this->validate($request, [
            'nama' => 'required|max:50',
            'juara_ke' => 'required|max:50',
            'tingkat' => 'required|max:50',
            'peserta' => 'required|max:50',
        ], $messages);

    	$prestasi = new Prestasi;

        $prestasi->nama = $request->nama;
        $prestasi->juara_ke = $request->juara_ke;
        $prestasi->tingkat = $request->tingkat;
        $prestasi->peserta = $request->peserta;
        $prestasi->save();
       
       return redirect()->route('prestasi');
    }

    public function edit($id)
    {
    	$prestasi = Prestasi::find($id);
    	return view('admin.prestasi.edit', compact('prestasi'));
    }


    public function update(Request $request, $id)
    {
        $messages = [
            'required' => 'Form ini harus di isi!',
            'max' => 'Form ini harus di isi maksimal 50 karakter!'
        ];

        $this->validate($request, [
            'nama' => 'required|max:50',
            'juara_ke' => 'required|max:50',
            'tingkat' => 'required|max:50',
            'peserta' => 'required|max:50',
        ], $messages);
        
    	$prestasi = Prestasi::find($id);

        $prestasi->nama = $request->nama;
        $prestasi->juara_ke = $request->juara_ke;
        $prestasi->tingkat = $request->tingkat;
        $prestasi->peserta = $request->peserta;
        $prestasi->save();
       
       return redirect()->route('prestasi');
    }

    public function destroy($id)
    {
       $prestasi = Prestasi::find($id);
       $prestasi->delete();
        return redirect()->route('prestasi');
    }
}
