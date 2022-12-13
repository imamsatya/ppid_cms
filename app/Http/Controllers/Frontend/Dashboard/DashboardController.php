<?php

namespace App\Http\Controllers\Frontend\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\LayananPPID\Keberatan\KeberatanPPID;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::guard('usersppid')->user();
        $ppidKeberatan = DB::table('ppid_keberatan')
            ->select(
                'ppid_keberatan.*',
                'jenis_status_keberatan.status as nama_status',
                'jenis_status_keberatan.id as id_status',
                'proses_keberatan.ket_jawaban',
                'proses_keberatan.file_jawaban',
                'proses_keberatan.jawab_by'
            )
            ->leftjoin('status_keberatan', 'status_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            ->leftjoin('jenis_status_keberatan', 'jenis_status_keberatan.id', '=', 'status_keberatan.id_jenis_status_keberatan')
            ->leftjoin('proses_keberatan', 'proses_keberatan.id_ppid_keberatan', '=', 'ppid_keberatan.id')
            // ->where('status_permohonan.aktif', 1)
            ->where('ppid_keberatan.id_ppid_pendaftar', $user->id)
            ->orderBy('created_at', 'asc')->get();







        return view('frontend.dashboard.dashboard', compact('ppidKeberatan'));
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
