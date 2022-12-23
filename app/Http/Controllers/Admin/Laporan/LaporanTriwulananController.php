<?php

namespace App\Http\Controllers\Admin\Laporan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Laporan\LaporanBanner;
use App\Models\Laporan\LaporanTriwulanan;
use Illuminate\Support\Facades\File;
use Session;

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
            'file' => 'required|mimes:pdf|max:15360',
            'laporanImage' => 'mimes:png,jpg,jpeg|max:5120'
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


                    $fileName2 = $request->file($fileName)->getClientOriginalName();
                    $path = $file->storeAs('public/adminAssets/laporan/laporan_triwulanan', $fileName2);
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
        $validated = $request->validate([
            'judulLaporan' => 'required',
            'file' => 'mimes:pdf|max:15360',
            'laporanImage' => 'mimes:png,jpg,jpeg|max:5120'

        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {

            $laporanTriwulanan = new laporanTriwulanan();
            $laporanTriwulanan = $laporanTriwulanan->where('id', $id)->first();
            $laporanTriwulanan->judul_laporan = $request->judulLaporan;
            if (count($request->files) > 0) {


                $files = $request->files;
                $upload_path = 'adminAssets/laporan/laporan_triwulanan';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        File::delete($laporanTriwulanan->file_path);
                        $laporanTriwulanan->file_path = 'adminAssets/laporan/laporan_triwulanan/' . $request->file($fileName)->getClientOriginalName();
                    }
                    if ($fileName == 'laporanImage') {
                        File::delete($laporanTriwulanan->thumbnail_path);
                        $laporanTriwulanan->thumbnail_path = 'adminAssets/laporan/laporan_triwulanan/' . $request->file($fileName)->getClientOriginalName();
                    }

                    $fileName2 = $request->file($fileName)->getClientOriginalName();
                    $path = $file->storeAs('public/adminAssets/laporan/laporan_triwulanan', $fileName2);
                }
            }




            $laporanTriwulanan->save();

            return redirect()->back()->with('success', 'Berhasil mengubah Laporan Triwulanan');
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
        $laporanTriwulanan = new LaporanTriwulanan();
        File::delete($laporanTriwulanan->where('id', $id)->first()->file_path);
        File::delete($laporanTriwulanan->where('id', $id)->first()->thumbnail_path);
        $laporanTriwulanan = $laporanTriwulanan->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus peraturan KIP");
    }
}
