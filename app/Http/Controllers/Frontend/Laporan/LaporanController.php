<?php

namespace App\Http\Controllers\Frontend\Laporan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Laporan\LaporanBanner;
use App\Models\Laporan\LaporanTahunan;
use App\Models\Laporan\LaporanTriwulanan;
use App\Models\Laporan\LaporanHasilSurvei;

class LaporanController extends Controller
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
        $laporanTriwulanan = $laporanTriwulanan::paginate($perPage = 9, $columns = ['*'], $pageName = 'laporan_triwulanan');
        $laporanTahunan = new LaporanTahunan();
        $laporanTahunan = $laporanTahunan::paginate($perPage = 9, $columns = ['*'], $pageName = 'laporan_tahunan');
        $laporanHasilSurvei = new LaporanHasilSurvei();
        $laporanHasilSurvei = $laporanHasilSurvei::paginate($perPage = 9, $columns = ['*'], $pageName = 'laporan_hasil_survei');

        return view('frontend.laporan.laporan', compact('laporanBanner', 'laporanTriwulanan', 'laporanTahunan', 'laporanHasilSurvei'));
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
