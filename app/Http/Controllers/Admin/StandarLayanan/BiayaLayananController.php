<?php

namespace App\Http\Controllers\Admin\StandarLayanan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StandarLayanan\BiayaLayanan;

class BiayaLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $biayaLayanan = new BiayaLayanan();
        $biayaLayanan = $biayaLayanan->first();
        return view('admin.standar_layanan.biaya_layanan', compact('biayaLayanan'));
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
        $validated = $request->validate([
            'biaya' => 'mimes:png,jpg,jpeg|max:5120',
            'banner' => 'mimes:png,jpg,jpeg|max:5120',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);


        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        if ($validated) {
            $biayaLayanan = new BiayaLayanan();
            $biayaLayanan = $biayaLayanan->first();
            if ($biayaLayanan) {
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/standarlayanan/biayaLayanan';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);

                        if ($fileName == 'biaya') {
                            $biayaLayanan->direktori_image = 'adminAssets/standarlayanan/biayaLayanan/biaya.' . $file->getClientOriginalExtension();
                        }

                        if ($fileName == 'banner') {
                            $biayaLayanan->banner_path = 'adminAssets/standarlayanan/biayaLayanan/banner.' . $file->getClientOriginalExtension();
                        }

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }
                $biayaLayanan->judul = $request->judul;
                $biayaLayanan->deskripsi = $request->deskripsi;
                $biayaLayanan->save();
            } else {
                $biayaLayanan = new BiayaLayanan();
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/standarlayanan/biayaLayanan';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'biaya') {
                            $biayaLayanan->direktori_image = 'adminAssets/standarlayanan/biayaLayanan/biaya.' . $file->getClientOriginalExtension();
                        }

                        if ($fileName == 'banner') {
                            $biayaLayanan->banner_path = 'adminAssets/standarlayanan/biayaLayanan/banner.' . $file->getClientOriginalExtension();
                        }

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }
                $biayaLayanan->judul = $request->judul;
                $biayaLayanan->deskripsi = $request->deskripsi;
                $biayaLayanan->save();
            }


            return redirect()->back()->with('success', 'Berhasil menyimpan Biaya Layanan');
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
    }
}
