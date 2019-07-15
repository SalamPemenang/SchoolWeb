<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\CategoryGaleri;
use Image;

class GaleriController extends Controller
{
    public function index()
    {
    	$galeries = Gallery::all();
        $categories = CategoryGaleri::all();
    	return view('admin.galeri.index', compact('galeries', 'categories'));
    }

    public function manage()
    {
    	$galeries = Gallery::all();
    	return view('admin.galeri.manage', compact('galeries'));
    }


    public function create()
    {
        $categories = CategoryGaleri::all();
    	return view('admin.galeri.add', compact('categories'));
    }


    public function store(Request $request)
    {
        $message = [
            'required' => 'Form ini harus diisi.',
            'mimes' => 'Format Gambar Harus .jpg, .jpeg atau .png.',
            'max' => 'Ukuran Foto Maksimal 1mb.'
        ];

        $this->validate($request, [
            'foto' => 'required|mimes:jpeg,jpg,png|max:1000'
        ], $message);
    	$galeri = new Gallery;
    	$galeri->id_category_galeri = $request->kategori;

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
        $categories = CategoryGaleri::all();
    	return view('admin.galeri.edit', compact('galeri', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $message = [
            'required' => 'Form ini harus diisi.',
            'mimes' => 'Format Gambar Harus .jpg, .jpeg atau .png.',
            'max' => 'Ukuran Foto Maksimal 1mb.'
        ];

        $this->validate($request, [
            'foto' => 'required|mimes:jpeg,jpg,png|max:1000'
        ], $message);
    	$galeri = Gallery::find($id);
    	$galeri->id_category_galeri = $request->kategori;

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
