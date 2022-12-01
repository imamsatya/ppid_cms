<?php

namespace App\Http\Controllers\Frontend\InformasiPublik;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InformasiPublik\InformasiSertaMerta;
use App\Models\InformasiPublik\InformasiPublikBanner;
use App\Models\InformasiPublik\InformasiSecaraBerkala;
use App\Models\InformasiPublik\InformasiSetiapSaat;

class InformasiPublikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $informasiPublikBanner = new InformasiPublikBanner();
        $informasiPublikBanner = $informasiPublikBanner->first();

        $informasiSecaraBerkala = new InformasiSecaraBerkala();
        $informasiSecaraBerkala = $informasiSecaraBerkala::paginate(10);

        $informasiSertaMerta = new InformasiSertaMerta();
        $informasiSertaMerta = $informasiSertaMerta::paginate(10);

        $informasiSetiapSaat = new InformasiSetiapSaat();
        $informasiSetiapSaat = $informasiSetiapSaat::paginate(10);


        return view('frontend.informasipublik.informasi-publik', compact('informasiPublikBanner', 'informasiSecaraBerkala', 'informasiSertaMerta', 'informasiSetiapSaat'));
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
