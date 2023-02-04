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
        $tahun = Carbon::now()->format('Y');
        $dataPermohonanMasuk = DB::table('log_permohonan')->where('status', 1)->whereYear('created_at', $tahun)->get()->groupBy(function($val) {
            return Carbon::parse($val->created_at)->format('M');
      });
   
     
        $dataStatistik = $this->getDataStatistik();
        CarbonInterval::macro('forHumansWithoutWeeks', function ($syntax = null, $short = false, $parts = -1, $options = null) {
            $factors = CarbonInterval::getCascadeFactors();
            CarbonInterval::setCascadeFactors([
                'week' => [99999999999, 'days'],
            ]);
            $diff = $this->forHumans($syntax, $short, $parts, $options);
            CarbonInterval::setCascadeFactors($factors);

            return $diff;
        });
        //Rata2 Konfirmasi
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
        // $rata2konfirmasiDisplay = CarbonInterval::seconds($rata2konfirmasi)->cascade()->forHumansWithoutWeeks();
        // $rata2konfirmasiDisplay = str_replace('weeks', 'pekan', $rata2konfirmasiDisplay);
        // $rata2konfirmasiDisplay = str_replace('days', 'hari', $rata2konfirmasiDisplay);
        // $rata2konfirmasiDisplay = str_replace('hours', 'jam', $rata2konfirmasiDisplay);
        // $rata2konfirmasiDisplay = str_replace('minutes', 'menit', $rata2konfirmasiDisplay);
        // $rata2konfirmasiDisplay = str_replace('seconds', 'detik', $rata2konfirmasiDisplay);

        $day = floor($rata2konfirmasi / 86400);
        $hours = floor(($rata2konfirmasi - ($day * 86400)) / 3600);
        $minutes = floor(($rata2konfirmasi / 60) % 60);
        $rata2konfirmasiDisplay = $day . ' hari ' . $hours . ' jam ' . $minutes . ' menit';

        //Rata2 Selesai
        $log_selesai = DB::table('log_permohonan')->where('status', [4, 5])->get();
        $deltaDataSelesai = [];
        foreach ($log_selesai as $key => $log) {

            $log_konfirmasi = DB::table('log_permohonan')
                ->where('id_ppid_permohonan', $log->id_ppid_permohonan)
                ->where('status', [2])->first();
            // dd($log);

            $formatted_log = Carbon::parse($log->created_at);
            $formatted_log_konfirmasi = Carbon::parse($log_konfirmasi->created_at);
            $deltaSelesai = $formatted_log->diffInSeconds($formatted_log_masuk);
            array_push($deltaDataSelesai, $deltaSelesai);
        }
        $rata2Selesai = collect($deltaDataSelesai)->avg();


        // $rata2SelesaiDisplay = CarbonInterval::seconds($rata2Selesai)->cascade()->forHumansWithoutWeeks();
        // $rata2SelesaiDisplay = str_replace('weeks', 'pekan', $rata2SelesaiDisplay);
        // $rata2SelesaiDisplay = str_replace('days', 'hari', $rata2SelesaiDisplay);
        // $rata2SelesaiDisplay = str_replace('hours', 'jam', $rata2SelesaiDisplay);
        // $rata2SelesaiDisplay = str_replace('minutes', 'menit', $rata2SelesaiDisplay);
        // $rata2SelesaiDisplay = str_replace('seconds', 'detik', $rata2SelesaiDisplay);

        $day = floor($rata2Selesai / 86400);
        $hours = floor(($rata2Selesai - ($day * 86400)) / 3600);
        $minutes = floor(($rata2Selesai / 60) % 60);
        $rata2SelesaiDisplay = $day . ' hari ' . $hours . ' jam ' . $minutes . ' menit';

        return view('admin.dashboard.dashboard', compact('dataStatistik', 'dataPermohonanMasuk', 'rata2konfirmasiDisplay', 'rata2SelesaiDisplay'));
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
        when status.id = 5 then 'ditolak'
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
