<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProfileSekolah;

class ProfileSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $profilesekolah = ProfileSekolah::All();
      return view('admin.profilesekolah.index', ['profilesekolah' => $profilesekolah]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $profilesekolah = ProfileSekolah::find($id);
        return view('admin.profilesekolah.update', ['profilesekolah' => $profilesekolah]); 
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
        $profilesekolah = ProfileSekolah::find($id);
        $profilesekolah->nama = $request->nama;
        $profilesekolah->npsn = $request->npsn;
        $profilesekolah->kode_un = $request->kode_un;
        $profilesekolah->nis = $request->nis;
        $profilesekolah->website = $request->website;
        $profilesekolah->email = $request->email;
        $profilesekolah->no_sk_pendirian_sekolah = $request->no_sk_pendirian_sekolah;
        $profilesekolah->tgl_pendirian = $request->tgl_pendirian;
        $profilesekolah->save();
        return redirect('profilesekolah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
