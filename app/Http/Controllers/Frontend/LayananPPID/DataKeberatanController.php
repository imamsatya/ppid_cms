<?php

namespace App\Http\Controllers\Frontend\LayananPPID;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DataKeberatanController extends Controller
{
    //
    public function ppidKategoriKeberatan()
    {
        $result = DB::table('kategori_keberatan')->get();
        echo json_encode(array('result' => $result));
    }

    public function submitKeberatanUser(Request $request)
    {
        $data = $request->all();
        $dateCreated = \Carbon\Carbon::now();
        $result = true;
        if ($data['id'] == '') { // new data
            $this->addKeberatan($data, $dateCreated);
        } else { // update data
            $result =   $this->editKeberatan($data, $dateCreated);
        }

        // echo json_encode(array('result' => 'Berhasil menyimpan data!', 'status' => 'success'));
        if ($result) {
            echo json_encode(array('result' => 'Berhasil menyimpan data!', 'status' => 'success'));
        } else {
            echo json_encode(array('result' => 'Gagal menyimpan data, keberatan sudah dikonfirmasi admin!', 'status' => 'error'));
        }
    }

    public function addKeberatan($data, $dateCreated)
    {

        // ppid_permohonan
        $insertedId = DB::table('ppid_keberatan')->insertGetId([
            'id_ppid_pendaftar' => $data['id_ppid_pendaftar'],
            'ticket_keberatan' => $data['ticket_keberatan'],
            'jenis_kanal' => 'web',
            'perihal_keberatan' => $data['perihal_keberatan'],
            'id_permohonan' => $data['id_permohonan'],
            'id_kategori_keberatan' => $data['id_kategori_keberatan'],
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated
        ]);

        // status_permohonan
        DB::table('status_keberatan')->insert([
            'id_ppid_keberatan' => $insertedId,
            'id_jenis_status_keberatan' => 1, // belum dikonfirmasi
            'modified_by' => null,
            'modified_date' => $dateCreated,
            "created_at" =>  $dateCreated,
            "updated_at" => $dateCreated,
            // 'aktif' => 1
        ]);
    }

    public function editKeberatan($data, $dateCreated)
    {
        $cekStatus = DB::table('ppid_keberatan')->where('id', $data['id'])->first();
        $statusKeberatan = DB::table('status_keberatan')->where('id_ppid_keberatan', $cekStatus->id)->first();
        if ($statusKeberatan->id_jenis_status_keberatan == 1) {
            DB::table('ppid_keberatan')->where('id', $data['id'])->update([
                'id_ppid_pendaftar' => $data['id_ppid_pendaftar'],
                'ticket_keberatan' => $data['ticket_keberatan'],
                'jenis_kanal' => 'web',
                'perihal_keberatan' => $data['perihal_keberatan'],
                'id_permohonan' => $data['id_permohonan'],
                'id_kategori_keberatan' => $data['id_kategori_keberatan'],
                "updated_at" => $dateCreated
            ]);
            return true;
        }
        return false;
    }

    public function ppidDataKeberatanSpec($id)
    {

        $result = DB::table('ppid_keberatan')
            ->select(
                'ppid_keberatan.*',
                'kategori_keberatan.jenis_keberatan as jenis_keberatan',
                'ppid_permohonan.ticket_permohonan',
                'ppid_permohonan.informasi_diminta',
                'ppid_pendaftar.identitas_file_path',
                'status_keberatan.id_jenis_status_keberatan as id_status_keberatan',
                'jenis_status_keberatan.status as nama_status_keberatan'
            )
            ->leftjoin('kategori_keberatan', 'kategori_keberatan.id', '=', 'ppid_keberatan.id_kategori_keberatan')
            ->leftjoin('ppid_permohonan', 'ppid_permohonan.id', '=', 'ppid_keberatan.id_permohonan')
            ->leftjoin('ppid_pendaftar', 'ppid_pendaftar.id', '=', 'ppid_keberatan.id_ppid_pendaftar')
            ->leftjoin('status_keberatan', 'status_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->leftjoin('jenis_status_keberatan', 'jenis_status_keberatan.id', '=', 'status_keberatan.id_jenis_status_keberatan')
            ->where('ppid_keberatan.id', $id)->first();

        echo json_encode(array('result' => $result, 'status' => 'success'));
    }

    public function ppidDataKeberatan(Request $request)
    {
        // status itu jenis_status_keberatan
        $user = Auth::guard('usersppid')->user();
        $result = DB::table('ppid_keberatan')
            ->select(
                'ppid_keberatan.*',
                'jenis_status_keberatan.status as nama_status',
                'jenis_status_keberatan.id as id_status',
                'kategori_keberatan.jenis_keberatan as jenis_keberatan',
                'proses_keberatan.ket_jawaban',
                'proses_keberatan.ket_jawaban_path',
                'proses_keberatan.file_jawaban',
                'proses_keberatan.jawab_by'
            )
            ->leftjoin('status_keberatan', 'status_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->leftjoin('jenis_status_keberatan', 'jenis_status_keberatan.id', '=', 'status_keberatan.id_jenis_status_keberatan')
            ->leftjoin('kategori_keberatan', 'kategori_keberatan.id', '=', 'ppid_keberatan.id_kategori_keberatan')
            ->leftjoin('proses_keberatan', 'proses_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            // ->where('status_permohonan.aktif', 1)
            ->where('ppid_keberatan.id_ppid_pendaftar', $user->id)
            ->orderByDesc('ppid_keberatan.created_at')
            ->get();
        echo json_encode(array('result' => $result, 'ses' => $user));
    }

    public function ppidHapusDataKeberatan(Request $request, $id)
    {
        $statusKeberatan = DB::table('status_keberatan')->where([
            'id_ppid_keberatan' => $id,
            // 'aktif' => 1
        ])->first();

        if ($statusKeberatan && $statusKeberatan->id_jenis_status_keberatan == 1) { // belum dikonfirmasi
            DB::table('status_keberatan')->where('id_ppid_keberatan', $id)->delete();
            DB::table('ppid_keberatan')->where('id', $id)->delete();
            echo json_encode(array('status' => 'success', 'result' => 'Berhasil menghapus data!'));
        } else {
            echo json_encode(array('status' => 'error', 'result' => 'Gagal menyimpan data, permohonan sudah dikonfirmasi admin!'));
        }
    }

    public function ppidDataPermohonanSebelumnya(Request $request, $id)
    {
        $result = DB::table('ppid_permohonan')
            ->select('ppid_permohonan.*', 'ppid_mendapatkan.name as cara_mendapatkan', 'ppid_memberikan.name as cara_memberikan', 'status_permohonan.id_status as id_status_permohonan', 'status.name as nama_status_permohonan')
            ->join('ppid_mendapatkan', 'ppid_mendapatkan.id', '=', 'ppid_permohonan.id_mendapatkan')
            ->join('ppid_memberikan', 'ppid_memberikan.id', '=', 'ppid_permohonan.id_cara')
            ->join('status_permohonan', 'status_permohonan.id_ppid_permohonan', '=', 'ppid_permohonan.id')
            ->join('status', 'status.id', '=', 'status_permohonan.id_status')
            ->where('status_permohonan.aktif', 1)
            ->whereIn('status.id', [4, 5])
            ->where('ppid_permohonan.id_ppid_pendaftar', $id)->get();
        echo json_encode(array('result' => $result, 'status' => 'success'));
    }

    public function ppidStatusKeberatan(Request $request)
    {
        $result = DB::table('jenis_status_keberatan')->get();
        echo json_encode(array('result' => $result, 'status' => 'success'));
    }
}
