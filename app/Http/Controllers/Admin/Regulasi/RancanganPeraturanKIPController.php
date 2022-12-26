<?php

namespace App\Http\Controllers\Admin\Regulasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Regulasi\RegulasiBanner;
use App\Models\Regulasi\RancanganPeraturanKIP;
use Illuminate\Support\Facades\File;
use Session;

class RancanganPeraturanKIPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $regulasiBanner = new RegulasiBanner();
        $regulasiBanner = $regulasiBanner->first();
        $rancanganPeraturanKIP = new RancanganPeraturanKIP();
        $rancanganPeraturanKIP = $rancanganPeraturanKIP::all();
        return view('admin.regulasi.rancangan_peraturan_kip', compact('regulasiBanner', 'rancanganPeraturanKIP'));
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
            'judulPeraturan' => 'required',
            'urutan' => 'required',
            'file' => 'required|mimes:pdf|max:5120'
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        if ($validated) {
            $rancanganPeraturanKIP = new RancanganPeraturanKIP();
            $rancanganPeraturanKIP->judul_peraturan = $request->judulPeraturan;
            if (count($request->files) > 0) {
                $files = $request->files;
                $upload_path = 'adminAssets/regulasi/rancangan_peraturan_kip';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        $rancanganPeraturanKIP->file_path = 'adminAssets/regulasi/rancangan_peraturan_kip/' . $request->file($fileName)->getClientOriginalName();
                    }
                    $fileName2 = $request->file($fileName)->getClientOriginalName();
                    $path = $file->storeAs('public/adminAssets/regulasi/rancangan_peraturan_kip', $fileName2);
                }
            }


            $rancanganPeraturanKIP->urutan = $request->urutan;
            $rancanganPeraturanKIP->save();

            return redirect()->back()->with('success', 'Berhasil menyimpan Rancangan Peraturan KIP');
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
            'judulPeraturan' => 'required',
            'urutan' => 'required',
            'file' => 'mimes:pdf|max:5120'

        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {

            $rancanganPeraturanKIP = new rancanganPeraturanKIP();
            $rancanganPeraturanKIP = $rancanganPeraturanKIP->where('id', $id)->first();
            $rancanganPeraturanKIP->judul_peraturan = $request->judulPeraturan;
            if (count($request->files) > 0) {
                File::delete($rancanganPeraturanKIP->file_path);
                $files = $request->files;
                $upload_path = 'adminAssets/regulasi/rancangan_peraturan_kip';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        $rancanganPeraturanKIP->file_path = 'adminAssets/regulasi/rancangan_peraturan_kip/' . $request->file($fileName)->getClientOriginalName();
                    }

                    $fileName2 = $request->file($fileName)->getClientOriginalName();
                    $path = $file->storeAs('public/adminAssets/regulasi/rancangan_peraturan_kip', $fileName2);
                }
            }


            $rancanganPeraturanKIP->urutan = $request->urutan;

            $rancanganPeraturanKIP->save();

            return redirect()->back()->with('success', 'Berhasil mengubah Rancangan Peraturan KIP');
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
        $rancanganPeraturanKIP = new RancanganPeraturanKIP();
        File::delete($rancanganPeraturanKIP->where('id', $id)->first()->file_path);
        $rancanganPeraturanKIP = $rancanganPeraturanKIP->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus Rancangan Peraturan KIP");
    }
}
