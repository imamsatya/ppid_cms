<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Regulasi\RegulasiBanner;
class SiaranPersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        dd($request);
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
    public function show(Request $request, $id)
    {
        //
        $response = Http::get('https://bumn.go.id/api/pressconference');
        $siaranPers = $response->json();
        if ($siaranPers['status'] == 1) {
            $siaranPers = $siaranPers['data'];
        }else{
            $siaranPers = null;
        }
        $selectedSiaran = null;
        for ($i=0; $i < count($siaranPers) ; $i++) { 
            if ($siaranPers[$i]['id'] == $id) {
                $selectedSiaran = $siaranPers[$i];
            }
        }
        $regulasiBanner = new RegulasiBanner();
        $regulasiBanner = $regulasiBanner->first();
        return view('frontend.api_route.siaranpers', compact('selectedSiaran', 'regulasiBanner'));
    }
    public function showSiaran($id)
    {
        //
        $response = Http::get('https://bumn.go.id/api/pressconference');
        $siaranPers = $response->json();
        if ($siaranPers['status'] == 1) {
            $siaranPers = $siaranPers['data'];
        }else{
            $siaranPers = null;
        }
        $selectedSiaran = null;
        for ($i=0; $i < count($siaranPers) ; $i++) { 
            if ($siaranPers[$i]['id'] == $id) {
                $selectedSiaran = $siaranPers[$i];
            }
        }

        $regulasiBanner = new RegulasiBanner();
        $regulasiBanner = $regulasiBanner->first();
        return view('frontend.api_route.siaranpers', compact('selectedSiaran', 'regulasiBanner'));
        
        
       
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
