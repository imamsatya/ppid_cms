<?php

namespace App\Http\Controllers\API\Laporan;

use App\Http\Resources\LaporanTahunanResource;
use App\Http\Resources\LaporanTriwulananResource;
use App\Models\Laporan\LaporanTahunan;
use App\Models\Laporan\LaporanTriwulanan;
use App\Models\Profil\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class LaporanTriwulananController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $laporan = LaporanTriwulanan::all();

        return $this->sendResponse(
            LaporanTriwulananResource::collection($laporan), 'LaporanTriwulanan retrieved successfully.');
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $laporan = LaporanTriwulanan::find($id);

        if (is_null($laporan)) {
            return $this->sendError('LaporanTriwulanan not found.');
        }

        return $this->sendResponse(
            new LaporanTriwulananResource($laporan), 'LaporanTriwulanan retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Kontak $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Kontak $product)
    {
        //
    }
}
