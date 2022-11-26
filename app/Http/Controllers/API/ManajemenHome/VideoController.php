<?php

namespace App\Http\Controllers\API\ManajemenHome;

use App\Http\Resources\VideoResource;
use App\Models\ManajemenHome\Video;
use App\Models\Profil\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class VideoController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $video = Video::all();

        return $this->sendResponse(VideoResource::collection($video), 'Video retrieved successfully.');
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
        $video = Video::find($id);

        if (is_null($video)) {
            return $this->sendError('Video not found.');
        }

        return $this->sendResponse(
            new VideoResource($video), 'Video retrieved successfully.');
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
