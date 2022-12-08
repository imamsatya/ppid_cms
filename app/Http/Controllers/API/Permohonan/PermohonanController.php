<?php

namespace App\Http\Controllers\API\Permohonan;

use App\Http\Resources\FAQBannerResource;
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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class PermohonanController extends BaseController

{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function index()
    {
        $currentUserId = Auth::guard('api')->id();
        $result = DB::table('ppid_permohonan')
            ->select('ppid_permohonan.*', 'status.name as nama_status', 'status.id as id_status')
            ->join('status_permohonan', 'status_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
            ->join('status', 'status.id', '=', 'status_permohonan.id_status')
            ->where('status_permohonan.aktif', 1)
            ->where('ppid_permohonan.id_ppid_pendaftar', $currentUserId)
            ->get();

        return $this->sendResponse($result,
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
        $currentUser = Auth::guard('api')->user();
        $input = $request->all();
        $dateCreated = \Carbon\Carbon::now();

        if (!$currentUser) {
            $this->sendError('No user!');
        }

        $validator = Validator::make($input, [
            'id_ppid_pendaftar' => 'required',
            'ticket_permohonan' => 'required',
            'jenis_kanal' => 'required',
            'informasi_diminta' => 'required',
            'tujuan_informasi' => 'required',
            'id_cara' => 'required',
            'id_mendapatkan' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $identitas = $currentUser->identitas_file_path;

        // ppid_permohonan
        $insertedId = DB::table('ppid_permohonan')->insertGetId([
            'id_ppid_pendaftar' => $input['id_ppid_pendaftar'],
            'ticket_permohonan' => $input['ticket_permohonan'],
            'jenis_kanal' => $input['jenis_kanal'],
            'informasi_diminta' => $input['informasi_diminta'],
            'tujuan_informasi' => $input['tujuan_informasi'],
            'id_cara' => $input['id_cara'],
            'id_mendapatkan' => $input['id_mendapatkan'],
            'file_identitas' => $identitas,
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated
        ]);

        // status_permohonan
        DB::table('status_permohonan')->insert([
            'id_ppid_permohonan' => $insertedId,
            'id_status' => 1, // permohonan masuk,
            'modified_by' => null,
            'modified_date' => $dateCreated,
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
            'aktif' => 1
        ]);

        // log_permohonan
        DB::table('log_permohonan')->insert([
            'id_ppid_permohonan' => $insertedId,
            'status' => 1, // permohonan masuk
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
        ]);

        $result = DB::table('ppid_permohonan')
            ->select('ppid_permohonan.*', 'ppid_mendapatkan.name as cara_mendapatkan', 'ppid_memberikan.name as cara_memberikan')
            ->join('ppid_mendapatkan', 'ppid_mendapatkan.id', '=', 'ppid_permohonan.id_mendapatkan')
            ->join('ppid_memberikan', 'ppid_memberikan.id', '=', 'ppid_permohonan.id_cara')
            ->where('ppid_permohonan.id', $insertedId)->first();

        return $this->sendResponse($result,
            'Data permohonan saved successfully');
    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\JsonResponse

     */

    public function show($id)

    {
        $result = DB::table('ppid_permohonan')
            ->select('ppid_permohonan.*', 'ppid_mendapatkan.name as cara_mendapatkan', 'ppid_memberikan.name as cara_memberikan')
            ->join('ppid_mendapatkan', 'ppid_mendapatkan.id', '=', 'ppid_permohonan.id_mendapatkan')
            ->join('ppid_memberikan', 'ppid_memberikan.id', '=', 'ppid_permohonan.id_cara')
            ->where('ppid_permohonan.id', $id)->first();

        $status = DB::table('status_permohonan')
            ->select('*')
            ->where('id_ppid_permohonan', $id)
            ->first();

        if (is_null($result) || is_null($status)) {
            return $this->sendError('DataPermohonan not found.');
        }

        $status_name = DB::table('status')
            ->select('*')
            ->where('id', $status->id_status)
            ->first();

        $result->status = $status->id_status;
        $result->status_name = $status_name->name;
        return $this->sendResponse(
            $result, 'DataPermohonan retrieved successfully.');
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

        $oldData = DB::table('ppid_permohonan')
            ->select('ppid_permohonan.*', 'ppid_mendapatkan.name as cara_mendapatkan', 'ppid_memberikan.name as cara_memberikan')
            ->join('ppid_mendapatkan', 'ppid_mendapatkan.id', '=', 'ppid_permohonan.id_mendapatkan')
            ->join('ppid_memberikan', 'ppid_memberikan.id', '=', 'ppid_permohonan.id_cara')
            ->where('ppid_permohonan.id', $id)->first();

        $id_ppid_pendaftar = $oldData->id_ppid_pendaftar;
        if (array_key_exists('id_ppid_pendaftar', $input)) {
            $id_ppid_pendaftar = $input['id_ppid_pendaftar'];
        }

        $ticket_permohonan = $oldData->ticket_permohonan;
        if (array_key_exists('ticket_permohonan', $input)) {
            $ticket_permohonan = $input['ticket_permohonan'];
        }

        $jenis_kanal = $oldData->jenis_kanal;
        if (array_key_exists('jenis_kanal', $input)) {
            $jenis_kanal = $input['jenis_kanal'];
        }

        $informasi_diminta = $oldData->informasi_diminta;
        if (array_key_exists('informasi_diminta', $input)) {
            $informasi_diminta = $input['informasi_diminta'];
        }

        $tujuan_informasi = $oldData->tujuan_informasi;
        if (array_key_exists('tujuan_informasi', $input)) {
            $tujuan_informasi = $input['tujuan_informasi'];
        }

        $id_cara = $oldData->id_cara;
        if (array_key_exists('id_cara', $input)) {
            $id_cara = $input['id_cara'];
        }

        $id_mendapatkan = $oldData->id_mendapatkan;
        if (array_key_exists('id_mendapatkan', $input)) {
            $id_mendapatkan = $input['id_mendapatkan'];
        }

        $file_identitas = $oldData->file_identitas;
        if (array_key_exists('file_identitas', $input)) {
            $identitas = str_replace('data:image/png;base64,', '', $input['file_identitas']);
            $identitas = str_replace(' ', '+', $identitas);
            $identitasName = Str::random(10).'.'.'png';
            $identitasPath = 'adminAssets/user/identitas/';
            $file = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$identitas));
            Storage::disk('public_uploads')->put($identitasPath, $file);
            $file_identitas = $identitasPath.$identitasName;
        }

        DB::table('ppid_permohonan')->where('id', $id)->update([
            'id_ppid_pendaftar' => $id_ppid_pendaftar,
            'ticket_permohonan' => $ticket_permohonan,
            'jenis_kanal' => $jenis_kanal,
            'informasi_diminta' => $informasi_diminta,
            'tujuan_informasi' => $tujuan_informasi,
            'id_cara' => $id_cara,
            'id_mendapatkan' => $id_mendapatkan,
            'file_identitas' => $file_identitas,
            "updated_at" => $dateCreated
        ]);

        $newData = DB::table('ppid_permohonan')
            ->select('ppid_permohonan.*', 'ppid_mendapatkan.name as cara_mendapatkan', 'ppid_memberikan.name as cara_memberikan')
            ->join('ppid_mendapatkan', 'ppid_mendapatkan.id', '=', 'ppid_permohonan.id_mendapatkan')
            ->join('ppid_memberikan', 'ppid_memberikan.id', '=', 'ppid_permohonan.id_cara')
            ->where('ppid_permohonan.id', $id)->first();

        return $this->sendResponse($newData,
            'Data permohonan saved successfully');
    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\JsonResponse

     */

    public function destroy($id)

    {
        $statusPermohonan = DB::table('status_permohonan')->where([
            'id_ppid_permohonan' => $id,
            'aktif' => 1
        ])->first();

        if (! $statusPermohonan || $statusPermohonan->id_status != 1) {
            return $this->sendError('DataPermohonan cannot be deleted.');
        }

        DB::table('status_permohonan')->where('id_ppid_permohonan', $id)->delete();
        DB::table('log_permohonan')->where('id_ppid_permohonan', $id)->delete();
        DB::table('ppid_permohonan')->where('id', $id)->delete();

        return $this->sendResponse(
            '', 'DataPermohonan retrieved successfully.');
    }

}
