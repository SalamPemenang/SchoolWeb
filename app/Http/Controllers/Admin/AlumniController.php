<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Alumni;
use Image;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.alumni.index');
    }

    public function alumniDatatables()
    {
        $alumni = Alumni::all();
        return Datatables::of($alumni)
                            ->addColumn('action', 'admin.alumni.action')
                            ->addIndexColumn()
                            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alumni.add');
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
            $alumni = Alumni::findOrFail($id);
        }else{
            $alumni = new Alumni;
        }

        $alumni->nama = $request->nama;
        $alumni->jk = $request->jk;
        $alumni->thn_lulus = $request->thn_lulus;
        $alumni->pendidikan_lanjutan = $request->pendidikan_lanjutan;

        
        $foto = $request->file('foto');
        $filename = time() .'.'. $foto->getClientOriginalExtension();
        Image::make($foto)->resize(400, 400)->save( public_path('/image/alumni/' . $filename));
        $alumni->foto = $filename;
        

        $alumni->save();
        return redirect()->route('alumni');

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
        $alumni = Alumni::findOrFail($id);
        return view('admin.alumni.edit', compact('alumni'));
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
        $alumni = Alumni::where('id', $id)->delete();
        return redirect()->route('alumni');
    }
}
