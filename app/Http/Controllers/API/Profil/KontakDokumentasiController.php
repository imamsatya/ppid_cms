<?php

namespace App\Http\Controllers\API\Profil;

use App\Http\Resources\KontakDokumentasiResource;
use App\Models\Profil\KontakDokumentasiRuang;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class KontakDokumentasiController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $kontak = KontakDokumentasiRuang::all();

        return $this->sendResponse(
            new KontakDokumentasiResource($kontak->first()), 'KontakDokumentasiRuang retrieved successfully.');
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
        $kontak = KontakDokumentasiRuang::find($id);

        if (is_null($kontak)) {
            return $this->sendError('KontakDokumentasiRuang not found.');
        }

        return $this->sendResponse(
            new KontakDokumentasiResource($kontak), 'KontakDokumentasiRuang retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, KontakDokumentasiRuang $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(KontakDokumentasiRuang $product)
    {
        //
    }
}
