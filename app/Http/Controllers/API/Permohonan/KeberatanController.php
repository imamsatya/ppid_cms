<?php

namespace App\Http\Controllers\API\Permohonan;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class KeberatanController extends BaseController

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

        if (!$currentUser) {
            $this->sendError('No user!');
        }

        $result = DB::table('ppid_keberatan')
            ->select('ppid_keberatan.*', 'jenis_status_keberatan.status as nama_status',
                'jenis_status_keberatan.id as id_status', 'kategori_keberatan.jenis_keberatan as jenis_keberatan',
                'proses_keberatan.ket_jawaban_path as jawaban')
            ->leftjoin('status_keberatan', 'status_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->leftjoin('jenis_status_keberatan', 'jenis_status_keberatan.id', '=', 'status_keberatan.id_jenis_status_keberatan')
            ->leftjoin('kategori_keberatan', 'kategori_keberatan.id', '=', 'ppid_keberatan.id_kategori_keberatan')
            ->leftjoin('proses_keberatan', 'proses_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->where('ppid_keberatan.id_ppid_pendaftar', $currentUserId)
            ->get();

        return $this->sendResponse($result,
            'Data keberatan retrieved successfully');
    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\JsonResponse

     */

    public function store(Request $request)
    {
        $currentUserId = Auth::guard('api')->id();
        $currentUser = Auth::guard('api')->user();
        $input = $request->all();
        $dateCreated = \Carbon\Carbon::now();

        if (!$currentUser) {
            $this->sendError('No user!');
        }

        $validator = Validator::make($input, [
            'perihal_keberatan' => 'required',
            'id_permohonan' => 'required',
            'id_kategori_keberatan' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // ppid_permohonan
        $insertedId = DB::table('ppid_keberatan')->insertGetId([
            'id_ppid_pendaftar' => $currentUserId,
            'ticket_keberatan' => '',
            'jenis_kanal' => 'app',
            'perihal_keberatan' => $input['perihal_keberatan'],
            'id_permohonan' => $input['id_permohonan'],
            'id_kategori_keberatan' => $input['id_kategori_keberatan'],
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated
        ]);

        // status_permohonan
        DB::table('status_keberatan')->insert([
            'id_ppid_keberatan' => $insertedId,
            'id_jenis_status_keberatan' => 1, // belum dikonfirmasi
            'modified_by' => null,
            'modified_date' => $dateCreated,
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
        ]);

        return $this->sendResponse('',
            'Data keberatan saved successfully');
    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\JsonResponse

     */

    public function show($id)

    {
        $currentUser = Auth::guard('api')->user();

        if (!$currentUser) {
            $this->sendError('No user!');
        }
        $result = DB::table('ppid_keberatan')
            ->select('ppid_keberatan.*',
                'kategori_keberatan.jenis_keberatan as jenis_keberatan', 'ppid_permohonan.ticket_permohonan',
                'ppid_permohonan.informasi_diminta', 'ppid_pendaftar.identitas_file_path',
                'proses_keberatan.ket_jawaban_path as jawaban')
            ->leftjoin('kategori_keberatan', 'kategori_keberatan.id', '=', 'ppid_keberatan.id_kategori_keberatan')
            ->leftjoin('ppid_permohonan', 'ppid_permohonan.id', '=', 'ppid_keberatan.id_permohonan')
            ->leftjoin('ppid_pendaftar', 'ppid_pendaftar.id', '=', 'ppid_keberatan.id_ppid_pendaftar')
            ->leftjoin('proses_keberatan', 'proses_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->where('ppid_keberatan.id', $id)->first();
        return $this->sendResponse(
            $result, 'DataKeberatan retrieved successfully.');
    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\JsonResponse

     */

    public function update(Request $request, $id)

    {
        $currentUserId = Auth::guard('api')->id();
        $input = $request->all();
        $dateCreated = \Carbon\Carbon::now();

        DB::table('ppid_keberatan')->where('id', $id)->update([
            'id_ppid_pendaftar' => $currentUserId,
            'jenis_kanal' => 'app',
            'perihal_keberatan' => $input['perihal_keberatan'],
            'id_permohonan' => $input['id_permohonan'],
            'id_kategori_keberatan' => $input['id_kategori_keberatan'],
            "updated_at" => $dateCreated
        ]);

        return $this->sendResponse('',
            'Data keberatan saved successfully');
    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\JsonResponse

     */

    public function destroy($id)

    {
        $statusKeberatan = DB::table('status_keberatan')->where([
            'id_ppid_keberatan' => $id,
            // 'aktif' => 1
        ])->first();

        if ($statusKeberatan && $statusKeberatan->id_jenis_status_keberatan == 1) { // belum dikonfirmasi
            DB::table('status_keberatan')->where('id_ppid_keberatan', $id)->delete();
            DB::table('ppid_keberatan')->where('id', $id)->delete();

            return $this->sendResponse(
                '', 'DataKeberatan deleted successfully.');
        }

    }

}

