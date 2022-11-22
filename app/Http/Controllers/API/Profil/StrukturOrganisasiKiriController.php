<?php

namespace App\Http\Controllers\API\Profil;

use App\Http\Resources\KontakResource;
use App\Http\Resources\StrukturOrganisasiKiriResource;
use App\Http\Resources\StrukturOrganisasiResource;
use App\Models\Profil\Kontak;
use App\Models\Profil\StrukturOrganisasi;
use App\Models\Profil\StrukturOrganisasiBaganKiri;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class StrukturOrganisasiKiriController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $struktur = StrukturOrganisasiBaganKiri::all();

        return $this->sendResponse(
            new StrukturOrganisasiKiriResource($struktur->first()), 'StrukturOrganisasi retrieved successfully.');
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
        $struktur = StrukturOrganisasiBaganKiri::find($id);

        if (is_null($struktur)) {
            return $this->sendError('StrukturOrganisasi not found.');
        }

        return $this->sendResponse(
            new StrukturOrganisasiKiriResource($struktur), 'StrukturOrganisasi retrieved successfully.');
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
