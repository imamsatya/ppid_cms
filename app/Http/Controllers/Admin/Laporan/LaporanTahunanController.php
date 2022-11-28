<?php

namespace App\Http\Controllers\Admin\Laporan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laporan\LaporanBanner;
use App\Models\Laporan\LaporanTahunan;
use Illuminate\Support\Facades\File;
use Session;

class LaporanTahunanController extends Controller
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

        $laporanTahunan = new LaporanTahunan();
        $laporanTahunan = $laporanTahunan::all();
        return view('admin.laporan.laporan_tahunan_pip', compact('laporanBanner', 'laporanTahunan'));
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
            'file' => 'required|mimes:pdf|max:5120',
            'laporanImage' => 'mimes:png,jpg,jpeg|max:5120'
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        if ($validated) {
            $laporanTahunan = new LaporanTahunan();
            $laporanTahunan->judul_laporan = $request->judulLaporan;
            if (count($request->files) > 0) {
                $files = $request->files;
                $upload_path = 'adminAssets/laporan/laporan_tahunan';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        $laporanTahunan->file_path = 'adminAssets/laporan/laporan_tahunan/' . $request->file($fileName)->getClientOriginalName();
                    }
                    if ($fileName == 'laporanImage') {
                        $laporanTahunan->thumbnail_path = 'adminAssets/laporan/laporan_tahunan/' . $request->file($fileName)->getClientOriginalName();
                    }


                    $file->move($upload_path, $request->file($fileName)->getClientOriginalName());
                }
            }



            $laporanTahunan->save();

            return redirect()->back()->with('success', 'Berhasil menyimpan Laporan Tahunan');
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
            'file' => 'mimes:pdf|max:5120'
            'laporanImage' => 'mimes:png,jpg,jpeg|max:5120'
        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {

            $laporanTahunan = new laporanTahunan();
            $laporanTahunan = $laporanTahunan->where('id', $id)->first();
            $laporanTahunan->judul_laporan = $request->judulLaporan;
            if (count($request->files) > 0) {


                $files = $request->files;
                $upload_path = 'adminAssets/laporan/laporan_tahunan';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        File::delete($laporanTahunan->file_path);
                        $laporanTahunan->file_path = 'adminAssets/laporan/laporan_tahunan/' . $request->file($fileName)->getClientOriginalName();
                    }
                    if ($fileName == 'laporanImage') {
                        File::delete($laporanTahunan->thumbnail_path);
                        $laporanTahunan->thumbnail_path = 'adminAssets/laporan/laporan_tahunan/' . $request->file($fileName)->getClientOriginalName();
                    }

                    $file->move($upload_path, $request->file($fileName)->getClientOriginalName());
                }
            }




            $laporanTahunan->save();

            return redirect()->back()->with('success', 'Berhasil mengubah Laporan Tahunan');
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
        $laporanTahunan = new LaporanTahunan();
        File::delete($laporanTahunan->where('id', $id)->first()->file_path);
        File::delete($laporanTahunan->where('id', $id)->first()->thumbnail_path);
        $laporanTahunan = $laporanTahunan->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus Laporan Tahunan");
    }
}
