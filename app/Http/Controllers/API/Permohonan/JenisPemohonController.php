<?php

namespace App\Http\Controllers\API\Permohonan;

use App\Http\Resources\FAQResource;
use App\Http\Resources\JenisIdentitasResource;
use App\Http\Resources\JenisPemohonResource;
use App\Http\Resources\PpidMemberikanResource;
use App\Http\Resources\StatusResource;
use App\Models\FAQ\Faq;
use App\Models\LayananPPID\JenisIdentitas;
use App\Models\LayananPPID\JenisPemohon;
use App\Models\LayananPPID\PpidMemberikan;
use App\Models\LayananPPID\Status;
use App\Models\Profil\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class JenisPemohonController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $informasi = JenisPemohon::all();

        return $this->sendResponse(JenisPemohonResource::collection($informasi),
            'JenisPemohon retrieved successfully.');
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
        $informasi = JenisPemohon::find($id);

        if (is_null($informasi)) {
            return $this->sendError('JenisPemohon not found.');
        }

        return $this->sendResponse(
            new JenisPemohonResource($informasi), 'JenisPemohon retrieved successfully.');
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
