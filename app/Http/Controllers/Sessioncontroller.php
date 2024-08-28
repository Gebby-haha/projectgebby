<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Sessioncontroller extends Controller
{
     function login(request $request){
       $request->validate([
        'email'=> 'required',
        'password' => 'required'
       ], [
        'email.required' => 'email wajib diisi',
        'password.required' => 'password wajib diisi'
       ]);

       $infologin = [
        'email' => $request->email,
        'password' => $request->password
       ];

       if(Auth::attempt([$infologin])){
            return 'sukses';
       }else{
            return 'gagal';
       }

    }
}
