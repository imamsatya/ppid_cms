<?php

namespace App\Http\Controllers\API\Regulasi;

use App\Http\Resources\KontakResource;
use App\Http\Resources\PeraturanKIPResource;
use App\Http\Resources\RancanganPeraturanKIPResource;
use App\Models\Profil\Kontak;
use App\Models\Regulasi\PeraturanKIP;
use App\Models\Regulasi\RancanganPeraturanKIP;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class RancanganPeraturanKIPController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $peraturan = RancanganPeraturanKIP::all();

        return $this->sendResponse(RancanganPeraturanKIPResource::collection($peraturan), 'RancanganPeraturanKIP retrieved successfully.');
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
        $peraturan = RancanganPeraturanKIP::find($id);

        if (is_null($peraturan)) {
            return $this->sendError('RancanganPeraturanKIP not found.');
        }

        return $this->sendResponse(
            new RancanganPeraturanKIPResource($peraturan), 'RancanganPeraturanKIP retrieved successfully.');
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
