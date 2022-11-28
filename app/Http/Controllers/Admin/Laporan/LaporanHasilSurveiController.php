<?php

namespace App\Http\Controllers\Admin\Laporan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laporan\LaporanBanner;
use App\Models\Laporan\LaporanHasilSurvei;
use Illuminate\Support\Facades\File;
use Session;

class LaporanHasilSurveiController extends Controller
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

        $laporanHasilSurvei = new LaporanHasilSurvei();
        $laporanHasilSurvei = $laporanHasilSurvei::all();
        return view('admin.laporan.laporan_hasil_survei', compact('laporanBanner', 'laporanHasilSurvei'));
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
            $laporanHasilSurvei = new LaporanHasilSurvei();
            $laporanHasilSurvei->judul_laporan = $request->judulLaporan;
            if (count($request->files) > 0) {
                $files = $request->files;
                $upload_path = 'adminAssets/laporan/laporan_hasil_survei';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        $laporanHasilSurvei->file_path = 'adminAssets/laporan/laporan_hasil_survei/' . $request->file($fileName)->getClientOriginalName();
                    }
                    if ($fileName == 'laporanImage') {
                        $laporanHasilSurvei->thumbnail_path = 'adminAssets/laporan/laporan_hasil_survei/' . $request->file($fileName)->getClientOriginalName();
                    }


                    $file->move($upload_path, $request->file($fileName)->getClientOriginalName());
                }
            }



            $laporanHasilSurvei->save();

            return redirect()->back()->with('success', 'Berhasil menyimpan Laporan Hasil Survei');
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
            'file' => 'mimes:pdf|max:5120',
            'laporanImage' => 'mimes:png,jpg,jpeg|max:5120'

        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {

            $laporanHasilSurvei = new laporanHasilSurvei();
            $laporanHasilSurvei = $laporanHasilSurvei->where('id', $id)->first();
            $laporanHasilSurvei->judul_laporan = $request->judulLaporan;
            if (count($request->files) > 0) {


                $files = $request->files;
                $upload_path = 'adminAssets/laporan/laporan_hasil_survei';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        File::delete($laporanHasilSurvei->file_path);
                        $laporanHasilSurvei->file_path = 'adminAssets/laporan/laporan_hasil_survei/' . $request->file($fileName)->getClientOriginalName();
                    }
                    if ($fileName == 'laporanImage') {
                        File::delete($laporanHasilSurvei->thumbnail_path);
                        $laporanHasilSurvei->thumbnail_path = 'adminAssets/laporan/laporan_hasil_survei/' . $request->file($fileName)->getClientOriginalName();
                    }

                    $file->move($upload_path, $request->file($fileName)->getClientOriginalName());
                }
            }




            $laporanHasilSurvei->save();

            return redirect()->back()->with('success', 'Berhasil mengubah Laporan HasilSurvei');
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
        $laporanHasilSurvei = new LaporanHasilSurvei();
        File::delete($laporanHasilSurvei->where('id', $id)->first()->file_path);
        File::delete($laporanHasilSurvei->where('id', $id)->first()->thumbnail_path);
        $laporanHasilSurvei = $laporanHasilSurvei->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus Laporan Hasil Survei");
    }
}
