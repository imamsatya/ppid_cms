<?php

namespace App\Http\Controllers\Frontend\Home;

use Illuminate\Http\Request;
use App\Models\ManajemenHome\Video;
use App\Http\Controllers\Controller;
use App\Models\ManajemenHome\Slider;
use App\Models\ManajemenHome\Informasi;
use App\Models\ManajemenHome\InformasiImage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd('halo');

        $slider = new Slider();
        $slider = $slider->orderBy('urutan', 'asc')->get();


        $informasi = new Informasi();
        $informasi = $informasi->orderBy('urutan', 'asc')->get();


        $informasiImage = new InformasiImage();
        $informasiImage = $informasiImage->first();

        $video = new Video();
        $video = $video::all();

        $response = Http::get('https://bumn.go.id/api/pressconference');
        $siaranPers = $response->json();

        if ($siaranPers['status'] == 1) {
            $siaranPers = $siaranPers['data'];
        } else {
            $siaranPers = null;
        }

        $dataStatistik = $this->getDataStatistik();
        // dd($data[0]->status_final);


        return view('index', compact('slider', 'informasi', 'informasiImage', 'video', 'siaranPers', 'dataStatistik'));
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
