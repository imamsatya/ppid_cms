<?php

namespace App\Http\Controllers\Frontend\Profil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profil\StrukturOrganisasi;
use App\Models\Profil\StrukturOrganisasiBaganKiri;
use App\Models\Profil\StrukturOrganisasiBaganKanan;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $strukturOrganisasi = new StrukturOrganisasi();
        $strukturOrganisasi = $strukturOrganisasi->first();
        $baganKiri = new StrukturOrganisasiBaganKiri();
        $baganKiri = $baganKiri::all();
        $baganKanan = new StrukturOrganisasiBaganKanan();
        $baganKanan = $baganKanan::all()->sortBy('urutan');
        return view('frontend.profil.profile-struktur-ppid', compact('strukturOrganisasi', 'baganKiri', 'baganKanan'));
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
