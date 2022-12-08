<?php

namespace App\Http\Controllers\API\Permohonan;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\LayananPPID\DataPermohonan;
use App\Models\LayananPPID\ForwardPermohonan;
use App\Models\LayananPPID\JawabPermohonan;
use App\Models\LayananPPID\JenisPermohonan;
use App\Models\LayananPPID\LogPermohonan;
use App\Models\LayananPPID\RejectPermohonan;
use App\Models\LayananPPID\Status;
use App\Models\LayananPPID\StatusPermohonan;

use App\Http\Resources\DataPermohonanResource;
use App\Http\Resources\ForwardPermohonanResource;
use App\Http\Resources\JawabPermohonanResource;
use App\Http\Resources\JenisPermohonanResource;
use App\Http\Resources\LogPermohonanResource;
use App\Http\Resources\RejectPermohonanResource;
use App\Http\Resources\StatusResource;
use App\Http\Resources\StatusPermohonanResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PermohonanController extends BaseController

{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function index()
    {
        $currentUser = Auth::guard('api')->user();
        $currentUserId = Auth::guard('api')->id();
        $result = DB::table('ppid_permohonan')
            ->select('ppid_permohonan.*', 'status.name as nama_status', 'status.id as id_status')
            ->join('status_permohonan', 'status_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
            ->join('status', 'status.id', '=', 'status_permohonan.id_status')
            ->where('status_permohonan.aktif', 1)
            ->where('ppid_permohonan.id_ppid_pendaftar', $currentUserId)
            ->get();

        return $this->sendResponse(DataPermohonanResource::collection($result),
            'Data permohonan retrieved successfully');
    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\JsonResponse

     */

    public function store(Request $request)
    {
        // TODO: ADD NEW PERMOHONAN
    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {
        // TODO: SHOW SPECIFIC PERMOHONAN
    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\JsonResponse

     */

    public function update(Request $request, DataPermohonan $product)

    {
        // TODO: UPDATE SPECIFIC PERMOHONAN
    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy(DataPermohonan $product)

    {
        // TODO: DELETE SPECIFIC PERMOHONAN
    }

}
