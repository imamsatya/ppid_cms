<?php

namespace App\Http\Controllers\Admin\Laporan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Laporan\LaporanBanner;
use App\Models\Laporan\LaporanTriwulanan;

class LaporanTriwulananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $laporanBanner = new LaporanBanner();
        $laporanBanner = $laporanBanner->first();

        $laporanTriwulanan = new LaporanTriwulanan();
        $laporanTriwulanan = $laporanTriwulanan::all();
        return view('admin.laporan.laporan_triwulanan_pip', compact('laporanBanner', 'laporanTriwulanan'));
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
            'judulLaporan' => 'required',
            'file' => 'required|mimes:pdf'
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        if ($validated) {
            $laporanTriwulanan = new LaporanTriwulanan();
            $laporanTriwulanan->judul_laporan = $request->judulLaporan;
            if (count($request->files) > 0) {
                $files = $request->files;
                $upload_path = 'adminAssets/laporan/laporan_triwulanan';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        $laporanTriwulanan->file_path = 'adminAssets/laporan/laporan_triwulanan/' . $request->file($fileName)->getClientOriginalName();
                    }
                    if ($fileName == 'laporanImage') {
                        $laporanTriwulanan->thumbnail_path = 'adminAssets/laporan/laporan_triwulanan/' . $request->file($fileName)->getClientOriginalName();
                    }

                    $file->move($upload_path, $request->file($fileName)->getClientOriginalName());
                }
            }



            $laporanTriwulanan->save();

            return redirect()->back()->with('success', 'Berhasil menyimpan Laporan Triwulanan');
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
