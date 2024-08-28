<?php

namespace App\Http\Controllers;

use App\Models\regis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;



class RegisController extends Controller
{
    public function login()
    {
        return view('login.login');
    }
    public function regis()
    {
        return view('regis.createregis');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[

        'password'=>['required','string', 'min:5', 'confirmed']
        ],[
            'password.required'=>'password wajib diisi',
            'password.min'=>'password minimal 5 karakter',
            'password.confirmed'=>'password tidak sama',
        ]
    );
    if($validator->fails())
    {
        Alert::error($validator->messages()->all()[0], 'Error Message');
        return back()->withInput();
    }
        $regis = new regis();
        $regis->nama = $request->nama;
        $regis->email = $request->email;
        $regis->username = $request->username;
        $regis->password = Hash::make($request->password);
        $regis->jenis_kelamin = $request->jenis_kelamin;

        $regis->save();
        Alert::toast('Data created successfully','success');
        // Alert::success('Success Title', 'Success Message');


        return redirect()->route('home');
    }
    public function index()
    {
        $regis = Regis::all();
        return view('regis.listregis', compact('regis'));
    }


    public function edit($id)
    {
        $regis =regis::findOrFail($id);
        return view('regis.editregis', compact('regis'));
    }


    public function update(Request $request, $id)
    {
        $regis =regis::findOrFail($id);
        $regis->nama = $request->nama;
        $regis->email = $request->email;
        $regis->username = $request->username;
        $regis->password = $request->password;
        $regis->confirm_password = $request->confirm_password;
        $regis->jenis_kelamin = $request->jenis_kelamin;

        $regis->update();
        return redirect()->route('regis.listregis', $id)->with('success', 'Data updated successfully');

    }

}
