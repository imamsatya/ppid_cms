<?php

namespace App\Http\Controllers\Frontend\LayananPPID;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class DataPermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function ppidCaraMendapatkan()
    {
        $result = DB::table('ppid_mendapatkan')->get();
        echo json_encode(array('result' => $result));
    }

    public function ppidCaraMemberikan()
    {
        $result = DB::table('ppid_memberikan')->get();
        echo json_encode(array('result' => $result));
    }

    public function submitPermintaanUser(Request $request)
    {
        $data = $request->all();
        $dateCreated = \Carbon\Carbon::now();
<<<<<<< HEAD
        $result = true;
        if ($data['id'] == '') { // new data
            $this->addPermohonan($data, $dateCreated);
        } else { // update data
            $result = $this->editPermohonan($data, $dateCreated);
        }

        if ($result) {
            echo json_encode(array('result' => 'Berhasil menyimpan data!', 'status' => 'success'));
        } else {
            echo json_encode(array('result' => 'Gagal menyimpan data, permohonan sudah dikonfirmasi admin!', 'status' => 'error'));
        }
=======

        if ($data['id'] == '') { // new data
            $this->addPermohonan($data, $dateCreated);
        } else { // update data
            $this->editPermohonan($data, $dateCreated);
        }

        echo json_encode(array('result' => 'Berhasil menyimpan data!', 'status' => 'success'));
>>>>>>> origin/main
    }

    public function editPermohonan($data, $dateCreated)
    {
<<<<<<< HEAD
        $cekStatus = DB::table('ppid_permohonan')->where('id', $data['id'])->first();
        $statusPermohonan = DB::table('status_permohonan')->where('id_ppid_permohonan', $cekStatus->id)->where('aktif', true)->first();


        if ($statusPermohonan->id_status == 1) {

            DB::table('ppid_permohonan')->where('id', $data['id'])->update([
                'id_ppid_pendaftar' => $data['id_ppid_pendaftar'],
                'ticket_permohonan' => $data['ticket_permohonan'],
                'jenis_kanal' => $data['jenis_kanal'],
                'informasi_diminta' => $data['informasi_diminta'],
                'tujuan_informasi' => $data['tujuan_informasi'],
                'id_cara' => $data['id_cara'],
                'id_mendapatkan' => $data['id_mendapatkan'],
                'file_identitas' => $data['file_identitas'],
                "updated_at" => $dateCreated
            ]);
            return true;
        }

        return false;
=======
        DB::table('ppid_permohonan')->where('id', $data['id'])->update([
            'id_ppid_pendaftar' => $data['id_ppid_pendaftar'],
            'ticket_permohonan' => $data['ticket_permohonan'],
            'jenis_kanal' => $data['jenis_kanal'],
            'informasi_diminta' => $data['informasi_diminta'],
            'tujuan_informasi' => $data['tujuan_informasi'],
            'id_cara' => $data['id_cara'],
            'id_mendapatkan' => $data['id_mendapatkan'],
            'file_identitas' => $data['file_identitas'],
            "updated_at" => $dateCreated
        ]);
>>>>>>> origin/main
    }

    public function addPermohonan($data, $dateCreated)
    {
        // ppid_permohonan
        $insertedId = DB::table('ppid_permohonan')->insertGetId([
            'id_ppid_pendaftar' => $data['id_ppid_pendaftar'],
            'ticket_permohonan' => $data['ticket_permohonan'],
            'jenis_kanal' => $data['jenis_kanal'],
            'informasi_diminta' => $data['informasi_diminta'],
            'tujuan_informasi' => $data['tujuan_informasi'],
            'id_cara' => $data['id_cara'],
            'id_mendapatkan' => $data['id_mendapatkan'],
            'file_identitas' => $data['file_identitas'],
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
    }

    public function ppidDataPermohonan(Request $request)
    {
        $user = Auth::guard('usersppid')->user();
        $result = DB::table('ppid_permohonan')
            ->select('ppid_permohonan.*', 'status.name as nama_status', 'status.id as id_status', 'jawab_permohonan.file_jawaban', 'jawab_permohonan.ket_jawaban_path')
            ->join('status_permohonan', 'status_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
            ->join('status', 'status.id', '=', 'status_permohonan.id_status')
            ->leftJoin('jawab_permohonan', 'jawab_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
            ->where('status_permohonan.aktif', 1)
            ->where('ppid_permohonan.id_ppid_pendaftar', $user->id)
<<<<<<< HEAD
            ->orderByDesc('ppid_permohonan.created_at')
=======
>>>>>>> origin/main
            ->get();
        echo json_encode(array('result' => $result, 'ses' => $user));
    }

    public function ppidDataPermohonanSpec(Request $request, $id)
    {
        $result = DB::table('ppid_permohonan')
<<<<<<< HEAD
            ->select('ppid_permohonan.*', 'ppid_mendapatkan.name as cara_mendapatkan', 'ppid_memberikan.name as cara_memberikan', 'status_permohonan.id_status as id_status_permohonan', 'status.name as nama_status_permohonan', 'status_permohonan.created_at as tanggal_status')
=======
            ->select('ppid_permohonan.*', 'ppid_mendapatkan.name as cara_mendapatkan', 'ppid_memberikan.name as cara_memberikan', 'status_permohonan.id_status as id_status_permohonan', 'status.name as nama_status_permohonan')
>>>>>>> origin/main
            ->join('ppid_mendapatkan', 'ppid_mendapatkan.id', '=', 'ppid_permohonan.id_mendapatkan')
            ->join('ppid_memberikan', 'ppid_memberikan.id', '=', 'ppid_permohonan.id_cara')
            ->join('status_permohonan', 'status_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
            ->join('status', 'status.id', '=', 'status_permohonan.id_status')
            ->where('status_permohonan.aktif', 1)
            ->where('ppid_permohonan.id', $id)->first();
        echo json_encode(array('result' => $result, 'status' => 'success'));
    }

    public function ppidJenisPemohon()
    {
        $result = DB::table('jenis_pemohon')->get();
        echo json_encode(array('result' => $result));
    }

    public function ppidHapusDataPermohonan(Request $request, $id)
    {
        $statusPermohonan = DB::table('status_permohonan')->where([
            'id_ppid_permohonan' => $id,
            'aktif' => 1
        ])->first();

        if ($statusPermohonan && $statusPermohonan->id_status == 1) { // permohonan masuk
            DB::table('status_permohonan')->where('id_ppid_permohonan', $id)->delete();
            DB::table('log_permohonan')->where('id_ppid_permohonan', $id)->delete();
            DB::table('ppid_permohonan')->where('id', $id)->delete();
<<<<<<< HEAD
            echo json_encode(array('status' => 'success', 'result' => 'Berhasil menghapus data!'));
        } else {
            echo json_encode(array('status' => 'error', 'result' => 'Gagal menyimpan data, permohonan sudah dikonfirmasi admin!'));
        }
=======
        }
        echo json_encode(array('status' => 'success', 'result' => 'Berhasil menghapus data!'));
>>>>>>> origin/main
    }

    public function ppidStatusPermohonan(Request $request)
    {
        $result = DB::table('status')->get();
        echo json_encode(array('result' => $result, 'status' => 'success'));
    }
<<<<<<< HEAD

    public function submitSurveyUser(Request $request)
    {
        $dateCreated = \Carbon\Carbon::now();
        DB::table('surveys')->insert([            
            //Step 1
             'jenisKelamin'  =>$request->jenisKelamin ,
             'usia' =>$request->usia ,
             'pendidikan' =>$request->pendidikan ,
             'pekerjaan' =>$request->pekerjaan ,
             'tujuan' =>$request->tujuan ,
             'mediapengajuan' =>$request->mediapengajuan ,
             //Step 2
             'prosedurpelayanan' =>$request->prosedurpelayanan ,
             'kualitaspelayanan' =>$request->kualitaspelayanan ,
             'kelengkapandata' =>$request->kelengkapandata ,
             'tingkatresponsif' =>$request->tingkatresponsif ,
             'fasilitaspelayanan' =>$request->fasilitaspelayanan ,
             'pelayananinformasi' =>$request->pelayananinformasi ,
             'kecakapanpetugas' =>$request->kecakapanpetugas ,
             'kompetensipetugas' =>$request->kompetensipetugas ,
             //Step 3
             'informasidisajikan' =>$request->informasidisajikan ,
             'informasiuptodate' =>$request->informasiuptodate ,
             'aksesibilitasinformasi' =>$request->aksesibilitasinformasi ,
             //Step 4
             'keseluruhanproses'  =>$request->keseluruhanproses ,
             'skorpelaksanaan' =>$request->skorpelaksanaan ,
             'saranmasukan' =>$request->saranmasukan ,
            //identitas
            'id_surat' =>$request->id_surat ,
            'no_tiket' =>$request->no_tiket ,
            'id_ppid_pendaftar' =>$request->id_ppid_pendaftar ,

            //tahun
            'tahun' => \Carbon\Carbon::now()->format('Y'),
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated
        ]);


        if(str_contains($request->no_tiket, 'Per'))
        {
            DB::table('ppid_permohonan')->where('id', $request->id_surat)->update([
                'isSurveiClicked' => true
            ]);
        }

        if(str_contains($request->no_tiket, 'Keb'))
        {
            DB::table('ppid_keberatan')->where('id', $request->id_surat)->update([
                'isSurveiClicked' => true
            ]);
        }
        

        echo json_encode(array('result' => true));
    }
=======
>>>>>>> origin/main
}
