<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fasilitas;
use App\CategoryFasilitas;
use Image;

class FasilitasController extends Controller
{
    public function index()
    {
    	$fasilitations = Fasilitas::all();
        $categories = CategoryFasilitas::all();
    	return view('admin.fasilitas.index', compact('fasilitations', 'categories'));
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
    	$fasilitas = new Fasilitas;
    	$fasilitas->id_category_fasilitas = $request->kategori;

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
    	$fasilitas = Fasilitas::find($id);
    	$fasilitas->id_category_fasilitas = $request->kategori;

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
