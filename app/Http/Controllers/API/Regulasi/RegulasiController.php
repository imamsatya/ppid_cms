<?php

namespace App\Http\Controllers\API\Regulasi;

use App\Http\Resources\KontakResource;
use App\Http\Resources\PeraturanKIPResource;
use App\Http\Resources\RegulasiBannerResource;
use App\Models\Profil\Kontak;
use App\Models\Regulasi\PeraturanKIP;
use App\Models\Regulasi\RegulasiBanner;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class RegulasiController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $regulasi = RegulasiBanner::all();

        return $this->sendResponse(
            new RegulasiBannerResource($regulasi->first()), 'RegulasiBanner retrieved successfully.');
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
        $regulasi = RegulasiBanner::find($id);

        if (is_null($regulasi)) {
            return $this->sendError('RegulasiBanner not found.');
        }

        return $this->sendResponse(
            new RegulasiBannerResource($regulasi), 'RegulasiBanner retrieved successfully.');
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
