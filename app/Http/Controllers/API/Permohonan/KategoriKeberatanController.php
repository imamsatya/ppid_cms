<?php

namespace App\Http\Controllers\API\Permohonan;

use App\Http\Resources\FAQResource;
use App\Http\Resources\JenisIdentitasResource;
use App\Http\Resources\KategoriKeberatanResource;
use App\Http\Resources\PpidMemberikanResource;
use App\Http\Resources\StatusResource;
use App\Models\FAQ\Faq;
use App\Models\LayananPPID\JenisIdentitas;
use App\Models\LayananPPID\Keberatan\KategoriKeberatan;
use App\Models\LayananPPID\PpidMemberikan;
use App\Models\LayananPPID\Status;
use App\Models\Profil\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class KategoriKeberatanController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $informasi = KategoriKeberatan::all();

        return $this->sendResponse(KategoriKeberatanResource::collection($informasi),
            'KategoriKeberatan retrieved successfully.');
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
        $informasi = KategoriKeberatan::find($id);

        if (is_null($informasi)) {
            return $this->sendError('KategoriKeberatan not found.');
        }

        return $this->sendResponse(
            new KategoriKeberatanResource($informasi), 'KategoriKeberatan retrieved successfully.');
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
