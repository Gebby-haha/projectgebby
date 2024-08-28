<?php

namespace App\Http\Controllers;

use App\Models\formulir;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormulirController extends Controller
{
    public function create()
    {
        return view('formulir.create');
    }

    public function store(Request $request)
    {

        // $validator = Validator::make($request->all(), [
        //     //   $data=  $request->all();
        //     //   dd($data);
        //     'photo' => 'required|mimes:png,jpg,jpeg|max:2048',
        //     'nama' => 'required',
        // ]);



        // if ($request->hasFile('photo')) {


        $formulir = new formulir();
        $formulir->nama = $request->nama;
        $formulir->jurusan = $request->jurusan;
        $hobiArray = $request->input('hobi', []);
        $formulir->hobi = is_array($hobiArray) ? explode(',', $request->hobi): '';
        $formulir->jenis_kelamin = $request->jenis_kelamin;
        $formulir->alamat = $request->alamat;
        $photo = $request->file('photo');
        $fileName = rand(1,99) . '_' .$photo->getClientOriginalName();
        $filePath = 'photo/' . $fileName;
        $photo->move(public_path('photo/'), $fileName);
        $formulir->gambar = $filePath;

        $formulir->save();

        return redirect()->route('formulir.list')->with('success', 'Data created successfully');
    }

    public function index()
    {
        $formulir = formulir::all();
        // $formulir = formulir::get();
        $hobiArray = ['bernyanyi', 'bersepeda', 'menari', 'tidur'];
        return view('formulir.list', compact('formulir', 'hobiArray'));
    }


    public function edit($id)
    {
        $formulir = Formulir::findOrFail($id);
        return view('formulir.edit', compact('formulir'));
    }


    public function update(Request $request, $id)
    {
        $formulir = Formulir::findOrFail($id);
        // $photo = $request->file('photo');
        // $fileName = rand(1,99) . '_' .$photo->getClientOriginalName();
        // $filePath = 'photo/' . $fileName;
        // $photo->move(public_path('photo/'), $fileName);
        // $formulir->gambar = $filePath;
        $formulir->nama = $request->nama;
        $formulir->jurusan = $request->jurusan;
        $formulir->hobi = explode(',', $request->hobi);
        $formulir->jenis_kelamin = $request->jenis_kelamin;
        $formulir->alamat = $request->alamat;
        $photo = $request->file('photo');
        $fileName = rand(1,99) . '_' .$photo->getClientOriginalName();
        $filePath = 'photo/' . $fileName;
        $photo->move(public_path('photo/'), $fileName);
        $formulir->gambar = $filePath;

        $formulir->update();
        return redirect()->route('formulir.list', $id)->with('success', 'Data updated successfully');

    }


    public function destroy($id)
    {
        $formulir = Formulir::findOrFail($id);
        $formulir->delete();
        return redirect()->route('formulir.index')->with('success', 'Data deleted successfully');
    }
}
