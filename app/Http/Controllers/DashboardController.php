<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Berita;
use App\Models\kategori;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.app');
        // return "hello";
    }


    public function create()
    {
        return view('backend.artikel.create');
    }

    public function kategori()

    {
        $kategori = kategori::all();
        return view('backend.artikel.kategori', compact('kategori'));
    }
    public function buatartikel()
    {

        return view('backend.artikel.buatartikel');
    }


    public function kategori_store(Request $request)
    {
        $kategori = $request->namakategori;
        // dd($kategori);
        // return $kategori;
        $data = new kategori();
        $data->nama_kategori = $kategori;
        $data->save();
        return back();
    }

}
