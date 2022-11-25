<?php

namespace App\Http\Controllers\API\StandarLayanan;

use App\Http\Resources\BiayaLayananResource;
use App\Http\Resources\InformasiImageResource;
use App\Models\Profil\Kontak;
use App\Models\StandarLayanan\BiayaLayanan;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class BiayaLayananController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $biaya = BiayaLayanan::all();

        return $this->sendResponse(
            new BiayaLayananResource($biaya->first()), 'BiayaLayanan retrieved successfully.');
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
        $biaya = BiayaLayanan::find($id);

        if (is_null($biaya)) {
            return $this->sendError('BiayaLayanan not found.');
        }

        return $this->sendResponse(
            new InformasiImageResource($biaya), 'BiayaLayanan retrieved successfully.');
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
