<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategori_edit($id)
    {
        $kategori= kategori::find($id);

        return view('display.edit', compact('kategori'));
    }
    public function kategori_update(Request $request, $id)
    {
        $kategori= kategori::find($id);
        $kategori->nama_kategori =$request->namakategori;
        $kategori->update();

        return redirect()->route('artikel.kategori');
    }

    public function kategori_destroy($id)
    {
        $kategori= kategori::find($id);
        $kategori->delete();

        return back();
    }
   

}
