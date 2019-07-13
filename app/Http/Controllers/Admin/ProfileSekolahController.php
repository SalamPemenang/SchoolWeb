<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProfileSekolah;
use DataTables;
use Image;

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
      return view('admin.profilesekolah.index', compact('profilesekolah')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function profileDatatables() 
    {
        $profilesekolah = ProfileSekolah::All();
        return Datatables()->of($profilesekolah)->addColumn('action', 'admin.profilesekolah.action')
                                              ->addIndexColumn()
                                              ->make(true);
    }

    public function create()
    {
        return view('admin.profilesekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $messages = [
            'required' => 'Form Ini Harus Diisi.',
            'max' => 'Ukuran Foto Maksimal 1mb.',
            'mimes' => 'Format Gambar Harus .jpg, .jpeg atau .png.',
            'numeric' => 'Form ini Harus diisi oleh angka.',
            'alpha' => 'Form ini harus diisi oleh teks.',
            'email' => 'Anda Memasukan Alamat email tidak benar.',
            'url' => 'Silahkan Masukan Alamat URL yang benar.',
            'date' => 'Format Tanggal yang anda masukan salah.'
        ];

        $this->validate($request, [
            'logo' => 'required|mimes:jpeg,jpg,png|max:1000',
            'nama' => 'required',
            'npsn' => 'required|numeric',
            'nis' => 'required|numeric',
            'kode_un' => 'required|numeric',
            'alamat' => 'required',
            'no_hp' => 'required',
            'no_sk_pendirian_sekolah' => 'required',
            'tgl_pendirian' => 'required|date',
            'website' => 'required|url',
            'email' => 'required|email',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'maps' => 'required|url'
        ], $messages);

        $profilesekolah = new ProfileSekolah;

        $logo = $request->file('logo');
        $filename = time() .'.'. $logo->getClientOriginalExtension();
        Image::make($logo)->resize(400, 400)->save( public_path('/image/profile_sekolah/logo/' .$filename));
        
        $profilesekolah->logo = $filename;
        $profilesekolah->nama = $request->nama;
        $profilesekolah->npsn = $request->npsn;
        $profilesekolah->nis = $request->nis;
        $profilesekolah->kode_un = $request->kode_un;
        $profilesekolah->alamat = $request->alamat;
        $profilesekolah->no_hp = $request->no_hp;
        $profilesekolah->no_sk_pendirian_sekolah = $request->no_sk_pendirian_sekolah;
        $profilesekolah->tgl_pendirian = $request->tgl_pendirian;
        $profilesekolah->website = $request->website;
        $profilesekolah->email = $request->email;
        $profilesekolah->facebook = $request->facebook;
        $profilesekolah->twitter = $request->twitter;
        $profilesekolah->instagram = $request->instagram;
        $profilesekolah->maps = $request->maps;
        $profilesekolah->save();

        return redirect()->route('profilesekolah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profilesekolah = ProfileSekolah::find($id);
        return view('admin.profilesekolah.show', compact('profilesekolah'));
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
        return view('admin.profilesekolah.update', compact('profilesekolah')); 
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

        $messages = [
            'required' => 'Form Ini Harus Diisi.',
            'max' => 'Ukuran Foto Maksimal 1mb.',
            'mimes' => 'Format Gambar Harus .jpg, .jpeg atau .png.',
            'numeric' => 'Form ini Harus diisi oleh angka.',
            'alpha' => 'Form ini harus diisi oleh teks.',
            'email' => 'Anda Memasukan Alamat email tidak benar.',
            'url' => 'Silahkan Masukan Alamat URL yang benar.',
            'date' => 'Format Tanggal yang anda masukan salah.'
        ];

        $this->validate($request, [
            'logo' => 'required|mimes:jpeg,jpg,png|max:1000',
            'nama' => 'required',
            'npsn' => 'required|numeric',
            'nis' => 'required|numeric',
            'kode_un' => 'required|numeric',
            'alamat' => 'required',
            'no_hp' => 'required',
            'no_sk_pendirian_sekolah' => 'required',
            'tgl_pendirian' => 'required|date',
            'website' => 'required|url',
            'email' => 'required|email',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'maps' => 'required|url'
        ], $messages);
        $profilesekolah = ProfileSekolah::find($id);

        $logo = $request->file('logo');
        $filename = time() .'.'. $logo->getClientOriginalExtension();
        Image::make($logo)->resize(400, 400)->save( public_path('/image/profile_sekolah/logo/' .$filename));

         $profilesekolah->logo = $filename;
        $profilesekolah->nama = $request->nama;
        $profilesekolah->npsn = $request->npsn;
        $profilesekolah->nis = $request->nis;
        $profilesekolah->kode_un = $request->kode_un;
        $profilesekolah->alamat = $request->alamat;
        $profilesekolah->no_hp = $request->no_hp;
        $profilesekolah->no_sk_pendirian_sekolah = $request->no_sk_pendirian_sekolah;
        $profilesekolah->tgl_pendirian = $request->tgl_pendirian;
        $profilesekolah->website = $request->website;
        $profilesekolah->email = $request->email;
        $profilesekolah->facebook = $request->facebook;
        $profilesekolah->twitter = $request->twitter;
        $profilesekolah->instagram = $request->instagram;
        $profilesekolah->maps = $request->maps;
        $profilesekolah->save();
        return redirect()->route('profilesekolah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profilesekolah = ProfileSekolah::find($id);
        $profilesekolah->delete();

        return redirect()->route('profilesekolah');
    }
}
