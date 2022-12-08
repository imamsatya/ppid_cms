<?php

namespace App\Http\Controllers\API\Profil;

use App\Http\Resources\KontakResource;
use App\Http\Resources\StrukturOrganisasiResource;
use App\Models\Profil\Kontak;
use App\Models\Profil\StrukturOrganisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class StrukturOrganisasiController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $struktur = StrukturOrganisasi::all();

        return $this->sendResponse(
            new StrukturOrganisasiResource($struktur->first()), 'StrukturOrganisasi retrieved successfully.');
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
        $struktur = StrukturOrganisasi::find($id);

        if (is_null($struktur)) {
            return $this->sendError('StrukturOrganisasi not found.');
        }

        return $this->sendResponse(
            new StrukturOrganisasiResource($struktur), 'StrukturOrganisasi retrieved successfully.');
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
