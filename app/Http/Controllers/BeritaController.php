<?php

namespace App\Http\Controllers;

use App\Models\artikelkategori;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\berita as ModelsBerita;
use App\Models\kategori;

use function Laravel\Prompts\select;

class BeritaController extends Controller
{
    public function buatartikel()
{
    $kategori = kategori::all();
    $berita = Berita::all();
    $kategoridata = artikelkategori::join('kategori', 'kategori.id', '=', 'artikelkategori.kategori_id')
        ->whereIn('artikel_id', $berita->pluck('id')->toArray())
        ->select('artikelkategori.artikel_id', 'kategori.nama_kategori')
        ->get();

    // Mengorganisir kategoridata dengan artikel_id
    $kategoridataByArticle = $kategoridata->groupBy('artikel_id');

    return view('backend.artikel.buatartikel', compact('berita', 'kategori', 'kategoridataByArticle'));
}

    public function buatartikel_store(Request $request)
    {

        $berita = new berita();
        $berita->judul_artikel = $request->judul_artikel;
        $berita->isi_artikel = $request->isi_artikel;
        // $berita->kategori = $request->kategori;
        $rand = rand(10, 999);

        $berita->gambar = $request->gambar;
        if ($request->hasFile('gambar')) {

            $file = $request->file('gambar');
            $fileName = $rand . '_' . $file->getClientOriginalName();
            $filePath = 'images/' . $fileName;
            $file->move(public_path('images/'), $fileName);
            $berita->gambar = $filePath;
        }
        $berita->tanggal = $request->tanggal;
        $berita->status = $request->status;

        $berita->kategori_id = $request->kategori ?? null;

        $berita->save();

        if($berita){
            $artikelkategori = new artikelkategori();
            $artikelkategori->artikel_id = $berita->id;
            $artikelkategori->kategori_id = $request->kategori;

            $artikelkategori->save();
        }

        return back();
    }


    public function buatartikel_edit($id)
    {
        $berita = berita::find($id);
        if (!$berita) {
            return redirect()->route('artikel.buatartikel')->withErrors('Artikel tidak ditemukan.');
        }

        // Ambil semua data kategori
        $kategori = kategori::all();

        // Ambil kategori yang sudah terhubung dengan artikel
        $kategoridata = artikelkategori::where('artikel_id', $id)->pluck('kategori_id')->toArray();

        return view('backend.artikel.editartikel', compact('berita', 'kategori', 'kategoridata'));
    }


    public function buatartikel_update(Request $request, $id)
    {
        // dd($request->all());
        $berita= Berita::find($id);

        $berita->judul_artikel =$request->judul_artikel;
        $berita->isi_artikel = $request->isi_artikel;
        $berita->kategori_id = $request->kategori_id ?? null;
        $rand = rand(10, 999);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = $rand . '_' . $file->getClientOriginalName();
            $filePath = 'images/' . $fileName;
            $file->move(public_path('images/'), $fileName);
            $berita->gambar = $filePath;
        }

        $berita->tanggal = $request->tanggal;
        $berita->status = $request->status;

        $berita->update();

        return redirect()->route('artikel.buatartikel');
    }


    public function buatartikel_destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        return back();
    }
}
