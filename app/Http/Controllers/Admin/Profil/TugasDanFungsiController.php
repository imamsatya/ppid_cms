<?php

namespace App\Http\Controllers\Admin\Profil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profil\TugasDanFungsi;


class TugasDanFungsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tugasDanFungsi = new TugasDanFungsi();
        $tugasDanFungsi = $tugasDanFungsi->first();
        return view('admin.profil.tugasdanfungsi', compact('tugasDanFungsi'));
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
            'judul' => 'required',
            'konten' => 'required',
            'banner' => 'max:5120|mimes:png,jpg,jpeg',
            'sideImage' => 'max:5120|mimes:png,jpg,jpeg'
        ]);

        if ($validated) {


            $tugasDanFungsi = new TugasDanFungsi();
            $tugasDanFungsi = $tugasDanFungsi->first();

            if ($tugasDanFungsi) {
                $tugasDanFungsi->judul = $request->judul;
                $tugasDanFungsi->konten = $request->konten;

                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/profil/tugas_dan_fungsi';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $tugasDanFungsi->banner_path = 'adminAssets/profil/tugas_dan_fungsi/banner.' . $file->getClientOriginalExtension();
                        }
                        if ($fileName == 'sideImage') {
                            $tugasDanFungsi->side_image_path = 'adminAssets/profil/tugas_dan_fungsi/sideImage.' . $file->getClientOriginalExtension();
                        }
<<<<<<< HEAD
                        $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                        $path = $file->storeAs('public/adminAssets/profil/tugas_dan_fungsi', $fileName2);
=======
                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
>>>>>>> origin/main
                    }
                }
                $tugasDanFungsi->save();
            } else {
                $tugasDanFungsi = new tugasDanFungsi();
                $tugasDanFungsi->judul = $request->judul;
                $tugasDanFungsi->konten = $request->konten;

                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/profil/tugas_dan_fungsi';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $tugasDanFungsi->banner_path = 'adminAssets/profil/tugas_dan_fungsi/banner.' . $file->getClientOriginalExtension();
                        }
                        if ($fileName == 'sideImage') {
                            $tugasDanFungsi->side_image_path = 'adminAssets/profil/tugas_dan_fungsi/sideImage.' . $file->getClientOriginalExtension();
                        }
<<<<<<< HEAD
                        $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                        $path = $file->storeAs('public/adminAssets/profil/tugas_dan_fungsi', $fileName2);
=======
                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
>>>>>>> origin/main
                    }
                }
                $tugasDanFungsi->save();
            }


            return redirect()->back()->with('success', 'Berhasil menyimpan tugas dan fungsi');
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
