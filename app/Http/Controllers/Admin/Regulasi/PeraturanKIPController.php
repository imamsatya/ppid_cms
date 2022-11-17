<?php

namespace App\Http\Controllers\Admin\Regulasi;

use App\Http\Controllers\Controller;
use App\Models\Regulasi\PeraturanKIP;
use App\Models\Regulasi\RegulasiBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Session;

class PeraturanKIPController extends Controller
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

        $peraturanKIP = new PeraturanKIP();
        $peraturanKIP = $peraturanKIP::all();
        return view('admin.regulasi.peraturan_kip', compact('regulasiBanner', 'peraturanKIP'));
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
            'file' => 'required|mimes:pdf'
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        if ($validated) {
            $peraturanKIP = new PeraturanKIP();
            $peraturanKIP->judul_peraturan = $request->judulPeraturan;
            if (count($request->files) > 0) {
                $files = $request->files;
                $upload_path = 'adminAssets/regulasi/peraturan_kip';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        $peraturanKIP->file_path = 'adminAssets/regulasi/peraturan_kip/' . $request->file($fileName)->getClientOriginalName();
                    }

                    $file->move($upload_path, $request->file($fileName)->getClientOriginalName());
                }
            }


            $peraturanKIP->urutan = $request->urutan;
            $peraturanKIP->save();

            return redirect()->back()->with('success', 'Berhasil menyimpan Bagan Kanan');
        }
    }

    public function bannerStore(Request $request)
    {

        $validated = $request->validate([
            'banner' => 'required|mimes:png,jpg,jpeg'
        ]);


        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        if ($validated) {
            $banner = new RegulasiBanner();
            $banner = $banner->first();
            if ($banner) {
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/regulasi/banner';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);

                        if ($fileName == 'banner') {
                            $banner->banner_path = 'adminAssets/regulasi/banner/banner.' . $file->getClientOriginalExtension();
                        }

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }

                $banner->save();
            } else {
                $banner = new RegulasiBanner();
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/regulasi/banner';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $banner->banner_path = 'adminAssets/regulasi/banner/banner.' . $file->getClientOriginalExtension();
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
            'judulPeraturan' => 'required',
            'urutan' => 'required',

        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {

            $peraturanKIP = new PeraturanKIP();
            $peraturanKIP = $peraturanKIP->where('id', $id)->first();
            $peraturanKIP->judul_peraturan = $request->judulPeraturan;
            if (count($request->files) > 0) {
                File::delete($peraturanKIP->file_path);
                $files = $request->files;
                $upload_path = 'adminAssets/regulasi/peraturan_kip';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        $peraturanKIP->file_path = 'adminAssets/regulasi/peraturan_kip/' . $request->file($fileName)->getClientOriginalName();
                    }

                    $file->move($upload_path, $request->file($fileName)->getClientOriginalName());
                }
            }


            $peraturanKIP->urutan = $request->urutan;

            $peraturanKIP->save();

            return redirect()->back()->with('success', 'Berhasil mengubah Peraturan KIP');
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

        $peraturanKIP = new PeraturanKIP();
        File::delete($peraturanKIP->where('id', $id)->first()->file_path);
        $peraturanKIP = $peraturanKIP->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus peraturan KIP");
    }
}
