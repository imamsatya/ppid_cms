<?php

namespace App\Http\Controllers\Admin\InformasiPublik;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiPublikBanner;
use App\Models\InformasiPublik\InformasiSecaraBerkala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Session;

class InformasiSecaraBerkalaController extends Controller
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

        $informasiSecaraBerkala = new InformasiSecaraBerkala();
        $informasiSecaraBerkala = $informasiSecaraBerkala::all();
        return view('admin.informasi_publik.informasi_secara_berkala', compact('informasiPublikBanner', 'informasiSecaraBerkala'));
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
            'url' => 'required',
            'file_pendukung' => 'mimes:pdf|max:5120',

        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {
            $informasiSecaraBerkala = new informasiSecaraBerkala();
            $informasiSecaraBerkala->judul_informasi = $request->judulInformasi;
            $informasiSecaraBerkala->url = $request->url;
            if (count($request->files) > 0) {
                $files = $request->files;
                $upload_path = 'adminAssets/informasiPublik/informasi_secara_berkala';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file_pendukung') {
                        $informasiSecaraBerkala->file_path = 'adminAssets/informasiPublik/informasi_secara_berkala/' . $request->file($fileName)->getClientOriginalName();
                    }

                    $file->move($upload_path, $request->file($fileName)->getClientOriginalName());
                }
            }



            $informasiSecaraBerkala->save();

            return redirect()->back()->with('success', 'Berhasil menyimpan Informasi Publik Secara Berkala');
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
            $banner = new InformasiPublikBanner();
            $banner = $banner->first();
            if ($banner) {
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/informasiPublik/banner';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);

                        if ($fileName == 'banner') {
                            $banner->banner_path = 'adminAssets/informasiPublik/banner/banner.' . $file->getClientOriginalExtension();
                        }

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }

                $banner->save();
            } else {
                $banner = new InformasiPublikBanner();
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/informasiPublik/banner';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $banner->banner_path = 'adminAssets/informasiPublik/banner/banner.' . $file->getClientOriginalExtension();
                        }

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }

                $banner->save();
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

        $validated = $request->validate([
            'judulInformasi' => 'required',
            'url' => 'required',
            'file' => 'mimes:pdf|max:5120',

        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {

            $informasiSecaraBerkala = new informasiSecaraBerkala();
            $informasiSecaraBerkala = $informasiSecaraBerkala->where('id', $id)->first();
            $informasiSecaraBerkala->judul_informasi = $request->judulInformasi;
            if (count($request->files) > 0) {
                File::delete($informasiSecaraBerkala->file_path);
                $files = $request->files;
                $upload_path = 'adminAssets/informasiPublik/informasi_secara_berkala';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        $informasiSecaraBerkala->file_path = 'adminAssets/informasiPublik/informasi_secara_berkala/' . $request->file($fileName)->getClientOriginalName();
                    }

                    $file->move($upload_path, $request->file($fileName)->getClientOriginalName());
                }
            }


            $informasiSecaraBerkala->url = $request->url;

            $informasiSecaraBerkala->save();

            return redirect()->back()->with('success', 'Berhasil mengubah Informasi Secara Berkala');
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
        $informasiSecaraBerkala = new InformasiSecaraBerkala();

        if ($informasiSecaraBerkala->where('id', $id)->first()->file_path) {
            File::delete($informasiSecaraBerkala->where('id', $id)->first()->file_path);
        }

        $informasiSecaraBerkala = $informasiSecaraBerkala->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus Informasi Publik Secara Berkala");
    }
}
