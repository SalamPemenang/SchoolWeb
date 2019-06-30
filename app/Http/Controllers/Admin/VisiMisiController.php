<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\VisiMisi;

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
        return view('admin.visimisi.index', ['visimisi'=>$visimisi]);
    }

    public function manage() 
    {
        $visimisi = VisiMisi::All();
        return view('admin.visimisi.manage', ['visimisi' => $visimisi]);
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

        $visimisi = new VisiMisi;
        $visimisi->visi = $request->visi;
        $visimisi->misi = $request->misi;
        $visimisi->save();

        return redirect('visimisi');
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
        return view('admin.visimisi.update', ['visimisi' => $visimisi]);
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
        $visimisi = VisiMisi::find($id);
        $visimisi->visi = $request->visi;
        $visimisi->misi = $request->misi;
        $visimisi->save();
        return redirect('visimisi');
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

        return redirect('visimisi');
    }
}
