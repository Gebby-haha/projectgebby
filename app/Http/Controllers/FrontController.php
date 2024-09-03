<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        $data = berita::orderBy('hits', 'desc')
        ->take(4)
        ->get();
        $sliders = slider::all();
        // dd($sliders);
        return view('front.app', compact('data','sliders'));
    }

    public function detail($id){

        $data = berita::find($id);
        $hits = $data->hits ?? 0;
        berita::where('id',$id)->update([
            'hits'=>$hits + 1
        ]);
        // dd($data);
        return view('front.detail',compact('data'));
    }
    public function beritakategori($nama_kategori){
        $data = berita::join('kategori','berita.kategori_id','=','kategori.id')
        ->where('kategori.nama_kategori','=', $nama_kategori)
        ->select('berita.*', 'kategori.nama_kategori')
        ->get();

        return view('front.kategori.beritakategori', compact('data'));
    }


}
