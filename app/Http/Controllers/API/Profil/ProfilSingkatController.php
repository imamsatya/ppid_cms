<?php

namespace App\Http\Controllers\API\Profil;

use App\Http\Resources\KontakResource;
use App\Http\Resources\ProfilSingkatResource;
use App\Models\Profil\Kontak;
use App\Models\Profil\ProfilSingkat;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class ProfilSingkatController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $profil = ProfilSingkat::all();

        return $this->sendResponse(
            new ProfilSingkatResource($profil->first()), 'ProfilSingkat retrieved successfully.');
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
        $profilSingkat = ProfilSingkat::find($id);

        if (is_null($profilSingkat)) {
            return $this->sendError('ProfilSingkat not found.');
        }

        return $this->sendResponse(
            new ProfilSingkatResource($profilSingkat), 'ProfilSingkat retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, ProfilSingkat $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(ProfilSingkat $product)
    {
        //
    }
}
