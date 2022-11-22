<?php

namespace App\Http\Controllers\API\Profil;

use App\Http\Resources\KontakResource;
use App\Http\Resources\TugasFungsiResource;
use App\Models\Profil\Kontak;
use App\Models\Profil\TugasDanFungsi;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class TugasFungsiController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $tugas = TugasDanFungsi::all();

        return $this->sendResponse(
            new TugasFungsiResource($tugas->first()), 'TugasDanFungsi retrieved successfully.');
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
        $tugas = TugasDanFungsi::find($id);

        if (is_null($tugas)) {
            return $this->sendError('TugasDanFungsi not found.');
        }

        return $this->sendResponse(
            new TugasFungsiResource($tugas), 'TugasDanFungsi retrieved successfully.');
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
