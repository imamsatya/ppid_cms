<?php

namespace App\Http\Controllers\API\Permohonan;

use App\Http\Resources\FAQResource;
use App\Http\Resources\StatusKeberatanResource;
use App\Http\Resources\StatusResource;
use App\Models\FAQ\Faq;
use App\Models\LayananPPID\Keberatan\StatusKeberatan;
use App\Models\LayananPPID\Status;
use App\Models\Profil\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class StatusKeberatanController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $informasi = StatusKeberatan::all();

        return $this->sendResponse(StatusKeberatanResource::collection($informasi), 'Status retrieved successfully.');
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
        $informasi = StatusKeberatan::find($id);

        if (is_null($informasi)) {
            return $this->sendError('StatusKeberatan not found.');
        }

        return $this->sendResponse(
            new StatusKeberatanResource($informasi), 'StatusKeberatan retrieved successfully.');
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
