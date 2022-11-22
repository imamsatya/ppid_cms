<?php

namespace App\Http\Controllers\API\InformasiPublik;

use App\Http\Resources\InformasiBerkalaResource;
use App\Http\Resources\InformasiPublikResource;
use App\Http\Resources\InformasiSertaMertaResource;
use App\Http\Resources\KontakResource;
use App\Models\InformasiPublik\InformasiPublikBanner;
use App\Models\InformasiPublik\InformasiSecaraBerkala;
use App\Models\InformasiPublik\InformasiSertaMerta;
use App\Models\Profil\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class InformasiSertaMertaController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $informasi = InformasiSertaMerta::all();

        return $this->sendResponse(
            new InformasiSertaMertaResource($informasi->first()), 'InformasiSertaMerta retrieved successfully.');
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
        $informasi = InformasiSertaMerta::find($id);

        if (is_null($informasi)) {
            return $this->sendError('InformasiSertaMerta not found.');
        }

        return $this->sendResponse(
            new InformasiSertaMertaResource($informasi), 'InformasiSertaMerta retrieved successfully.');
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
