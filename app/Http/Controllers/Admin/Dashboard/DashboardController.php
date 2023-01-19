<?php

namespace App\Http\Controllers\Admin\Dashboard;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataStatistik = $this->getDataStatistik();
        $log_konfirmasi = DB::table('log_permohonan')->where('status', [2])->get();
        $deltaData = [];
        foreach ($log_konfirmasi as $key => $log) {

            $log_masuk = DB::table('log_permohonan')
                ->where('id_ppid_permohonan', $log->id_ppid_permohonan)
                ->where('status', [1])->first();
            // dd($log);

            $formatted_log = Carbon::parse($log->created_at);
            $formatted_log_masuk = Carbon::parse($log_masuk->created_at);
            $delta = $formatted_log->diffInSeconds($formatted_log_masuk);
            array_push($deltaData, $delta);
        }

        $rata2konfirmasi = collect($deltaData)->avg();
        $rata2konfirmasiDisplay = CarbonInterval::seconds($rata2konfirmasi)->cascade()->forHumans();
        $rata2konfirmasiDisplay = str_replace('days', 'hari', $rata2konfirmasiDisplay);
        $rata2konfirmasiDisplay = str_replace('hours', 'jam', $rata2konfirmasiDisplay);
        $rata2konfirmasiDisplay = str_replace('minutes', 'menit', $rata2konfirmasiDisplay);
        $rata2konfirmasiDisplay = str_replace('seconds', 'detik', $rata2konfirmasiDisplay);

        return view('admin.dashboard.dashboard', compact('dataStatistik', 'rata2konfirmasiDisplay'));
    }

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
        // echo json_encode(array('data' => $data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
