<?php

namespace App\Http\Controllers\Admin\Profil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profil\ProfilSingkat;

class ProfilSingkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(ProfilSingkat::class, 'profilsingkat');
    }
    public function index()
    {
        //
        $profilSingkat = new ProfilSingkat();
        $profilSingkat = $profilSingkat->first();



        return view('admin.profil.profilsingkat', compact('profilSingkat'));
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
        //banner dan side Image
        $validated = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'banner' => 'max:5120|mimes:png,jpg,jpeg',
            'sideImage' => 'max:5120|mimes:png,jpg,jpeg'
        ]);



        if ($validated) {
            $profilSingkat = new ProfilSingkat();
            $profilSingkat = $profilSingkat->first();

            if ($profilSingkat) {
                $profilSingkat->judul = $request->judul;
                $profilSingkat->konten = $request->konten;

                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/profil/profil_singkat';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $profilSingkat->banner_path = 'adminAssets/profil/profil_singkat/banner.' . $file->getClientOriginalExtension();
                        }
                        if ($fileName == 'sideImage') {
                            $profilSingkat->side_image_path = 'adminAssets/profil/profil_singkat/sideImage.' . $file->getClientOriginalExtension();
                        }
                        $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                        $path = $file->storeAs('public/adminAssets/profil/profil_singkat', $fileName2);
                    }
                }
                $profilSingkat->save();
            } else {
                $profilSingkat = new ProfilSingkat();
                $profilSingkat->judul = $request->judul;
                $profilSingkat->konten = $request->konten;

                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/profil/profil_singkat';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $profilSingkat->banner_path = 'adminAssets/profil/profil_singkat/banner.' . $file->getClientOriginalExtension();
                        }
                        if ($fileName == 'sideImage') {
                            $profilSingkat->side_image_path = 'adminAssets/profil/profil_singkat/sideImage.' . $file->getClientOriginalExtension();
                        }
                        $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                        $path = $file->storeAs('public/adminAssets/profil/profil_singkat', $fileName2);
                    }
                }
                $profilSingkat->save();
            }


            return redirect()->back()->with('success', 'Berhasil menyimpan profil singkat');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
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
