<?php

namespace App\Http\Controllers\Admin\Profil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profil\StrukturOrganisasi;
use App\Models\Profil\KontakDokumentasiRuang;
use App\Models\Profil\StrukturOrganisasiBaganKiri;
use App\Models\Profil\StrukturOrganisasiBaganKanan;
use Session;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $strukturOrganisasi = new StrukturOrganisasi();
        $strukturOrganisasi = $strukturOrganisasi->first();
        $baganKiri = new StrukturOrganisasiBaganKiri();
        $baganKiri = $baganKiri::all();
        $baganKanan = new StrukturOrganisasiBaganKanan();
        $baganKanan = $baganKanan::all();


        return view('admin.profil.strukturorganisasi', compact('strukturOrganisasi', 'baganKiri', 'baganKanan'));
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
            'nomenklaturRepeater' => 'required',
            'banner' => 'max:5120|mimes:png,jpg,jpeg'
        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        if ($validated) {
            $strukturOrganisasi = new StrukturOrganisasi();
            $strukturOrganisasi = $strukturOrganisasi->first();
            if ($strukturOrganisasi) {
                $strukturOrganisasi->judul = $request->judul;

                //Bagan Kiri

                $baganKiri = new StrukturOrganisasiBaganKiri();
                $baganKiri = $baganKiri::truncate();
                foreach ($request->nomenklaturRepeater as $key => $nomenklatur) {
                    $baganKiri = new StrukturOrganisasiBaganKiri();
                    if ($nomenklatur['nomenklatur']) {
                        $baganKiri->nomenklatur = $nomenklatur['nomenklatur'];
                        $baganKiri->save();
                    }
                }

                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/profil/struktur_organisasi';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $strukturOrganisasi->banner_path = 'adminAssets/profil/struktur_organisasi/banner.' . $file->getClientOriginalExtension();
                        }

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }

                $strukturOrganisasi->save();
            } else {
                $strukturOrganisasi = new StrukturOrganisasi();
                $strukturOrganisasi->judul = $request->judul;

                //Bagan Kiri
                $baganKiri = new StrukturOrganisasiBaganKiri();
                $baganKiri = $baganKiri::truncate();
                foreach ($request->nomenklaturRepeater as $key => $nomenklatur) {
                    $baganKiri = new StrukturOrganisasiBaganKiri();
                    if ($nomenklatur['nomenklatur']) {
                        $baganKiri->nomenklatur = $nomenklatur['nomenklatur'];
                        $baganKiri->save();
                    }
                }
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/profil/struktur_organisasi';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $strukturOrganisasi->banner_path = 'adminAssets/profil/struktur_organisasi/banner.' . $file->getClientOriginalExtension();
                        }

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }
                $strukturOrganisasi->save();
            }


            return redirect()->back()->with('success', 'Berhasil menyimpan Struktur Organisasi');
        }
    }

    public function baganKananStore(Request $request)
    {
        $validated = $request->validate([
            'nomenklatur' => 'required',
            'deskripsi' => 'required',
            'urutan' => 'required',
        ]);

        if ($validated) {
            $baganKanan = new StrukturOrganisasiBaganKanan();
            $baganKanan->nomenklatur = $request->nomenklatur;
            $baganKanan->deskripsi = $request->deskripsi;
            $baganKanan->urutan = $request->urutan;
            $baganKanan->save();

            return redirect()->back()->with('success', 'Berhasil menyimpan Bagan Kanan');
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

    public function baganKananUpdate(Request $request, $id)
    {
        //

        $validated = $request->validate([
            'nomenklatur' => 'required',
            'deskripsi' => 'required',
            'urutan' => 'required',
        ]);

        if ($validated) {
            $baganKanan = new StrukturOrganisasiBaganKanan();
            $baganKanan = $baganKanan->where('id', $id)->first();
            $baganKanan->nomenklatur = $request->nomenklatur;
            $baganKanan->deskripsi = $request->deskripsi;
            $baganKanan->urutan = $request->urutan;
            $baganKanan->save();

            return redirect()->back()->with('success', 'Berhasil mengubah Bagan Kanan');
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
    }

    public function baganKananDestroy($id)
    {
        //
        // dd($id);
        $baganKanan = new StrukturOrganisasiBaganKanan();
        $baganKanan = $baganKanan->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus dokumentasi");
    }
}
