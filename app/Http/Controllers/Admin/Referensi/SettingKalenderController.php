<?php

namespace App\Http\Controllers\Admin\Referensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class SettingKalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $response = Http::get('https://simanis.bumn.go.id/api/getjadwalkerja');
        $kalender = $response->json();

        $kalenderLibur = Arr::where($kalender['data'], function ($value, $key) {
            return $value['keterangan'] !== null && ($value['jenis'] == 1 || $value['jenis'] == 2);
=======
        $response = Http::get('http://simanisdev.bumn.go.id/api/getjadwalkerja');
        $kalender = $response->json();

        $kalenderLibur = Arr::where($kalender['data'], function ($value, $key) {
            return $value['keterangan'] !== null && $value['jenis'] == 1;
>>>>>>> origin/main
        });


        return view('admin.referensi.setting_kalender', compact('kalenderLibur'));
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
