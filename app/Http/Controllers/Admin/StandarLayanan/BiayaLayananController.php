<?php

namespace App\Http\Controllers\Admin\StandarLayanan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StandarLayanan\BiayaLayanan;

<<<<<<< HEAD
use function PHPUnit\Framework\isNull;

=======
>>>>>>> origin/main
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
<<<<<<< HEAD
=======
        //
>>>>>>> origin/main
        $validated = $request->validate([
            'biaya' => 'mimes:png,jpg,jpeg|max:5120',
            'banner' => 'mimes:png,jpg,jpeg|max:5120',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);


        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
<<<<<<< HEAD
=======

>>>>>>> origin/main
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
<<<<<<< HEAD
                        $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                        $path = $file->storeAs('public/adminAssets/standarlayanan/biayaLayanan', $fileName2);
                    }
                }
                
                $biayaLayanan->judul = $request->judul;
                $biayaLayanan->deskripsi = $request->deskripsi;
                $biayaLayanan->deskripsi = $request->deskripsi;
                $biayaLayanan->is_active = ($request->has('is_active')) ? 1 : 0;
=======

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }
                $biayaLayanan->judul = $request->judul;
                $biayaLayanan->deskripsi = $request->deskripsi;
>>>>>>> origin/main
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

<<<<<<< HEAD
                        $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                        $path = $file->storeAs('public/adminAssets/standarlayanan/biayaLayanan', $fileName2);
=======
                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
>>>>>>> origin/main
                    }
                }
                $biayaLayanan->judul = $request->judul;
                $biayaLayanan->deskripsi = $request->deskripsi;
<<<<<<< HEAD
                $biayaLayanan->is_active = ($request->has('is_active')) ? 1 : 0;
=======
>>>>>>> origin/main
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
