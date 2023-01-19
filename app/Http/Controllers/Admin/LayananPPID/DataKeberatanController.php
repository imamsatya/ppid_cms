<?php

namespace App\Http\Controllers\Admin\LayananPPID;

use App\Http\Controllers\Controller;
use App\Models\LayananPPID\Keberatan\KeberatanPPID;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use PDF;
use Illuminate\Support\Facades\Storage;
use App\Models\LayananPPID\LinkSurvei;

class DataKeberatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ppidKeberatan = DB::table('ppid_keberatan')
            ->select(
                'ppid_keberatan.*',
                'jenis_status_keberatan.status as nama_status',
                'jenis_status_keberatan.id as id_status',
                'proses_keberatan.ket_jawaban',
                'proses_keberatan.ket_jawaban_path',
                'proses_keberatan.file_jawaban',

                'proses_keberatan.jawab_by',
                'ppid_pendaftar.nama_lengkap'
            )
            ->leftjoin('status_keberatan', 'status_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->leftjoin('jenis_status_keberatan', 'jenis_status_keberatan.id', '=', 'status_keberatan.id_jenis_status_keberatan')
            ->leftjoin('proses_keberatan', 'proses_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->leftJoin('ppid_pendaftar', 'ppid_pendaftar.id', '=', 'ppid_keberatan.id_ppid_pendaftar')
            ->whereIn('jenis_status_keberatan.id', [1, 2])

            ->orderBy('created_at', 'desc')->get();

        $ppidKeberatanSelesai = DB::table('ppid_keberatan')
            ->select(
                'ppid_keberatan.*',
                'jenis_status_keberatan.status as nama_status',
                'jenis_status_keberatan.id as id_status',
                'proses_keberatan.ket_jawaban',
                'proses_keberatan.ket_jawaban_path',
                'proses_keberatan.file_jawaban',
                'proses_keberatan.jawab_by',
                'ppid_pendaftar.nama_lengkap'
            )
            ->leftjoin('status_keberatan', 'status_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->leftjoin('jenis_status_keberatan', 'jenis_status_keberatan.id', '=', 'status_keberatan.id_jenis_status_keberatan')
            ->leftjoin('proses_keberatan', 'proses_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->leftJoin('ppid_pendaftar', 'ppid_pendaftar.id', '=', 'ppid_keberatan.id_ppid_pendaftar')
            ->whereIn('jenis_status_keberatan.id', [3])

            ->orderBy('created_at', 'desc')->get();

            $linkSurvei = new LinkSurvei();
        $linkSurvei = $linkSurvei->first();


        return view('admin.layanan_ppid.data_keberatan', compact('ppidKeberatan', 'ppidKeberatanSelesai', 'linkSurvei'));
    }

    public function ppidDataKeberatan(Request $request)
    {
        $asal = $request->input('asal');
        $status = $request->input('status');
        $start = $request->input('datestart');
        $end = $request->input('dateend');

        $result = DB::table('ppid_keberatan')
            ->select(
                'ppid_keberatan.*',
                'jenis_status_keberatan.status as nama_status',
                'jenis_status_keberatan.id as id_status',
                'proses_keberatan.ket_jawaban',
                'proses_keberatan.ket_jawaban_path',
                'proses_keberatan.file_jawaban',

                'proses_keberatan.jawab_by',
                'ppid_pendaftar.nama_lengkap',
                'ppid_pendaftar.jenis_pemohon',
            )
            ->leftjoin('status_keberatan', 'status_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->leftjoin('jenis_status_keberatan', 'jenis_status_keberatan.id', '=', 'status_keberatan.id_jenis_status_keberatan')
            ->leftjoin('proses_keberatan', 'proses_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->leftJoin('ppid_pendaftar', 'ppid_pendaftar.id', '=', 'ppid_keberatan.id_ppid_pendaftar')


            ->orderBy('created_at', 'desc')
            ->where(function ($query) use ($status) {
                if ($status != '-') {
                    $query->where('status_keberatan.id_jenis_status_keberatan', $status);
                } else {
                    $query->whereNotIn('status_keberatan.id_jenis_status_keberatan', [3]); // kecuali yg selesai dan ditolak
                }
            })
            ->where(function ($query) use ($asal) {
                if ($asal != '-') {
                    $query->where('ppid_pendaftar.jenis_pemohon', $asal);
                }
            })
            ->where(function ($query) use ($start, $end) {
                if ($start != '-') {
                    $query->whereBetween(DB::raw('date(ppid_keberatan.created_at)'), [$start, $end]);
                }
            })
            // ->where('status_permohonan.aktif', 1)
            ->get();
        echo json_encode(array('result' => $result));
    }

    public function ppidDataKeberatanSelesai(Request $request)
    {
        $asal = $request->input('asal');
        $status = $request->input('status');
        $start = $request->input('datestart');
        $end = $request->input('dateend');
        if ($status == 'true') {
            $status = 1;
        }

        if ($status == 'false') {
            $status = 0;
        }


        $result = DB::table('ppid_keberatan')
            ->select(
                'ppid_keberatan.*',
                'jenis_status_keberatan.status as nama_status',
                'jenis_status_keberatan.id as id_status',
                'proses_keberatan.ket_jawaban',
                'proses_keberatan.ket_jawaban_path',
                'proses_keberatan.file_jawaban',

                'proses_keberatan.jawab_by',
                'ppid_pendaftar.nama_lengkap',
                'ppid_pendaftar.jenis_pemohon',
                'proses_keberatan.file_jawaban',
                'proses_keberatan.ket_jawaban_path'
            )
            ->leftjoin('status_keberatan', 'status_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->leftjoin('jenis_status_keberatan', 'jenis_status_keberatan.id', '=', 'status_keberatan.id_jenis_status_keberatan')
            ->leftjoin('proses_keberatan', 'proses_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->leftJoin('ppid_pendaftar', 'ppid_pendaftar.id', '=', 'ppid_keberatan.id_ppid_pendaftar')



            ->orderBy('created_at', 'desc')
            ->where(function ($query) use ($status) {
                // if ($status != '-') {
                //     $query->where('status_keberatan.id_jenis_status_keberatan', $status);
                // } 

                if ($status == 1 || $status == 0) {
                    $query->where('ppid_keberatan.isSengketa', $status);
                } else {
                    $query->whereNotIn('status_keberatan.id_jenis_status_keberatan', [1, 2]); // kecuali yg selesai dan ditolak
                }
            })
            ->where(function ($query) use ($asal) {
                if ($asal != '-') {
                    $query->where('ppid_pendaftar.jenis_pemohon', $asal);
                }
            })
            ->where(function ($query) use ($start, $end) {
                if ($start != '-') {
                    $query->whereBetween(DB::raw('date(ppid_keberatan.created_at)'), [$start, $end]);
                }
            })
            // ->where('status_permohonan.aktif', 1)
            ->get();
        echo json_encode(array('result' => $result));
    }

    public function submitKonfirmasiKeberatan(Request $request)
    {

        $data = $request->all();
        $dateCreated = \Carbon\Carbon::now();
        $keberatan = DB::table('ppid_keberatan')->where('id', $data['id'])->first();




        // kalau keberatan diterima / diproses
        $this->prosesKeberatan($data, $keberatan, $dateCreated);

        echo json_encode(array('result' => 'Berhasil mengkonfirmasi keberatan!', 'status' => 'success'));
    }

    public function prosesKeberatan($data, $keberatan, $dateCreated)
    {

        // generate ticket_number
        $ticketNumber = $this->generateTicket($keberatan);

        // update ppid_keberatan
        // date('Y-m-d', strtotime($dateCreated. ' + 10 days'))
        DB::table('ppid_keberatan')->where('id', $data['id'])->update([
            'ticket_keberatan' => $ticketNumber,
            'expired_date' => $data['expired']['tanggal'],

        ]);

        // status keberatan
        // $dataStatusKeberatan = [
        //     'id_ppid_keberatan' => $data['id'],
        //     'id_status' => 2, // dikonfirmasi
        //     'modified_by' => Auth::user()->id,
        //     'modified_date' => $dateCreated,
        //     "created_at" =>  $dateCreated,
        //     "updated_at" => $dateCreated,
        //     'aktif' => 1
        // ];
        DB::table('status_keberatan')->where('id_ppid_keberatan', $data['id'])->update(['id_jenis_status_keberatan' => 2]);
        // DB::table('status_keberatan')->insert($dataStatusKeberatan);
    }

    public function generateTicket($keberatan)
    {
        $countTicket = DB::table('ppid_keberatan')
            ->where('ticket_keberatan', '!=', '-')
            ->count();
        $tipe = strtolower($keberatan->jenis_kanal) == 'web' ? 'Keb-web' : 'Keb-app';
        $dateRequested = new \DateTime($keberatan->created_at);
        $month = $dateRequested->format('m');
        $year = $dateRequested->format('Y');
        $countTicket++;
        $ticketNumber = ($countTicket < 10 ? '0' . $countTicket : $countTicket) . '/' . $tipe . '/' . $month . '/' . $year;
        return $ticketNumber;
    }

    public function submitAnswerKeberatan(Request $request)
    {
        $data = $request->all();
        $dateCreated = \Carbon\Carbon::now();
        $file_dukung = '';
        $dataKeberatan = DB::table('ppid_keberatan')->where('id', $data['id'])->first();
        $ticketKeberatan = str_replace('/', '-', $dataKeberatan->ticket_keberatan);

        if ($request->file('file_dukung')) {
            $file = $request->file('file_dukung');
            // $filename = time().'_'.$file->getClientOriginalName();
            $filename = $ticketKeberatan . '-pendukung' . '.' . $file->getClientOriginalExtension();

            // File extension
            $extension = $file->getClientOriginalExtension();

            // File upload location
            $location = public_path('keberatan/jawaban');

            // Upload file
            // $file->move($location, $filename);
            $path = $file->storeAs('public/keberatan/jawaban', $filename);

            // File path
            $file_dukung = 'keberatan/jawaban/' . $filename;
        }

        $pdf = PDF::loadView('admin.layanan_ppid.answer_template', ['jawaban' => $data['answer']]);
        // $nmfile = time().'_answer.pdf';
        $nmfile = $ticketKeberatan . '.pdf';
        $content = $pdf->download()->getOriginalContent();
        Storage::put('public/keberatan/jawaban/' . $nmfile, $content);
        // $pdf->save(public_path('keberatan/jawaban/') . '' . $nmfile);


        $dataAnswer = [
            'id_ppid_keberatan' => $data['id'],
            'ket_jawaban' => $data['answer'],
            'ket_jawaban_path' => 'keberatan/jawaban/' . $nmfile,
            'file_jawaban' => $file_dukung == '' ? null : $file_dukung,
            'jawab_by' => Auth::user()->id,
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
        ];
        DB::table('proses_keberatan')->insert($dataAnswer);

        // status permohonan
        // $dataStatusPermohonan = [
        //     'id_ppid_permohonan' => $data['id'],
        //     'id_status' => 4, // dijawab oleh
        //     'modified_by' => Auth::user()->id,
        //     'modified_date' => $dateCreated,
        //     "created_at" =>  $dateCreated,
        //     "updated_at" => $dateCreated,
        //     'aktif' => 1
        // ];

        DB::table('status_keberatan')->where('id_ppid_keberatan', $data['id'])->update(['id_jenis_status_keberatan' => 3]);




        echo json_encode(array('result' => 'Berhasil menyimpan respon!', 'status' => 'success'));
    }

    public function submitKonfirmasiSengketa(Request $request, $id)
    {
        if ($request->all == null) {
            $validated = true;
        } else {
            $validated = $request->validate([
                'file' => 'mimes:pdf|max:5120'
            ]);
        }


        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {
            $keberatan = new KeberatanPPID();
            $keberatan = $keberatan->where('id', $id)->first();
            $keberatan->isSengketa = true;


            if (count($request->files) > 0) {
                $files = $request->files;
                $upload_path = 'keberatan/sengketa';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        $keberatan->file_putusan = 'keberatan/sengketa/' . $keberatan->ticket_keberatan . '-sengketa' . '.' . $request->file($fileName)->getClientOriginalExtension();
                    }
                    $fileName2 = $keberatan->ticket_keberatan . '-sengketa' . '.' . $request->file($fileName)->getClientOriginalExtension();
                    $path = $file->storeAs('public/keberatan/sengketa', $fileName2);
                }
            }
            $keberatan->save();
            return redirect()->back()->with('success', 'Berhasil menyimpan status sengketa');
        }
    }

    public function submitPutusan(Request $request, $id)
    {
        $validated = $request->validate([
            'file' => 'required|mimes:pdf|max:5120'
        ]);


        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {
            $keberatan = new KeberatanPPID();
            $keberatan = $keberatan->where('id', $id)->first();
            // $keberatan->isSengketa = true;


            if (count($request->files) > 0) {
                $files = $request->files;
                $upload_path = 'keberatan/sengketa';
                foreach ($files as $fileName => $name) {
                    $file = $request->file($fileName);
                    if ($fileName == 'file') {
                        $keberatan->file_putusan = 'keberatan/sengketa/' . $keberatan->ticket_keberatan . '-sengketa' . '.' . $request->file($fileName)->getClientOriginalExtension();
                    }
                    $fileName2 = $keberatan->ticket_keberatan . '-sengketa' . '.' . $request->file($fileName)->getClientOriginalExtension();
                    $path = $file->storeAs('public/keberatan/sengketa', $fileName2);
                }
            }
            $keberatan->save();
            return redirect()->back()->with('success', 'Berhasil menyimpan File Putusan');
        }
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
