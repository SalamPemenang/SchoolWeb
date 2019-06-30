<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Prestasi;

class PrestasiController extends Controller
{
    public function index()
    {
    	$prestations = Prestasi::all();
    	return view('admin.prestasi.index', compact('prestations'));
    }

    public function create()
    {
    	return view('admin.prestasi.add');
    }


    public function store(Request $request)
    {
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
