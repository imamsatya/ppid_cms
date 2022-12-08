<?php

namespace App\Http\Controllers\Admin\FAQ;

use Illuminate\Http\Request;
use App\Models\FAQ\FaqBanner;
use App\Http\Controllers\Controller;

class FaqBannerController extends Controller
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
            $banner = new FaqBanner();
            $banner = $banner->first();
            if ($banner) {
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/faq/banner';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);

                        if ($fileName == 'banner') {
                            $banner->banner_path = 'adminAssets/faq/banner/banner.' . $file->getClientOriginalExtension();
                        }

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }

                $banner->save();
            } else {
                $banner = new FaqBanner();
                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/faq/banner';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $banner->banner_path = 'adminAssets/faq/banner/banner.' . $file->getClientOriginalExtension();
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
