<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        $data = berita::all();

        return view('front.app', compact('data'));
    }
}
