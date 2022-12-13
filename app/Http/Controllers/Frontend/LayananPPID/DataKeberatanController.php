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

        if ($data['id'] == '') { // new data
            $this->addKeberatan($data, $dateCreated);
        } else { // update data
            $this->editKeberatan($data, $dateCreated);
        }

        echo json_encode(array('result' => 'Berhasil menyimpan data!', 'status' => 'success'));
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


        DB::table('ppid_keberatan')->where('id', $data['id'])->update([
            'id_ppid_pendaftar' => $data['id_ppid_pendaftar'],
            'ticket_keberatan' => $data['ticket_keberatan'],
            'jenis_kanal' => 'web',
            'perihal_keberatan' => $data['perihal_keberatan'],
            'id_permohonan' => $data['id_permohonan'],
            'id_kategori_keberatan' => $data['id_kategori_keberatan'],
            "updated_at" => $dateCreated
        ]);
    }

    public function ppidDataKeberatanSpec($id)
    {

        $result = DB::table('ppid_keberatan')
            ->select('ppid_keberatan.*', 'kategori_keberatan.jenis_keberatan as jenis_keberatan')
            ->join('kategori_keberatan', 'kategori_keberatan.id', '=', 'ppid_keberatan.id_kategori_keberatan')
            ->where('ppid_keberatan.id', $id)->first();
        echo json_encode(array('result' => $result, 'status' => 'success'));
    }

    public function ppidDataKeberatan(Request $request)
    {
        // status itu jenis_status_keberatan
        $user = Auth::guard('usersppid')->user();
        $result = DB::table('ppid_keberatan')
            ->select('ppid_keberatan.*', 'jenis_status_keberatan.status as nama_status', 'jenis_status_keberatan.id as id_status')
            ->join('status_keberatan', 'status_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->join('jenis_status_keberatan', 'jenis_status_keberatan.id', '=', 'status_keberatan.id_jenis_status_keberatan')
            // ->where('status_permohonan.aktif', 1)
            ->where('ppid_keberatan.id_ppid_pendaftar', $user->id)
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
        }
        echo json_encode(array('status' => 'success', 'result' => 'Berhasil menghapus data!'));
    }
}
