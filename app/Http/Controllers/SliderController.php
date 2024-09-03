<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('front.slider', compact('slider'));
    }
    public function uploadSlider()
    {
        $slider = Slider::all();
        return view('backend.artikel.uploadslider', compact('slider'));
    }

    public function uploadslider_store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $slider = new Slider();

        $slider->judul = $request->judul;
        $rand = rand(10, 999);

        $slider->gambar = $request->gambar;
        if ($request->hasFile('gambar')) {

            $file = $request->file('gambar');
            $fileName = $rand . '_' . $file->getClientOriginalName();
            $filePath = 'images/' . $fileName;
            $file->move(public_path('images/'), $fileName);
            $slider->gambar = $filePath;
        }
        $slider->save();

        return redirect()->route('slider.index');
    }

    public function uploadslider_destroy($id)
    {
        $slider = slider::find($id);
        $slider->delete();

        return back();
    }
    public function create()
{
    return view('backend.uploadslider');
}
}
