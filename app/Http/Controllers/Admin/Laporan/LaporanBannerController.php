<?php

namespace App\Http\Controllers\Admin\Laporan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Laporan\LaporanBanner;


class LaporanBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $validated = $request->validate([
            'banner' => 'required|mimes:png,jpg,jpeg|max:5120'
        ]);


        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        if ($validated) {
            $banner = new LaporanBanner();
            $banner = $banner->first();
            if ($banner) {
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/laporan/banner';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);

                        if ($fileName == 'banner') {
                            $banner->banner_path = 'adminAssets/laporan/banner/banner.' . $file->getClientOriginalExtension();
                        }
<<<<<<< HEAD
                        $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                        $path = $file->storeAs('public/adminAssets/laporan/banner', $fileName2);
=======

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
>>>>>>> origin/main
                    }
                }

                $banner->save();
            } else {
                $banner = new LaporanBanner();
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/laporan/banner';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $banner->banner_path = 'adminAssets/laporan/banner/banner.' . $file->getClientOriginalExtension();
                        }

<<<<<<< HEAD
                        $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                        $path = $file->storeAs('public/adminAssets/laporan/banner', $fileName2);
=======
                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
>>>>>>> origin/main
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
