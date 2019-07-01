<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TahunAjaran;
use App\Kelas;
use App\Siswa;
use DataTables;
use Image;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.siswa.index');
    }

    public function siswaDatatables()    
    {
        $siswa = Siswa::all();
        return Datatables::of($siswa)->addColumn('action', 'admin.siswa.action')->addIndexColumn()->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tahunajaran = TahunAjaran::all();
        $kelas = Kelas::all();
        return view('admin.siswa.add', compact('tahunajaran', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->get('id');
        
        if ($id) {
            $siswa = Siswa::findOrFail($id);
        }else{
            $siswa = new Siswa;
        }

        $siswa->nisn = $request->nisn;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->jk = $request->jk;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->tmpt_lahir = $request->tmpt_lahir;
        $siswa->id_tahun_ajaran = $request->id_tahun_ajaran;
        $siswa->id_kelas = $request->id_kelas;
        
        $foto = $request->file('foto');
        $filename = time() .'.'. $foto->getClientOriginalExtension();
        Image::make($foto)->resize(400, 400)->save( public_path('/image/siswa/' . $filename));
        $siswa->foto = $filename;
        

        $siswa->save();
        return redirect()->route('siswa');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        $tahunajaran = TahunAjaran::all();
        $kelas = Kelas::all();
        return view('admin.siswa.edit', compact('siswa', 'tahunajaran', 'kelas'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::where('id', $id)->delete();
        return redirect()->route('siswa');
    }
}
