<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoryFasilitas;

class CategoryFasilitasController extends Controller
{
    public function index()
    {
    	$categories = CategoryFasilitas::all();
    	return view('admin.fasilitas.kategori.index', compact('categories'));
    }

     public function create()
    {
    	return view('admin.fasilitas.kategori.add');
    }


    public function store(Request $request)
    {
       $category = new CategoryFasilitas;

       $category->nama = $request->name;
       $category->save();
       
       return redirect()->route('GF');
    }

    public function edit($id)
    {
    	$category = CategoryFasilitas::find($id);
    	return view('admin.fasilitas.kategori.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
       $category = CategoryFasilitas::find($id);

       $category->nama = $request->name;
       $category->save();
       
       return redirect()->route('GF');
    }

    public function destroy($id)
    {
       $category = CategoryFasilitas::find($id);
       $category->delete();
       return redirect()->route('GF');
    }
}
