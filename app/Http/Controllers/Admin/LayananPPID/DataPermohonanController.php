<?php

namespace App\Http\Controllers\Admin\LayananPPID;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use PDF;

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
        return view('admin.layanan_ppid.data_permohonan');
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

    public function ppidDataPermohonan(Request $request)
    {
        $asal = $request->input('asal');
        $status = $request->input('status');        

        $result = DB::table('ppid_permohonan')
            ->select('ppid_permohonan.*', 'status.name as nama_status', 'status.id as id_status', 'ppid_pendaftar.nama_lengkap')
            ->join('status_permohonan', 'status_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
            ->join('status', 'status.id', '=', 'status_permohonan.id_status')
            ->join('ppid_pendaftar', 'ppid_pendaftar.id', '=', 'ppid_permohonan.id_ppid_pendaftar')
            ->where(function ($query) use ($status) {
                if($status != '-') {
                    $query->where('status_permohonan.id_status', $status);    
                } else {
                    $query->whereNotIn('status_permohonan.id_status', [4,5,6]); // kecuali yg selesai dan ditolak
                }
            })
            ->where(function($query) use ($asal) {
                if($asal != '-') {
                    $query->where('ppid_pendaftar.jenis_pemohon', $asal);    
                }
            })
            ->where('status_permohonan.aktif', 1)
            ->get();
       echo json_encode(array('result' => $result));
    }

    public function ppidDataPermohonanSelesai(Request $request)
    {
        $asal = $request->input('asal');
        $status = $request->input('status');        

        $result = DB::table('ppid_permohonan')
            ->select('ppid_permohonan.*', 'status.name as nama_status', 'status.id as id_status', 'ppid_pendaftar.nama_lengkap')
            ->join('status_permohonan', 'status_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
            ->join('status', 'status.id', '=', 'status_permohonan.id_status')
            ->join('ppid_pendaftar', 'ppid_pendaftar.id', '=', 'ppid_permohonan.id_ppid_pendaftar')
            ->where(function ($query) use ($status) {
                if($status != '-') {
                    $query->where('status_permohonan.id_status', $status);    
                } else {
                    $query->whereIn('status_permohonan.id_status', [4,5,6]); // kecuali yg selesai dan ditolak
                }
            })
            ->where(function($query) use ($asal) {
                if($asal != '-') {
                    $query->where('ppid_pendaftar.jenis_pemohon', $asal);    
                }
            })
            ->where('status_permohonan.aktif', 1)
            ->get();
       echo json_encode(array('result' => $result));
    }

    public function ppidTemplateReject() 
    {
        $result = DB::table('template_reject')->get();
        echo json_encode(array('result' => $result, 'status' => 'success'));
    }

    public function submitKonfirmasiPermohonan(Request $request)
    {
        $data = $request->all();
        $dateCreated = \Carbon\Carbon::now();
        $permohonan = DB::table('ppid_permohonan')->where('id', $data['id'])->first();

        // kalau ditolak
        if($data['statusKonfirmasi'] == 'tolak') {

            $this->rejectPermohonan($data, $permohonan, $dateCreated);
            echo json_encode(array('result' => 'Berhasil menolak permohonan!', 'status' => 'success'));
            exit();
        }

        // kalau permohonan diterima / diproses
        $this->prosesPermohonan($data, $permohonan, $dateCreated);
        echo json_encode(array('result' => 'Berhasil mengkonfirmasi permohonan!', 'status' => 'success'));
    }

    public function jadwalKerja() {
        $response = Http::get('http://simanisdev.bumn.go.id/api/getjadwalkerja');
        echo json_encode(array('result' => $response->json()));
    }

    public function prosesPermohonan($data, $permohonan, $dateCreated) {
        
        // generate ticket_number
        $countTicket = DB::table('ppid_permohonan')
            ->join('status_permohonan', 'status_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
            ->where('status_permohonan.aktif', 1)
            ->whereNotIn('status_permohonan.id_status', [1,5]) // kecuali: permohonan masuk dan permohonan ditolak
            ->count();
        $tipe = strtolower($permohonan->jenis_kanal) == 'web' ? 'Per-web' : 'Per-app';
        $dateRequested = new \DateTime($permohonan->created_at);
        $month = $dateRequested->format('m');
        $year = $dateRequested->format('Y');
        $countTicket++;
        $ticketNumber = ($countTicket < 10 ? '0'.$countTicket : $countTicket).'/'.$tipe.'/'.$month.'/'.$year;

        // update ppid_permohonan
        // date('Y-m-d', strtotime($dateCreated. ' + 10 days'))
        DB::table('ppid_permohonan')->where('id', $data['id'])->update([
            'ticket_permohonan' => $ticketNumber,
            'expired_date1' => $data['expired1'],
            'expired_date2' => $data['expired2'],
        ]);

        // status permohonan
        $dataStatusPermohonan = [
            'id_ppid_permohonan' => $data['id'],
            'id_status' => 2, // dikonfirmasi
            'modified_by' => Auth::user()->id,
            'modified_date' => $dateCreated,
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
            'aktif' => 1
        ];
        DB::table('status_permohonan')->where('id_ppid_permohonan', $data['id'])->update(['aktif' => 0]);
        DB::table('status_permohonan')->insert($dataStatusPermohonan);

        // log permohonan
        DB::table('log_permohonan')->insert([
            'id_ppid_permohonan' => $data['id'],
            'status' => 2, // dikonfirmasi
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
        ]);
    }

    public function rejectPermohonan($data, $permohonan, $dateCreated) {
        // reject permohonan
        $dataReject = [
            'id_ppid_permohonan' => $data['id'],
            'id_template_reject' => $data['alasanPenolakan'],
            'file' => $permohonan->file_identitas,
            'rejected_by' => Auth::user()->id,
            'created_at' => $dateCreated,
            'updated_at' => $dateCreated
        ];
        DB::table('reject_permohonan')->insert($dataReject);
        
        // status permohonan
        $dataStatusPermohonan = [
            'id_ppid_permohonan' => $data['id'],
            'id_status' => 5, // ditolak
            'modified_by' => Auth::user()->id,
            'modified_date' => $dateCreated,
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
            'aktif' => 1
        ];
        DB::table('status_permohonan')->where('id_ppid_permohonan', $data['id'])->update(['aktif' => 0]);
        DB::table('status_permohonan')->insert($dataStatusPermohonan);

        // log permohonan
        DB::table('log_permohonan')->insert([
            'id_ppid_permohonan' => $data['id'],
            'status' => 5, // ditolak
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
        ]);
    }

    public function submitAnswerPermohonan(Request $request)
    {
        $data = $request->all();
        $dateCreated = \Carbon\Carbon::now();
        $file_dukung = '';
        if($request->file('file_dukung')) {
            $file = $request->file('file_dukung');
            $filename = time().'_'.$file->getClientOriginalName();

            // File extension
            $extension = $file->getClientOriginalExtension();

            // File upload location
            $location = public_path('adminAssets/ppid/dukungan');

            // Upload file
            $file->move($location,$filename);

            // File path
            $file_dukung = 'adminAssets/ppid/dukungan/'.$filename;
        }

        $pdf = PDF::loadView('admin.layanan_ppid.answer_template', ['jawaban' => $data['answer']] );
        $nmfile = time().'_answer.pdf';
        $pdf->save(public_path('adminAssets/ppid/answer/').''.$nmfile);

        
        $dataAnswer = [
            'id_ppid_permohonan' => $data['id'],
            'ket_jawaban' => $data['answer'],
            'ket_jawaban_path' => 'adminAssets/ppid/answer/'.$nmfile,
            'file_jawaban' => $file_dukung == '' ? null : $file_dukung,
            'jawab_by' => Auth::user()->id,
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
        ];
        DB::table('jawab_permohonan')->insert($dataAnswer);

        // status permohonan
        $dataStatusPermohonan = [
            'id_ppid_permohonan' => $data['id'],
            'id_status' => 4, // dijawab oleh
            'modified_by' => Auth::user()->id,
            'modified_date' => $dateCreated,
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
            'aktif' => 1
        ];
        DB::table('status_permohonan')->where('id_ppid_permohonan', $data['id'])->update(['aktif' => 0]);
        DB::table('status_permohonan')->insert($dataStatusPermohonan);


        // log permohonan
        DB::table('log_permohonan')->insert([
            'id_ppid_permohonan' => $data['id'],
            'status' => 4, // ditolak
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
        ]);
        

        echo json_encode(array('result' => 'Berhasil menyimpan respon!', 'status' => 'success'));
    }

    public function submitForwardPermohonan(Request $request)
    {
        $data = $request->all();
        $dateCreated = \Carbon\Carbon::now();

        $dataForward = [
            'id_ppid_permohonan' => $data['id'],
            'forward_by' => Auth::user()->id,
            'forward_to' => $data['forward_to'],
            'keterangan' => $data['keterangan'],
            'nota_dinas' => $data['nota_dinas'],
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
        ];

        DB::table('forward_permohonan')->insert($dataForward);

        // status permohonan
        $dataStatusPermohonan = [
            'id_ppid_permohonan' => $data['id'],
            'id_status' => 3, // diteruskan
            'modified_by' => Auth::user()->id,
            'modified_date' => $dateCreated,
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
            'aktif' => 1
        ];
        DB::table('status_permohonan')->where('id_ppid_permohonan', $data['id'])->update(['aktif' => 0]);
        DB::table('status_permohonan')->insert($dataStatusPermohonan);


        // log permohonan
        DB::table('log_permohonan')->insert([
            'id_ppid_permohonan' => $data['id'],
            'status' => 3, // diteruskan
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
        ]);

        echo json_encode(array('result' => 'Berhasil meneruskan permohonan!', 'status' => 'success'));
    }

    public function dataPpidPendaftarById(Request $request, $id) {
        $user = DB::table('ppid_pendaftar')
        ->select('ppid_pendaftar.*', 'jenis_identitas.name as nama_jenis_identitas', 'jenis_pemohon.name as nama_jenis_pemohon')
        ->join('jenis_identitas', 'jenis_identitas.id', '=', 'ppid_pendaftar.jenis_identitas')
        ->join('jenis_pemohon', 'jenis_pemohon.id', '=', 'ppid_pendaftar.jenis_pemohon')
        ->where('ppid_pendaftar.id', $id)
        ->first();
        echo json_encode(array('result' => $user, 'status' => 'success'));
    }
}
