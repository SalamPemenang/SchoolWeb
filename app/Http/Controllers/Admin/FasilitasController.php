<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fasilitas;
use Image;

class FasilitasController extends Controller
{
    public function index()
    {
    	$fasilitations = Fasilitas::all();
    	return view('admin.fasilitas.index', compact('fasilitations'));
    }

    public function manage()
    {
    	$fasilitations = Fasilitas::all();
    	return view('admin.fasilitas.manage', compact('fasilitations'));
    }


    public function create()
    {
    	return view('admin.fasilitas.add');
    }


    public function store(Request $request)
    {
        $message = [
            'required' => 'Form ini harus diisi.',
            'mimes' => 'Format Gambar Harus .jpg, .jpeg atau .png.',
            'max' => 'Ukuran Foto maksimal 1mb.'
        ];

        $this->validate($request, [
            'foto' => 'required|mimes:jpeg,jpg,png|max:1000'
        ], $message);
    	$fasilitas = new Fasilitas;
    	$fasilitas->kategori = $request->kategori;

    	$foto = $request->file('foto');
        $filename = time() .'.'. $foto->getClientOriginalExtension();
        Image::make($foto)->save( public_path('/image/fasilitas/' . $filename));

    	$fasilitas->foto = $filename;
    	$fasilitas->save();

    	return redirect()->route('fasilitas.manage');

    }


    public function edit($id)
    {
    	$fasilitas = Fasilitas::find($id);
    	return view('admin.fasilitas.edit', compact('fasilitas'));
    }


    public function update(Request $request, $id)
    {
        $message = [
            'required' => 'Form ini harus diisi.',
            'mimes' => 'Format Gambar Harus .jpg, .jpeg atau .png.',
            'max' => 'Ukuran Foto maksimal 1mb.'
        ];

        $this->validate($request, [
            'foto' => 'required|mimes:jpeg,jpg,png|max:1000'
        ], $message);
        
    	$fasilitas = Fasilitas::find($id);
    	$fasilitas->kategori = $request->kategori;

    	$foto = $request->file('foto');
        $filename = time() .'.'. $foto->getClientOriginalExtension();
        Image::make($foto)->save( public_path('/image/fasilitas/' . $filename));

    	$fasilitas->foto = $filename;
    	$fasilitas->save();

    	return redirect()->route('fasilitas.manage');
    }


    public function destroy($id)
    {
    	$fasilitas = Fasilitas::find($id);
    	$fasilitas->delete();

    	return redirect()->route('fasilitas.manage');
    }
}
