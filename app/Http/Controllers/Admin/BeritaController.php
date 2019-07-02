<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Berita;
use DataTables;
use Image;

class BeritaController extends Controller
{
     public function index()
    {
        return view('admin.berita.index');
    }

    public function beritaDatatables()    
    {
        $berita = Berita::all();
        return Datatables::of($berita)->addColumn('action', 'admin.berita.action')->addIndexColumn()->make(true);
    }
    public function create()
    {
        return view('admin.berita.add');
    }
     public function store(Request $request)
    {
        $id = $request->get('id');
        
        if ($id) {
            $berita = Berita::findOrFail($id);
        }else{
            $berita = new Berita;
        }

        $berita->judul = $request->judul;
        $berita->tgl = $request->tgl;
        $berita->deskripsi = $request->deskripsi;
        
        $foto = $request->file('foto');
        $filename = time() .'.'. $foto->getClientOriginalExtension();
        Image::make($foto)->resize(400, 400)->save( public_path('/image/berita/' . $filename));
        $berita->foto = $filename;
        

        $berita->save();
        return redirect()->route('berita');

    }
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.edit', ['berita'=> $berita]);
    }
    public function destroy($id)
    {
        $berita = Berita::where('id', $id)->delete();
        return redirect()->route('berita');
	}
}