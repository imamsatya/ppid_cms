<?php

namespace App\Http\Controllers\API\FAQ;

use App\Http\Resources\FAQResource;
use App\Models\FAQ\Faq;
use App\Models\Profil\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class FAQController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $informasi = Faq::all();

        return $this->sendResponse(FAQResource::collection($informasi), 'FAQ retrieved successfully.');
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
        $informasi = Faq::find($id);

        if (is_null($informasi)) {
            return $this->sendError('FAQ not found.');
        }

        return $this->sendResponse(
            new FAQResource($informasi), 'FAQ retrieved successfully.');
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
