<?php

namespace App\Http\Controllers\Frontend\Regulasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Regulasi\PeraturanKIP;
use App\Models\Regulasi\RegulasiBanner;
use App\Models\Regulasi\RancanganPeraturanKIP;

class RegulasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $regulasiBanner = new RegulasiBanner();
        $regulasiBanner = $regulasiBanner->first();
        $peraturanKIP = new PeraturanKIP();
<<<<<<< HEAD
        $peraturanKIP = $peraturanKIP::orderBy('urutan')->paginate($perPage = 9, $columns = ['*'], $pageName = 'peraturan_kip');
        $rancanganPeraturanKIP = new RancanganPeraturanKIP();
        $rancanganPeraturanKIP = $rancanganPeraturanKIP::orderBy('urutan')->paginate($perPage = 9, $columns = ['*'], $pageName = 'rancangan_peraturan_kip');
=======
        $peraturanKIP = $peraturanKIP::orderBy('urutan')->paginate(9);
        $rancanganPeraturanKIP = new RancanganPeraturanKIP();
        $rancanganPeraturanKIP = $rancanganPeraturanKIP::orderBy('urutan')->paginate(9);
>>>>>>> origin/main
        return view('frontend.regulasi.regulasi', compact('regulasiBanner', 'peraturanKIP', 'rancanganPeraturanKIP'));
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
