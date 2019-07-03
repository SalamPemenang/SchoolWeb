<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use Image;

class GaleriController extends Controller
{
    public function index()
    {
    	$galeries = Gallery::all();
    	return view('admin.galeri.index', compact('galeries'));
    }

    public function manage()
    {
    	$galeries = Gallery::all();
    	return view('admin.galeri.manage', compact('galeries'));
    }


    public function create()
    {
    	return view('admin.galeri.add');
    }


    public function store(Request $request)
    {
    	$galeri = new Gallery;
    	$galeri->kategori = $request->kategori;

    	$foto = $request->file('foto');
        $filename = time() .'.'. $foto->getClientOriginalExtension();
        Image::make($foto)->save( public_path('/image/galeri/' . $filename));

    	$galeri->foto = $filename;
    	$galeri->save();

    	return redirect()->route('galeri.manage');

    }


    public function edit($id)
    {
    	$galeri = Gallery::find($id);
    	return view('admin.galeri.edit', compact('galeri'));
    }


    public function update(Request $request, $id)
    {
    	$galeri = Gallery::find($id);
    	$galeri->kategori = $request->kategori;

    	$foto = $request->file('foto');
        $filename = time() .'.'. $foto->getClientOriginalExtension();
        Image::make($foto)->save( public_path('/image/galeri/' . $filename));

    	$galeri->foto = $filename;
    	$galeri->save();

    	return redirect()->route('galeri.manage');
    }


    public function destroy($id)
    {
    	$galeri = Gallery::find($id);
    	$galeri->delete();

    	return redirect()->route('galeri.manage');
    }
}
