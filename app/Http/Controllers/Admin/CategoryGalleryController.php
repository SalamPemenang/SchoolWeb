<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoryGaleri;

class CategoryGalleryController extends Controller
{
    public function index()
    {
    	$categories = CategoryGaleri::all();
    	return view('admin.galeri.kategori.index', compact('categories'));
    }

     public function create()
    {
    	return view('admin.galeri.kategori.add');
    }


    public function store(Request $request)
    {
       $category = new CategoryGaleri;

       $category->nama = $request->name;
       $category->save();
       
       return redirect()->route('GK');
    }

    public function edit($id)
    {
    	$category = CategoryGaleri::find($id);
    	return view('admin.galeri.kategori.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
       $category = CategoryGaleri::find($id);

       $category->nama = $request->name;
       $category->save();
       
       return redirect()->route('GK');
    }

    public function destroy($id)
    {
       $category = CategoryGaleri::find($id);
       $category->delete();
       return redirect()->route('GK');
    }
}
