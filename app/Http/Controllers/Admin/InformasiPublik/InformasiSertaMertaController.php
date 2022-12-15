<?php

namespace App\Http\Controllers\Admin\InformasiPublik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InformasiPublik\InformasiPublikBanner;
use App\Models\InformasiPublik\InformasiSertaMerta;
use Illuminate\Support\Facades\File;
use Session;

class InformasiSertaMertaController extends Controller
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

        $informasiSertaMerta = new InformasiSertaMerta();
        $informasiSertaMerta = $informasiSertaMerta::all();
        return view('admin.informasi_publik.informasi_serta_merta', compact('informasiPublikBanner', 'informasiSertaMerta'));
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
            $informasiSertaMerta = new InformasiSertaMerta();
            $informasiSertaMerta->judul_informasi = $request->judulInformasi;
            $informasiSertaMerta->url = $request->url;
            if (count($request->files) > 0) {
                $files = $request->files;
                $upload_path = 'adminAssets/informasiPublik/informasi_serta_merta';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file_pendukung') {
                        $informasiSertaMerta->file_path = 'adminAssets/informasiPublik/informasi_serta_merta/' . $request->file($fileName)->getClientOriginalName();
                    }

                    $file->move($upload_path, $request->file($fileName)->getClientOriginalName());
                }
            }



            $informasiSertaMerta->save();

            return redirect()->back()->with('success', 'Berhasil menyimpan Informasi Publik Serta Merta');
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

            $informasiSertaMerta = new InformasiSertaMerta();
            $informasiSertaMerta = $informasiSertaMerta->where('id', $id)->first();
            $informasiSertaMerta->judul_informasi = $request->judulInformasi;
            if (count($request->files) > 0) {
                File::delete($informasiSertaMerta->file_path);
                $files = $request->files;
                $upload_path = 'adminAssets/informasiPublik/informasi_serta_merta';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        $informasiSertaMerta->file_path = 'adminAssets/informasiPublik/informasi_serta_merta/' . $request->file($fileName)->getClientOriginalName();
                    }

                    $file->move($upload_path, $request->file($fileName)->getClientOriginalName());
                }
            }


            $informasiSertaMerta->url = $request->url;

            $informasiSertaMerta->save();

            return redirect()->back()->with('success', 'Berhasil mengubah Informasi Publik Serta Merta');
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
        $informasiSertaMerta = new InformasiSertaMerta();

        if ($informasiSertaMerta->where('id', $id)->first()->file_path) {
            File::delete($informasiSertaMerta->where('id', $id)->first()->file_path);
        }

        $informasiSertaMerta = $informasiSertaMerta->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus Informasi Publik Serta Merta");
    }
}
