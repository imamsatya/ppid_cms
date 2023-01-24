<?php

namespace App\Http\Controllers\API\ManajemenHome;

use App\Models\Profil\Kontak;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;

class StatistikController extends BaseController
{
    /**
     * Get statistik data for home showing
     */
    public function getDataStatistik()
    {
        $date = Carbon::now()->format('Y');

        $data = DB::select(DB::raw(
            "
            select status_final, bulan, SUM(total) permohonan from
            (select status.id, status.name, bulan, total, (case
                    when status.id = 1 then 'masuk'
                    when status.id = 2 then 'proses'
                    when status.id = 3 then 'proses'
                    when status.id = 4 then 'selesai'
                    when status.id = 5 then 'selesai'
                end
                ) status_final from
                (
                    select
                    DATE_PART(
                    'month', modified_date
                    ) bulan, id_status, count(*) total
                    from status_permohonan
                    where aktif = TRUE and DATE_PART(
                        'year', modified_date
                        ) = '$date'
                    group by DATE_PART(
                        'month', modified_date
                        ), id_status
                ) A

            join status on status.id = A.id_status
            ) B
            group by status_final, bulan
        "
        ));
        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $dataStatistik = $this->getDataStatistik();
        return $this->sendResponse($dataStatistik, 'Statistik retrieved succssfully.');
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
        //
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
