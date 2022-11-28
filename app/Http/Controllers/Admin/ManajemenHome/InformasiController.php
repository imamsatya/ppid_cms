<?php

namespace App\Http\Controllers\Admin\ManajemenHome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ManajemenHome\Informasi;
use App\Models\ManajemenHome\InformasiImage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Session;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $informasi = new Informasi();
        $informasi = $informasi::all();

        $informasiImage = new InformasiImage();
        $informasiImage = $informasiImage->first();
        return view('admin.manajemen_home.informasi', compact('informasi', 'informasiImage'));
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
            'deskripsi' => 'required',
            'urutan' => 'required',
            'informasi' => 'required|mimes:png,jpg,jpeg|max:5120'
        ]);

        if ($validated) {
            $informasi = new Informasi();


            $informasi->judul = $request->judul;
            $informasi->deskripsi = $request->deskripsi;
            $informasi->urutan = $request->urutan;
            $file = $request->file('informasi');

            $upload_path = 'adminAssets/home/informasi';
            $informasi->image_path = 'adminAssets/home/informasi/' . $request->file('informasi')->getClientOriginalName();
            $file->move($upload_path, $request->file('informasi')->getClientOriginalName());
            $informasi->save();



            return redirect()->back()->with('success', 'Berhasil menyimpan Informasi');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }

    public function imageStore(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'sideimage' => 'required_without_all:backgroundimage|mimes:png,jpg,jpeg|max:5120',
            'backgroundimage' => 'required_without_all:sideimage|mimes:png,jpg,jpeg|max:5120',
        ]);


        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        if ($validated) {
            $informasiImage = new InformasiImage();
            $informasiImage = $informasiImage->first();
            if ($informasiImage) {
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/home/informasi';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);

                        if ($fileName == 'sideimage') {
                            $informasiImage->sideimage_path = 'adminAssets/home/informasi/sideimage.' . $file->getClientOriginalExtension();
                        }

                        if ($fileName == 'backgroundimage') {
                            $informasiImage->backgroundimage_path = 'adminAssets/home/informasi/backgroundimage.' . $file->getClientOriginalExtension();
                        }

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }

                $informasiImage->save();
            } else {
                $informasiImage = new InformasiImage();
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/home/informasi';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);

                        if ($fileName == 'sideimage') {
                            $informasiImage->sideimage_path = 'adminAssets/home/informasi/sideimage.' . $file->getClientOriginalExtension();
                        }

                        if ($fileName == 'backgroundimage') {
                            $informasiImage->backgroundimage_path = 'adminAssets/home/informasi/backgroundimage.' . $file->getClientOriginalExtension();
                        }

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }

                $informasiImage->save();
            }


            return redirect()->back()->with('success', 'Berhasil menyimpan Image');
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
            'judul' => 'required',
            'deskripsi' => 'required',
            'urutan' => 'required',

        ]);
        if ($validated) {
            $informasi = new Informasi;
            $informasi = $informasi->where('id', $id)->first();
            $informasi->judul = $request->judul;
            $informasi->deskripsi = $request->deskripsi;
            $informasi->urutan = $request->urutan;

            if (count($request->files) > 0) {
                File::delete($informasi->image_path);
                $file = $request->file('informasi');
                $upload_path = 'adminAssets/home/informasi';
                $informasi->image_path = 'adminAssets/home/informasi/' . $request->file('informasi')->getClientOriginalName();
                $file->move($upload_path, $request->file('informasi')->getClientOriginalName());
            }
            $informasi->save();
            return redirect()->back()->with('success', 'Berhasil mengubah Informasi');
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

        $informasi = new Informasi();
        File::delete($informasi->where('id', $id)->first()->image_path);
        $informasi = $informasi->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus Informasi");
    }
}
