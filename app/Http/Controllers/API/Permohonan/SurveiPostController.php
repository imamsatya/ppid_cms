<?php

namespace App\Http\Controllers\API\Permohonan;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\UserPPID;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
