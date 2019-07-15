<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Link;
use DataTables;
use Image;

class LinkController extends Controller
{
    public function index()
    {
    	$links = Link::all();
    	return view('admin.link.index', compact('links'));
    }


    public function linkDatatable()
    {
        $link = Link::all();
        return Datatables::of($link)
                            ->addColumn('action', 'admin.link.action')
                            ->addIndexColumn()
                            ->make(true);
    }


    public function create()
    {
    	return view('admin.link.add');
    }


    public function store(Request $request)
    {
        $message = [
            'required' => 'Form ini harus diisi.',
            'url' => 'Silahkan Masukan Alamat URL yang benar.',
            'mimes' => 'Format Gambar Harus .jpg, .jpeg atau .png.',
            'max' => 'Ukuran Foto Maksimal 1mb.'
        ];
        $this->validate($request, [
            'nama' => 'required',
            'link' => 'required|url',
            'foto' => 'required|mimes:jpeg,jpg,png|max:1000'
        ], $message);

        // dd($request->foto);
        // die();
    	$link = new Link;
        $link->nama = $request->nama;
    	$link->link = $request->link;

        $foto = $request->file('foto');
        $filename = time() .'.'. $foto->getClientOriginalExtension();
        Image::make($foto)->save( public_path('/image/link/' . $filename));
        $link->foto = $filename;

        $link->save();

        return redirect()->route('link');
    }

    public function edit($id)
    {
    	$link = Link::find($id);
    	return view('admin.link.edit', compact('link'));
    }


    public function update(Request $request, $id)
    {
         $message = [
            'required' => 'Form ini harus diisi.',
            'url' => 'Silahkan Masukan Alamat URL yang benar.',
            'mimes' => 'Format Gambar Harus .jpg, .jpeg atau .png.',
            'max' => 'Ukuran Foto Maksimal 1mb.'
        ];
        $this->validate($request, [
            'nama' => 'required',
            'link' => 'required|url',
            'foto' => 'required|mimes:jpeg,jpg,png|max:1000'
        ], $message);
    	$link = Link::find($id);
    	$link->nama = $request->nama;
        $link->link = $request->link;

        $foto = $request->file('foto');
        $filename = time() .'.'. $foto->getClientOriginalExtension();
        Image::make($foto)->save( public_path('/image/link/' . $filename));
        $link->foto = $filename;

        $link->save();

        return redirect()->route('link');
    }

    public function destroy($id)
    {
        $link = Link::find($id);
        $link->delete();
        return redirect()->route('link');
    }

}
