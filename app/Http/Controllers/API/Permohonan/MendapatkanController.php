<?php

namespace App\Http\Controllers\API\Permohonan;

use App\Http\Resources\FAQResource;
use App\Http\Resources\JenisIdentitasResource;
use App\Http\Resources\MendapatkanResource;
use App\Http\Resources\PpidMemberikanResource;
use App\Http\Resources\StatusResource;
use App\Models\FAQ\Faq;
use App\Models\LayananPPID\JenisIdentitas;
use App\Models\LayananPPID\Mendapatkan;
use App\Models\LayananPPID\PpidMemberikan;
use App\Models\LayananPPID\Status;
use App\Models\Profil\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class MendapatkanController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $informasi = Mendapatkan::all();

        return $this->sendResponse(MendapatkanResource::collection($informasi),
            'Mendapatkan retrieved successfully.');
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
        $informasi = Mendapatkan::find($id);

        if (is_null($informasi)) {
            return $this->sendError('Mendapatkan not found.');
        }

        return $this->sendResponse(
            new MendapatkanResource($informasi), 'Mendapatkan retrieved successfully.');
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
