<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\VisiMisi;
use DataTables;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visimisi = VisiMisi::All();
        return view('admin.visimisi.index', compact('visimisi'));
    }

    public function visimisiDatatables()
    {
        $visimisi = VisiMisi::All();
        return Datatables::of($visimisi)
                            ->addColumn('action', 'admin.visimisi.action')
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
        return view('admin.visimisi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $message = [
            'required' => 'Form ini harus diisi.',
        ];

        $this->validate($request, [
            'visi' => 'required',
            'misi' => 'required'
        ], $message);
        
        $visimisi = new VisiMisi;
        $visimisi->visi = $request->visi;
        $visimisi->misi = $request->misi;
        $visimisi->save();

        return redirect()->route('visimisi');
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
        $visimisi = VisiMisi::find($id);
        return view('admin.visimisi.update', compact('visimisi'));
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
        $message = [
            'required' => 'Form ini harus diisi.',
        ];

        $this->validate($request, [
            'visi' => 'required',
            'misi' => 'required'
        ], $message);
        
        $visimisi = VisiMisi::find($id);
        $visimisi->visi = $request->visi;
        $visimisi->misi = $request->misi;
        $visimisi->save();
        return redirect()->route('visimisi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visimisi = VisiMisi::find($id);
        $visimisi->delete();

        return redirect()->route('visimisi');
    }
}
