<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Link;

class LinkController extends Controller
{
    public function index()
    {
    	$links = Link::all();
    	return view('admin.link.index', compact('links'));
    }

    public function create()
    {
    	return view('admin.link.add');
    }


    public function store(Request $request)
    {
    	$links = new Link;
    	$links->nama = $request->link;

        $photo = $request->file('foto');
        $fillename = time() . '.' . $photo->getClientOriginalExtension();
        Image::make($photo)->save(public_path('/upload/' . $fillename));

        $link->foto = $fillename;

        $links->save();

        return redirect()->route('link.upload');
    }

    public function edit($id)
    {
    	$link = Link::find($id);
    	return view('admin.link.edit', compact('link'));
    }


    public function update(Request $request, $id)
    {
    	$links = Link::find($id);
    	$links->nama = $request->link;

        $links->save();

        return redirect()->route('link');
    }

    public function destroy($id)
    {
        $link = Link::find($id);
        $link->delete();
        return redirect()->route('link');
    }

}
