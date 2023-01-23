<?php

namespace App\Http\Controllers\API\Permohonan;

use App\Http\Resources\JenisIdentitasResource;
use App\Http\Resources\LinkSurveiResource;
use App\Models\LayananPPID\JenisIdentitas;
use App\Models\LayananPPID\LinkSurvei;
use App\Models\Profil\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class LinkSurveiController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $linkSurvei = new LinkSurvei();
        $linkSurvei = $linkSurvei->first();

        return $this->sendResponse(
            new LinkSurveiResource($linkSurvei),
            'LinkSurvei retrieved successfully.');
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
        $linkSurvei = new LinkSurvei();
        $linkSurvei = $linkSurvei->first();

        return $this->sendResponse(
            new LinkSurveiResource($linkSurvei),
            'LinkSurvei retrieved successfully.');
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
