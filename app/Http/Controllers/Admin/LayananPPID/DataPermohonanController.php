<?php

namespace App\Http\Controllers\Admin\LayananPPID;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Models\LayananPPID\LinkSurvei;
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
        $linkSurvei = new LinkSurvei();
        $linkSurvei = $linkSurvei->first();
        return view('admin.layanan_ppid.data_permohonan', compact('linkSurvei'));
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

        $user = Auth::user();
        $asal = $request->input('asal');
        $status = $request->input('status');
        $start = $request->input('datestart');
        $end = $request->input('dateend');
        // 'status_permohonan.created_at as status_permohonan_created_at'
        if ($user->hasRole('user penghubung')) {
            $result = DB::table('ppid_permohonan')
                ->select('ppid_permohonan.*', 'status.name as nama_status', 'status.id as id_status', 'ppid_pendaftar.nama_lengkap')
                ->join('status_permohonan', 'status_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
                ->join('status', 'status.id', '=', 'status_permohonan.id_status')
                ->join('ppid_pendaftar', 'ppid_pendaftar.id', '=', 'ppid_permohonan.id_ppid_pendaftar')
                ->join('forward_permohonan', 'forward_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
                ->where(function ($query) use ($status) {
                    if ($status != '-') {
                        $query->where('status_permohonan.id_status', $status);
                    } else {
                        $query->whereNotIn('status_permohonan.id_status', [4, 5, 6]); // kecuali yg selesai dan ditolak
                    }
                })
                ->where(function ($query) use ($asal) {
                    if ($asal != '-') {
                        $query->where('ppid_pendaftar.jenis_pemohon', $asal);
                    }
                })
                ->where(function ($query) use ($start, $end) {
                    if ($start != '-') {
                        $query->whereBetween(DB::raw('date(status_permohonan.created_at)'), [$start, $end]);
                    }
                })
                ->where('status_permohonan.aktif', 1)
                ->where('forward_permohonan.forward_to', $user->id)
                ->orderByDesc('ppid_permohonan.created_at')
                ->get();
            echo json_encode(array('result' => $result));
            return;
        }

        $result = DB::table('ppid_permohonan')
            ->select('ppid_permohonan.*', 'status.name as nama_status', 'status.id as id_status', 'ppid_pendaftar.nama_lengkap')
            ->join('status_permohonan', 'status_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
            ->join('status', 'status.id', '=', 'status_permohonan.id_status')
            ->join('ppid_pendaftar', 'ppid_pendaftar.id', '=', 'ppid_permohonan.id_ppid_pendaftar')
            ->where(function ($query) use ($status) {
                if ($status != '-') {
                    $query->where('status_permohonan.id_status', $status);
                } else {
                    $query->whereNotIn('status_permohonan.id_status', [4, 5, 6]); // kecuali yg selesai dan ditolak
                }
            })
            ->where(function ($query) use ($asal) {
                if ($asal != '-') {
                    $query->where('ppid_pendaftar.jenis_pemohon', $asal);
                }
            })
            ->where(function ($query) use ($start, $end) {
                if ($start != '-') {
                    $query->whereBetween(DB::raw('date(status_permohonan.created_at)'), [$start, $end]);
                }
            })
            ->where('status_permohonan.aktif', 1)
            ->orderByDesc('ppid_permohonan.created_at')
            ->get();
        echo json_encode(array('result' => $result));
    }

    public function ppidDataPermohonanSelesai(Request $request)
    {

        $user = Auth::user();
        $asal = $request->input('asal');
        $status = $request->input('status');
        $start = $request->input('datestart');
        $end = $request->input('dateend');

        if ($user->hasRole('user penghubung')) {
            $result = DB::table('ppid_permohonan')
                ->select('ppid_permohonan.*', 'status.name as nama_status', 'status.id as id_status', 'ppid_pendaftar.nama_lengkap', 'jawab_permohonan.file_jawaban', 'jawab_permohonan.ket_jawaban_path')
                ->join('status_permohonan', 'status_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
                ->join('status', 'status.id', '=', 'status_permohonan.id_status')
                ->join('ppid_pendaftar', 'ppid_pendaftar.id', '=', 'ppid_permohonan.id_ppid_pendaftar')
                ->leftJoin('jawab_permohonan', 'jawab_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
                ->where(function ($query) use ($status) {
                    if ($status != '-') {
                        $query->where('status_permohonan.id_status', $status);
                    } else {
                        $query->whereIn('status_permohonan.id_status', [4, 5, 6]); // yg selesai dan ditolak
                    }
                })
                ->where(function ($query) use ($asal) {
                    if ($asal != '-') {
                        $query->where('ppid_pendaftar.jenis_pemohon', $asal);
                    }
                })
                ->where(function ($query) use ($start, $end) {
                    if ($start != '-') {
                        $query->whereBetween(DB::raw('date(status_permohonan.created_at)'), [$start, $end]);
                    }
                })
                ->where('status_permohonan.aktif', 1)
                ->where('jawab_permohonan.jawab_by', $user->id)
                ->orderByDesc('ppid_permohonan.created_at')
                ->get();
            echo json_encode(array('result' => $result));
            return;
        }
        $result = DB::table('ppid_permohonan')
            ->select('ppid_permohonan.*', 'status.name as nama_status', 'status.id as id_status', 'ppid_pendaftar.nama_lengkap', 'jawab_permohonan.file_jawaban', 'jawab_permohonan.ket_jawaban_path')
            ->join('status_permohonan', 'status_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
            ->join('status', 'status.id', '=', 'status_permohonan.id_status')
            ->join('ppid_pendaftar', 'ppid_pendaftar.id', '=', 'ppid_permohonan.id_ppid_pendaftar')
            ->leftJoin('jawab_permohonan', 'jawab_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
            ->where(function ($query) use ($status) {
                if ($status != '-') {
                    $query->where('status_permohonan.id_status', $status);
                } else {
                    $query->whereIn('status_permohonan.id_status', [4, 5, 6]); // yg selesai dan ditolak
                }
            })
            ->where(function ($query) use ($asal) {
                if ($asal != '-') {
                    $query->where('ppid_pendaftar.jenis_pemohon', $asal);
                }
            })
            ->where(function ($query) use ($start, $end) {
                if ($start != '-') {
                    $query->whereBetween(DB::raw('date(status_permohonan.created_at)'), [$start, $end]);
                }
            })
            ->where('status_permohonan.aktif', 1)
            ->orderByDesc('ppid_permohonan.created_at')
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
        if ($data['statusKonfirmasi'] == 'tolak') {

            $this->rejectPermohonan($data, $permohonan, $dateCreated);
            echo json_encode(array('result' => 'Berhasil menolak permohonan!', 'status' => 'success'));
            exit();
        }

        // kalau permohonan diterima / diproses
        $this->prosesPermohonan($data, $permohonan, $dateCreated);
        echo json_encode(array('result' => 'Berhasil mengkonfirmasi permohonan!', 'status' => 'success'));
    }

    public function jadwalKerja()
    {

        // $response = Http::get('http://simanisdev.bumn.go.id/api/getjadwalkerja');
        $response = Http::get('https://simanis.bumn.go.id/api/getjadwalkerja');
        echo json_encode(array('result' => $response->json()));
    }

    public function generateTicket($permohonan)
    {
        $countTicket = DB::table('ppid_permohonan')
            ->where('ticket_permohonan', '!=', '-')
            ->count();
        $tipe = strtolower($permohonan->jenis_kanal) == 'web' ? 'Per-web' : 'Per-app';
        $dateRequested = new \DateTime($permohonan->created_at);
        $month = $dateRequested->format('m');
        $year = $dateRequested->format('Y');
        $countTicket++;
        $ticketNumber = ($countTicket < 10 ? '0' . $countTicket : $countTicket) . '/' . $tipe . '/' . $month . '/' . $year;
        return $ticketNumber;
    }

    public function prosesPermohonan($data, $permohonan, $dateCreated)
    {

        // generate ticket_number
        $ticketNumber = $this->generateTicket($permohonan);

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

    public function rejectPermohonan($data, $permohonan, $dateCreated)
    {
        // dd($permohonan->id);
        //tidak diterima
        // $ticketNumber = $this->generateTicket($permohonan);
        // DB::table('ppid_permohonan')->where('id', $data['id'])->update([
        //     'ticket_permohonan' => $ticketNumber,
        // ]);

        // jawaban reject permohonan
        $pdf = PDF::loadView('admin.layanan_ppid.answer_template', ['jawaban' => $data['areaAlasanPenolakan']]);
        $ticketPermohonan = str_replace('/', '-', 'tidak-diterima-'.$permohonan->id);
        $nmfile = $ticketPermohonan . '.pdf';

        $content = $pdf->download()->getOriginalContent();
        Storage::put('public/permohonan/jawaban/' . $nmfile, $content);
        // $pdf->save(public_path('permohonan/jawaban/') . '' . $nmfile);

        DB::table('jawab_permohonan')->insert([
            'id_ppid_permohonan' => $data['id'],
            'ket_jawaban' => $data['areaAlasanPenolakan'],
            'ket_jawaban_path' => 'permohonan/jawaban/' . $nmfile,
            'jawab_by' => Auth::user()->id,
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
        ]);

        // reject permohonan
        $dataReject = array();
        $userAct = Auth::user()->id;
        foreach ($data['alasanPenolakan'] as $val) {
            array_push($dataReject, [
                'id_ppid_permohonan' => $data['id'],
                'id_template_reject' => $val,
                'file' => $permohonan->file_identitas,
                'rejected_by' => $userAct,
                'created_at' => $dateCreated,
                'updated_at' => $dateCreated
            ]);
        }

        DB::table('reject_permohonan')->insert($dataReject);

        // status permohonan
        $dataStatusPermohonan = [
            'id_ppid_permohonan' => $data['id'],
            'id_status' => 6, // tidak diterima
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
            'status' => 6, // tidak diterima
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
        ]);
    }

    public function submitAnswerPermohonan(Request $request)
    {
        
        //kalau value nya 1, maka ditolak 
        $data = $request->all();
        $dateCreated = \Carbon\Carbon::now();
        $file_dukung = '';
        $dataPermohonan = DB::table('ppid_permohonan')->where('id', $data['id'])->first();
        $ticketPermohonan = str_replace('/', '-', $dataPermohonan->ticket_permohonan);

        if ($request->file('file_dukung')) {
            $file = $request->file('file_dukung');
            // $filename = time().'_'.$file->getClientOriginalName();
            $filename = $ticketPermohonan . '-pendukung' . '.' . $file->getClientOriginalExtension();

            // File extension
            $extension = $file->getClientOriginalExtension();

            // File upload location
            $location = public_path('permohonan/jawaban');

            // Upload file
            // $file->move($location, $filename);
            $path = $file->storeAs('public/permohonan/jawaban', $filename);

            // File path
            $file_dukung = 'permohonan/jawaban/' . $filename;
        }

       

        $pdf = PDF::loadView('admin.layanan_ppid.answer_template', ['jawaban' => $data['answer']]);
        // $nmfile = time().'_answer.pdf';
        $nmfile = $ticketPermohonan . '.pdf';
        $content = $pdf->download()->getOriginalContent();
        Storage::put('public/permohonan/jawaban/' . $nmfile, $content);
        // $pdf->save(public_path('permohonan/jawaban/') . '' . $nmfile);


        $dataAnswer = [
            'id_ppid_permohonan' => $data['id'],
            'ket_jawaban' => $data['answer'],
            'ket_jawaban_path' => 'permohonan/jawaban/' . $nmfile,
            'file_jawaban' => $file_dukung == '' ? null : $file_dukung,
            'jawab_by' => Auth::user()->id,
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
        ];
        DB::table('jawab_permohonan')->insert($dataAnswer);

        // status permohonan
        $dataStatusPermohonan = [
            'id_ppid_permohonan' => $data['id'],
            'id_status' => $request->selectedTemplate == '1' ? 5 : 4, //kalau opsi 1 tolak, jika tidak dijawab oleh
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
            'status' => $request->selectedTemplate == '1' ? 5 : 4, // kalau opsi 1 tolak, jika tidak dijawab
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

    public function dataPpidPendaftarById(Request $request, $id)
    {
        $user = DB::table('ppid_pendaftar')
            ->select('ppid_pendaftar.*', 'jenis_identitas.name as nama_jenis_identitas', 'jenis_pemohon.name as nama_jenis_pemohon')
            ->join('jenis_identitas', 'jenis_identitas.id', '=', 'ppid_pendaftar.jenis_identitas')
            ->join('jenis_pemohon', 'jenis_pemohon.id', '=', 'ppid_pendaftar.jenis_pemohon')
            ->where('ppid_pendaftar.id', $id)
            ->first();
        echo json_encode(array('result' => $user, 'status' => 'success'));
    }

    public function getDaftarUserPenghubung()
    {
        $userPenghubungId = DB::table('roles')->where('name', 'user penghubung')->first();
        $userPenghubung = array();
        if ($userPenghubungId) {
            $userPenghubung = DB::table('model_has_roles')
                ->select('users.*')
                ->join('users', 'users.id', '=', 'model_has_roles.model_id')
                ->where('model_has_roles.role_id', $userPenghubungId->id)
                ->get();
        }
        echo json_encode(array('result' => $userPenghubung, 'status' => 'success'));
    }

    public function submitLinkSurvei(Request $request){


        $validated = $request->validate([
            'linkSurvei' => 'required'
        ]);
        if ($validated) {
            $link = new LinkSurvei();
            $link = $link->first();
           if($link){
            $link->link = $request->linkSurvei;
           }else{
            $link = new LinkSurvei();
            $link->link = $request->linkSurvei;
           }
           $link->save();
           return redirect()->back()->with('success', 'Berhasil menyimpan Link Survei');
    }
    
    }
}
