<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
		return view('layout.home');
	}

	public function contact(){
		return view('contact');
	}

    public function about(){
        return view('about');
    }
    // public function logout(){
    //     return view('logout.logout');
    // }
    public function education(){
        return view('kategori.education');
    }
    public function politic(){
        return view('kategori.politic');
    }
    public function sport(){
        return view('kategori.sport');
    }
    public function entertainment(){
        return view('kategori.entertainment');
    }
    public function fashion(){
        return view('kategori.fashion');
    }

    public function latest(){
        return view('kategori.latest');
    }

    public function terpopuler(){
        return view('kategori.terpopuler');
    }
    public function help(){
        return view('footer.help');
    }

}
