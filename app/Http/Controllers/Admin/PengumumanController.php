<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengumuman;
use DataTables;
use Image;

class PengumumanController extends Controller
{
    public function index()
    {
        return view('admin.pengumuman.index');
    }

    public function pengumumanDatatables()    
    {
        $pengumuman = Pengumuman::all();
        return Datatables::of($pengumuman)->addColumn('action', 'admin.pengumuman.action')->addIndexColumn()->make(true);
    }
    public function create()
    {
        return view('admin.pengumuman.add');
    }
     public function store(Request $request)
    {
        $id = $request->get('id');
        
        if ($id) {
            $pengumuman = Pengumuman::findOrFail($id);
        }else{
            $pengumuman = new Pengumuman;
        }

        $pengumuman->judul = $request->judul;
        $pengumuman->tgl = $request->tgl;
        $pengumuman->deskripsi = $request->deskripsi;
        
        $foto = $request->file('foto');
        $filename = time() .'.'. $foto->getClientOriginalExtension();
        Image::make($foto)->resize(400, 400)->save( public_path('/image/pengumuman/' . $filename));
        $pengumuman->foto = $filename;
        

        $pengumuman->save();
        return redirect()->route('pengumuman');

    }
    public function edit($id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('admin.pengumuman.edit', ['pengumuman'=> $pengumuman]);
    }
    public function destroy($id)
    {
        $pengumuman = Pengumuman::where('id', $id)->delete();
        return redirect()->route('pengumuman');
    }
}
