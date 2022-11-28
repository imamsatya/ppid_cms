<?php

namespace App\Http\Controllers\API\Profil;

use App\Http\Resources\KontakResource;
use App\Http\Resources\LinkAppResource;
use App\Http\Resources\SosialMediaResource;
use App\Models\ManajemenHome\LinkApp;
use App\Models\Profil\Kontak;
use App\Models\Profil\SosialMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class LinkAppController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $linkapp = LinkApp::all();

        return $this->sendResponse(
            new LinkAppResource($linkapp->first()), 'LinkApp retrieved successfully.');
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
        $linkapp = LinkApp::find($id);

        if (is_null($linkapp)) {
            return $this->sendError('LinkApp not found.');
        }

        return $this->sendResponse(
            new LinkAppResource($linkapp), 'LinkApp retrieved successfully.');
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
