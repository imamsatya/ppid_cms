<?php

namespace App\Http\Controllers\Admin\ManajemenHome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ManajemenHome\Slider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Session;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slider = new Slider();
        $slider = $slider::all();
        return view('admin.manajemen_home.slider', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $validated = $request->validate([
            // 'judul' => 'required',
            // 'deskripsi' => 'required',
            'urutan' => 'required',
            'slider' => 'required|mimes:png,jpg,jpeg|max:5120'
        ]);

        if ($validated) {
            $slider = new Slider();


            $slider->judul = $request->judul;
            $slider->deskripsi = $request->deskripsi;
            $slider->urutan = $request->urutan;
            $file = $request->file('slider');

            $upload_path = 'adminAssets/home/slider';
            $slider->image_path = 'adminAssets/home/slider/' . $request->file('slider')->getClientOriginalName();
            $file->move($upload_path, $request->file('slider')->getClientOriginalName());
            $slider->save();



            return redirect()->back()->with('success', 'Berhasil menyimpan Slider');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $validated = $request->validate([
            // 'judul' => 'required',
            // 'deskripsi' => 'required',
            'urutan' => 'required',
            'slider' => 'mimes:png,jpg,jpeg|max:5120'

        ]);
        if ($validated) {
            $slider = new Slider;
            $slider = $slider->where('id', $id)->first();
            $slider->judul = $request->judul;
            $slider->deskripsi = $request->deskripsi;
            $slider->urutan = $request->urutan;

            if (count($request->files) > 0) {
                File::delete($slider->image_path);
                $file = $request->file('slider');
                $upload_path = 'adminAssets/home/slider';
                $slider->image_path = 'adminAssets/home/slider/' . $request->file('slider')->getClientOriginalName();
                $file->move($upload_path, $request->file('slider')->getClientOriginalName());
            }
            $slider->save();
            return redirect()->back()->with('success', 'Berhasil mengubah Slider');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $slider = new Slider();
        File::delete($slider->where('id', $id)->first()->image_path);
        $slider = $slider->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus Slider");
    }
}
