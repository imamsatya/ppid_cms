<?php

namespace App\Http\Controllers\Admin\StandarLayanan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StandarLayanan\Maklumat;

class MaklumatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $maklumat = new Maklumat();
        $maklumat = $maklumat->first();
        return view('admin.standar_layanan.maklumat_layanan', compact('maklumat'));
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
            'maklumat' => 'mimes:png,jpg,jpeg|max:5120',
            'banner' => 'mimes:png,jpg,jpeg|max:5120'
        ]);


        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        if ($validated) {
            $maklumat = new Maklumat();
            $maklumat = $maklumat->first();
            if ($maklumat) {
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/standarlayanan/maklumat';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);

                        if ($fileName == 'maklumat') {
                            $maklumat->direktori_image = 'adminAssets/standarlayanan/maklumat/maklumat.' . $file->getClientOriginalExtension();
                        }

                        if ($fileName == 'banner') {
                            $maklumat->banner_path = 'adminAssets/standarlayanan/maklumat/banner.' . $file->getClientOriginalExtension();
                        }

                        $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                        $path = $file->storeAs('public/adminAssets/standarlayanan/maklumat', $fileName2);
                    }
                }
                $maklumat->judul = $request->judul;
                $maklumat->save();
            } else {
                $maklumat = new Maklumat();
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/standarlayanan/maklumat';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'maklumat') {
                            $maklumat->direktori_image = 'adminAssets/standarlayanan/maklumat/maklumat.' . $file->getClientOriginalExtension();
                        }

                        if ($fileName == 'banner') {
                            $maklumat->banner_path = 'adminAssets/standarlayanan/maklumat/banner.' . $file->getClientOriginalExtension();
                        }

                        $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                        $path = $file->storeAs('public/adminAssets/standarlayanan/maklumat', $fileName2);
                    }
                }
                $maklumat->judul = $request->judul;
                $maklumat->save();
            }


            return redirect()->back()->with('success', 'Berhasil menyimpan maklumat');
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
