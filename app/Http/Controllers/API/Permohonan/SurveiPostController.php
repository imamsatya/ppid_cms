<?php

namespace App\Http\Controllers\API\Permohonan;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\UserPPID;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class SurveiPostController extends BaseController
{
    /**
     * surveiPermohonan api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function surveiPermohonan(Request $request, $id)
    {
        DB::table('ppid_permohonan')->where('id', $request->id)->update([
            'isSurveiClicked' => true
        ]);

        return response()->json([
            'message' => 'OK',
        ]);
    }

    /**
     * submitSurveiPermohonan api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function submitSurveiData(Request $request)
    {
        $currentUser = Auth::guard('api')->user();
        $currentUserId = Auth::guard('api')->id();
        $input = $request->all();
        $dateCreated = \Carbon\Carbon::now();

        if (!$currentUser) {
            $this->sendError('No user!');
        }
        $validator = Validator::make($request->all(), [
            // step 1
            'jenisKelamin' => 'required',
            'usia' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'mediapengajuan' => 'required',
            // step 2
            'prosedurpelayanan' => 'required',
            'kualitaspelayanan' => 'required',
            'kelengkapandata' => 'required',
            'tingkatresponsif' => 'required',
            'fasilitaspelayanan' => 'required',
            'pelayananinformasi' => 'required',
            'kecakapanpetugas' => 'required',
            'kompetensipetugas' => 'required',
            // step 3
            'informasidisajikan' => 'required',
            'informasiuptodate' => 'required',
            'aksesibilitasinformasi' => 'required',
            // step 4
            'keseluruhanproses' => 'required',
            'skorpelaksanaan' => 'required',
            'saranmasukan' => 'required',
            'no_tiket' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $identitas = $currentUser->identitas_file_path;

        DB::table('surveys')->insert([
            //Step 1
            'jenisKelamin'  =>$input['jenisKelamin'],
            'usia' =>$input['usia'],
            'pendidikan' =>$input['pendidikan'] ,
            'pekerjaan' =>$input['pekerjaan'] ,
            'tujuan' =>$input['tujuan'] ,
            'mediapengajuan' =>$input['mediapengajuan'] ,
            //Step 2
            'prosedurpelayanan' =>$input['prosedurpelayanan'] ,
            'kualitaspelayanan' =>$input['kualitaspelayanan'] ,
            'kelengkapandata' =>$input['kelengkapandata'] ,
            'tingkatresponsif' =>$input['tingkatresponsif'] ,
            'fasilitaspelayanan' =>$input['fasilitaspelayanan'] ,
            'pelayananinformasi' =>$input['pelayananinformasi'] ,
            'kecakapanpetugas' =>$input['kecakapanpetugas'] ,
            'kompetensipetugas' =>$input['kompetensipetugas'] ,
            //Step 3
            'informasidisajikan' =>$input['informasidisajikan'] ,
            'informasiuptodate' =>$input['informasiuptodate'] ,
            'aksesibilitasinformasi' =>$input['aksesibilitasinformasi'] ,
            //Step 4
            'keseluruhanproses'  =>$input['keseluruhanproses'] ,
            'skorpelaksanaan' =>$input['skorpelaksanaan'] ,
            'saranmasukan' =>$input['saranmasukan'] ,
            //identitas
            'id_surat' =>$identitas ,
            'no_tiket' =>$input['no_tiket'] ,
            'id_ppid_pendaftar' =>$currentUserId ,
        ]);


        if(str_contains($input['no_tiket'], 'Per'))
        {
            DB::table('ppid_permohonan')->where('id', $input['no_tiket'])->update([
                'isSurveiClicked' => true
            ]);
        }

        if(str_contains($input['no_tiket'], 'Keb'))
        {
            DB::table('ppid_keberatan')->where('id', $input['no_tiket'])->update([
                'isSurveiClicked' => true
            ]);
        }

        return response()->json([
            'message' => 'OK',
        ]);
    }

    /**
     * surveiKeberatan api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function surveiKeberatan(Request $request, $id)
    {
        DB::table('ppid_keberatan')->where('id', $request->id)->update([
            'isSurveiClicked' => true
        ]);

        return response()->json([
            'message' => 'OK',
        ]);
    }


}
