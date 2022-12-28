<?php

namespace App\Http\Controllers\Admin\InformasiPublik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InformasiPublik\InformasiPublikBanner;
use App\Models\InformasiPublik\InformasiSetiapSaat;
use Illuminate\Support\Facades\File;
use Session;

class InformasiSetiapSaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $informasiPublikBanner = new InformasiPublikBanner();
        $informasiPublikBanner = $informasiPublikBanner->first();

        $informasiSetiapSaat = new InformasiSetiapSaat();
        $informasiSetiapSaat = $informasiSetiapSaat::all();
        return view('admin.informasi_publik.informasi_setiap_saat', compact('informasiPublikBanner', 'informasiSetiapSaat'));
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
            'judulInformasi' => 'required',
            // 'url' => 'required',
            // 'file_pendukung' => 'mimes:pdf|max:5120',

        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {
            $informasiSetiapSaat = new InformasiSetiapSaat();
            $informasiSetiapSaat->judul_informasi = $request->judulInformasi;
            $informasiSetiapSaat->url = $request->url;
            if (count($request->files) > 0) {
                $files = $request->files;
                $upload_path = 'adminAssets/informasiPublik/informasi_setiap_saat';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file_pendukung') {
                        $informasiSetiapSaat->file_path = 'adminAssets/informasiPublik/informasi_setiap_saat/' . $request->file($fileName)->getClientOriginalName();
                    }

                    $fileName2 = $request->file($fileName)->getClientOriginalName();
                    $path = $file->storeAs('public/adminAssets/informasiPublik/informasi_setiap_saat', $fileName2);
                }
            }



            $informasiSetiapSaat->save();

            return redirect()->back()->with('success', 'Berhasil menyimpan Informasi Publik Setiap Saat');
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
            'judulInformasi' => 'required',
            // 'url' => 'required',
            'file' => 'mimes:pdf|max:5120',

        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {

            $informasiSetiapSaat = new InformasiSetiapSaat();
            $informasiSetiapSaat = $informasiSetiapSaat->where('id', $id)->first();
            $informasiSetiapSaat->judul_informasi = $request->judulInformasi;
            if (count($request->files) > 0) {
                File::delete($informasiSetiapSaat->file_path);
                $files = $request->files;
                $upload_path = 'adminAssets/informasiPublik/informasi_setiap_saat';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        $informasiSetiapSaat->file_path = 'adminAssets/informasiPublik/informasi_setiap_saat/' . $request->file($fileName)->getClientOriginalName();
                    }

                    $fileName2 = $request->file($fileName)->getClientOriginalName();
                    $path = $file->storeAs('public/adminAssets/informasiPublik/informasi_setiap_saat', $fileName2);
                }
            }


            $informasiSetiapSaat->url = $request->url;

            $informasiSetiapSaat->save();

            return redirect()->back()->with('success', 'Berhasil mengubah Informasi Publik Setiap Saat');
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
        $informasiSetiapSaat = new informasiSetiapSaat();

        if ($informasiSetiapSaat->where('id', $id)->first()->file_path) {
            File::delete($informasiSetiapSaat->where('id', $id)->first()->file_path);
        }

        $informasiSetiapSaat = $informasiSetiapSaat->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus Informasi Publik Setiap Saat");
    }
}
