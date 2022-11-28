<?php

namespace App\Http\Controllers\API\Laporan;

use App\Http\Resources\FAQResource;
use App\Http\Resources\LaporanHasilSurveiResource;
use App\Models\FAQ\Faq;
use App\Models\Laporan\LaporanHasilSurvei;
use App\Models\Profil\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class LaporanHasilSurveiController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $laporan = LaporanHasilSurvei::all();

        return $this->sendResponse(
            LaporanHasilSurveiResource::collection($laporan), 'LaporanHasilSurvei retrieved successfully.');
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
        $laporan = LaporanHasilSurvei::find($id);

        if (is_null($laporan)) {
            return $this->sendError('LaporanHasilSurvei not found.');
        }

        return $this->sendResponse(
            new LaporanHasilSurveiResource($laporan), 'LaporanHasilSurvei retrieved successfully.');
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
