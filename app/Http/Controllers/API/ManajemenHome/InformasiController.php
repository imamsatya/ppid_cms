<?php

namespace App\Http\Controllers\API\ManajemenHome;

use App\Http\Resources\InformasiResource;
use App\Models\ManajemenHome\Informasi;
use App\Models\Profil\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class InformasiController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $informasi = Informasi::all();

        return $this->sendResponse(InformasiResource::collection($informasi), 'Informasi retrieved successfully.');
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
        $informasi = Informasi::find($id);

        if (is_null($informasi)) {
            return $this->sendError('Informasi not found.');
        }

        return $this->sendResponse(
            new InformasiResource($informasi), 'Informasi retrieved successfully.');
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
