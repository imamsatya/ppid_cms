<?php

namespace App\Http\Controllers\Admin\ManajemenHome;

use Illuminate\Http\Request;
use App\Models\ManajemenHome\Video;
use App\Http\Controllers\Controller;
use Session;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $video = new Video();
        $video = $video::all();
        return view('admin.manajemen_home.video', compact('video'));
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
            'url' => 'required',
            // 'deskripsi' => 'required',
            'urutan' => 'required',

        ]);

        if ($validated) {
            $video = new Video();


            $video->url = $request->url;
            $video->deskripsi = $request->deskripsi;
            $video->urutan = $request->urutan;

            $video->save();



            return redirect()->back()->with('success', 'Berhasil menyimpan Slider');
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
        $validated = $request->validate([
            'url' => 'required',
            // 'deskripsi' => 'required',
            'urutan' => 'required',

        ]);
        if ($validated) {
            $video = new video;
            $video = $video->where('id', $id)->first();
            $video->url = $request->url;
            $video->deskripsi = $request->deskripsi;
            $video->urutan = $request->urutan;


            $video->save();
            return redirect()->back()->with('success', 'Berhasil mengubah Video');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $video = new Video();
        $video = $video->where('id', $request->id)->delete();

        Session::flash('success', "Berhasil menghapus video");
    }
}
