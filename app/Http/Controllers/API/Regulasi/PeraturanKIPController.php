<?php

namespace App\Http\Controllers\API\Regulasi;

use App\Http\Resources\KontakResource;
use App\Http\Resources\PeraturanKIPResource;
use App\Models\Profil\Kontak;
use App\Models\Regulasi\PeraturanKIP;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class PeraturanKIPController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $peraturan = PeraturanKIP::all();

        return $this->sendResponse(
            new PeraturanKIPResource($peraturan->first()), 'PeraturanKIP retrieved successfully.');
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
        $peraturan = PeraturanKIP::find($id);

        if (is_null($peraturan)) {
            return $this->sendError('PeraturanKIP not found.');
        }

        return $this->sendResponse(
            new PeraturanKIPResource($peraturan), 'PeraturanKIP retrieved successfully.');
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
