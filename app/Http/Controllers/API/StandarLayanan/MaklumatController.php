<?php

namespace App\Http\Controllers\API\StandarLayanan;

use App\Http\Resources\MaklumatResource;
use App\Models\Profil\Kontak;
use App\Models\StandarLayanan\Maklumat;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class MaklumatController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $maklumat = Maklumat::all();

        return $this->sendResponse(
            new MaklumatResource($maklumat->first()), 'Maklumat retrieved successfully.');
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
        $maklumat = Maklumat::find($id);

        if (is_null($maklumat)) {
            return $this->sendError('Maklumat not found.');
        }

        return $this->sendResponse(
            new MaklumatResource($maklumat), 'Maklumat retrieved successfully.');
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
