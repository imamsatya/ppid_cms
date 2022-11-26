<?php

namespace App\Http\Controllers\API\ManajemenHome;

use App\Http\Resources\InformasiImageResource;
use App\Models\ManajemenHome\InformasiImage;
use App\Models\Profil\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class InformasiImageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $informasi = InformasiImage::all();

        return $this->sendResponse(
            new InformasiImageResource($informasi->first()), 'InformasiImage retrieved successfully.');
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
        $informasi = InformasiImage::find($id);

        if (is_null($informasi)) {
            return $this->sendError('InformasiImage not found.');
        }

        return $this->sendResponse(
            new InformasiImageResource($informasi), 'InformasiImage retrieved successfully.');
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
