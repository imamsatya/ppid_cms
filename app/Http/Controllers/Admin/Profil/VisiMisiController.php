<?php

namespace App\Http\Controllers\Admin\Profil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profil\VisiMisi;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(VisiMisi::class, 'visimisi');
    }
    public function index()
    {
        //
        // $this->authorize('viewAny', VisiMisi::class);
        $visiMisi = new VisiMisi();
        $visiMisi = $visiMisi->first();
        return view('admin.profil.visimisi', compact('visiMisi'));
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
        $validated = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        if ($validated) {


            $visiMisi = new VisiMisi();
            $visiMisi = $visiMisi->first();

            if ($visiMisi) {
                $visiMisi->visi = $request->visi;
                $visiMisi->misi = $request->misi;

                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/profil/visi_dan_misi';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $visiMisi->banner_path = 'adminAssets/profil/visi_dan_misi/banner.' . $file->getClientOriginalExtension();
                        }

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }
                $visiMisi->save();
            } else {
                $visiMisi = new VisiMisi();
                $visiMisi->visi = $request->visi;
                $visiMisi->misi = $request->misi;

                if (count($request->files) > 0) {
                    $files = $request->files;
                    $upload_path = 'adminAssets/profil/visi_dan_misi';
                    foreach ($files as $fileName => $name) {
                        $file = $request->file($fileName);
                        if ($fileName == 'banner') {
                            $visiMisi->banner_path = 'adminAssets/profil/visi_dan_misi/banner.' . $file->getClientOriginalExtension();
                        }

                        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
                    }
                }
                $visiMisi->save();
            }


            return redirect()->back()->with('success', 'Berhasil menyimpan tugas dan fungsi');
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
