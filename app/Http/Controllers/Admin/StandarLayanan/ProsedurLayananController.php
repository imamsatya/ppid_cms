<?php

namespace App\Http\Controllers\Admin\StandarLayanan;

use App\Http\Controllers\Controller;
use App\Models\StandarLayanan\ProsedurLayanan;
use Illuminate\Http\Request;

class ProsedurLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prosedurLayanan = new ProsedurLayanan();
        $prosedurLayanan = $prosedurLayanan->first();
        return view('admin.standar_layanan.prosedur_layanan', compact('prosedurLayanan'));
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
            'permohonan' => 'required_without_all:keberatan|mimes:png,jpg,jpeg|max:5120',
            'keberatan' => 'required_without_all:permohonan|mimes:png,jpg,jpeg|max:5120',
        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        if ($validated) {
            $prosedurLayanan = new ProsedurLayanan();
            $prosedurLayanan = $prosedurLayanan->first();
            if ($prosedurLayanan) {
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/standarlayanan/prosedurLayanan';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);

                        if ($fileName == 'permohonan') {
                            $prosedurLayanan->permohonan_direktori_image = 'adminAssets/standarlayanan/prosedurLayanan/permohonan.' . $file->getClientOriginalExtension();
                        }

                        if ($fileName == 'keberatan') {
                            $prosedurLayanan->keberatan_direktori_image = 'adminAssets/standarlayanan/prosedurLayanan/keberatan.' . $file->getClientOriginalExtension();
                        }

                        if ($fileName == 'banner') {
                            $prosedurLayanan->banner_path = 'adminAssets/standarlayanan/prosedurLayanan/banner.' . $file->getClientOriginalExtension();
                        }

<<<<<<< HEAD
                        $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                        $path = $file->storeAs('public/adminAssets/standarlayanan/prosedurLayanan', $fileName2);
=======
                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
>>>>>>> origin/main
                    }
                }

                $prosedurLayanan->save();
            } else {
                $prosedurLayanan = new ProsedurLayanan();
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/standarlayanan/prosedurLayanan';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'permohonan') {
                            $prosedurLayanan->permohonan_direktori_image = 'adminAssets/standarlayanan/prosedurLayanan/permohonan.' . $file->getClientOriginalExtension();
                        }

                        if ($fileName == 'keberatan') {
                            $prosedurLayanan->keberatan_direktori_image = 'adminAssets/standarlayanan/prosedurLayanan/keberatan.' . $file->getClientOriginalExtension();
                        }

                        if ($fileName == 'banner') {
                            $prosedurLayanan->banner_path = 'adminAssets/standarlayanan/prosedurLayanan/banner.' . $file->getClientOriginalExtension();
                        }

<<<<<<< HEAD
                        $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                        $path = $file->storeAs('public/adminAssets/standarlayanan/prosedurLayanan', $fileName2);
=======
                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
>>>>>>> origin/main
                    }
                }

                $prosedurLayanan->save();
            }


            return redirect()->back()->with('success', 'Berhasil menyimpan Prosedur Layanan');
        }
    }

    public function bannerStore(Request $request)
    {

        $validated = $request->validate([
            'banner' => 'required|mimes:png,jpg,jpeg|max:5120'
        ]);


        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        if ($validated) {
            $prosedurLayanan = new ProsedurLayanan();
            $prosedurLayanan = $prosedurLayanan->first();
            if ($prosedurLayanan) {
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/standarlayanan/prosedurLayanan/banner';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);

                        if ($fileName == 'banner') {
                            $prosedurLayanan->banner_path = 'adminAssets/standarlayanan/prosedurLayanan/banner/banner.' . $file->getClientOriginalExtension();
                        }

<<<<<<< HEAD
                        $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                        $path = $file->storeAs('public/adminAssets/standarlayanan/prosedurLayanan/banner', $fileName2);
=======
                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
>>>>>>> origin/main
                    }
                }

                $prosedurLayanan->save();
            } else {
                $prosedurLayanan = new ProsedurLayanan();
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/standarlayanan/prosedurLayanan/banner';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $prosedurLayanan->banner_path = 'adminAssets/standarlayanan/prosedurLayanan/banner/banner.' . $file->getClientOriginalExtension();
                        }

<<<<<<< HEAD
                        $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                        $path = $file->storeAs('public/adminAssets/standarlayanan/prosedurLayanan/banner', $fileName2);
=======
                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
>>>>>>> origin/main
                    }
                }

                $prosedurLayanan->save();
            }


            return redirect()->back()->with('success', 'Berhasil menyimpan Banner');
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
