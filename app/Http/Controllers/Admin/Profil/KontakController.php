<?php

namespace App\Http\Controllers\Admin\Profil;

use Illuminate\Http\Request;
use App\Models\Profil\Kontak;
use App\Http\Controllers\Controller;
use App\Models\Profil\KontakDokumentasiRuang;
use Session;
use Illuminate\Support\Facades\File;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kontak = new Kontak();
        $kontak = $kontak->first();
        $dokumentasi = new KontakDokumentasiRuang();
        $dokumentasi = $dokumentasi::all();
        return view('admin.profil.kontak', compact('kontak', 'dokumentasi'));
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
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'waktu_pelayanan' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'banner' => 'max:5120|mimes:png,jpg,jpeg'
        ]);

        if ($validated) {


            $kontak = new kontak();
            $kontak = $kontak->first();

            if ($kontak) {
                $kontak->alamat = $request->alamat;
                $kontak->telepon = $request->telepon;
                $kontak->email = $request->email;
                $kontak->waktu_pelayanan = $request->waktu_pelayanan;
                $kontak->latitude = $request->latitude;
                $kontak->longitude = $request->longitude;

                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/profil/kontak';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $kontak->banner_path = 'adminAssets/profil/kontak/banner.' . $file->getClientOriginalExtension();
                        }

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }
                $kontak->save();
            } else {
                $kontak = new kontak();
                $kontak->alamat = $request->alamat;
                $kontak->telepon = $request->telepon;
                $kontak->email = $request->email;
                $kontak->waktu_pelayanan = $request->waktu_pelayanan;
                $kontak->latitude = $request->latitude;
                $kontak->longitude = $request->longitude;

                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/profil/kontak';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $kontak->banner_path = 'adminAssets/profil/kontak/banner.' . $file->getClientOriginalExtension();
                        }
                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }
                $kontak->save();
            }


            return redirect()->back()->with('success', 'Berhasil menyimpan kontak');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }

    public function dokumentasiStore(Request $request)
    {

        $validated = $request->validate([
            'dokumentasi' => 'required',
            'keterangan' => 'required',
            'urutan' => 'required',
            'dokumentasi' => 'max:5120|mimes:png,jpg,jpeg'
        ]);

        if ($validated) {


            $dokumentasi = new KontakDokumentasiRuang();
            $count = count($dokumentasi::all());
            $indexImage = $count + 1;


            $dokumentasi->keterangan = $request->keterangan;
            $dokumentasi->urutan = $request->urutan;
            $file = $request->file('dokumentasi');
            $upload_path = 'adminAssets/profil/kontak';
            $dokumentasi->image_path = 'adminAssets/profil/kontak/dokumentasi' . $indexImage . '.' . $file->getClientOriginalExtension();
            $file->move($upload_path, 'dokumentasi' . $indexImage . '.' . $file->getClientOriginalExtension());
            $dokumentasi->save();



            return redirect()->back()->with('success', 'Berhasil menyimpan kontak');
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
    public function dokumentasiDestroy($id)
    {
        //
        // dd($id);
        $dokumentasi = new KontakDokumentasiRuang();
        File::delete($dokumentasi->where('id', $id)->first()->image_path);
        $dokumentasi = $dokumentasi->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus dokumentasi");
    }

    public function destroy($id)
    {
        //
    }
}
