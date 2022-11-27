<?php

namespace App\Http\Controllers\Admin\ManajemenHome;

use App\Http\Controllers\Controller;
use App\Models\ManajemenHome\LinkApp;
use App\Models\ManajemenHome\SosialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Session;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sosialMedia = new SosialMedia();
        $sosialMedia = $sosialMedia::all();

        $linkApp = new LinkApp();
        $linkApp = $linkApp::all();
        return view('admin.manajemen_home.footer', compact('sosialMedia', 'linkApp'));
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

    public function sosialMediaStore(Request $request)
    {
        //


        $validated = $request->validate([
            'icon' => 'required',
            'url' => 'required',
            'urutan' => 'required',
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {
            $sosialMedia = new SosialMedia();
            $sosialMedia->icon = $request->icon;
            $sosialMedia->url = $request->url;
            $sosialMedia->urutan = $request->urutan;
            $sosialMedia->save();

            return redirect()->back()->with('success', 'Berhasil menyimpan Sosial Media');
        }
    }

    public function linkAppStore(Request $request)
    {
        //


        $validated = $request->validate([
            'icon' => 'required|mimes:png,jpg,jpeg',
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {
            $linkApp = new LinkApp();

            $linkApp->url = $request->url;
            $file = $request->file('icon');

            $upload_path = 'adminAssets/home/footer';
            $linkApp->icon = 'adminAssets/home/footer/' . $request->file('icon')->getClientOriginalName();
            $file->move($upload_path, $request->file('icon')->getClientOriginalName());
            $linkApp->save();

            return redirect()->back()->with('success', 'Berhasil menyimpan Link App');
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

    public function sosialmediaUpdate(Request $request, $id)
    {
        //
        //
        $validated = $request->validate([
            'icon' => 'required',
            'url' => 'required',
            'urutan' => 'required'
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {
            $sosialMedia = new SosialMedia();
            $sosialMedia = $sosialMedia->where('id', $id)->first();
            $sosialMedia->icon = $request->icon;
            $sosialMedia->url = $request->url;
            $sosialMedia->urutan = $request->urutan;
            $sosialMedia->save();

            return redirect()->back()->with('success', 'Berhasil mengubah Sosial Media');
        }
    }

    public function linkAppUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'url' => 'required',
        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        if ($validated) {
            $linkApp = new LinkApp();
            $linkApp = $linkApp->where('id', $id)->first();
            $linkApp->url = $request->url;
            $file = $request->file('icon');

            if (count($request->files) > 0) {
                File::delete($linkApp->icon);
                $file = $request->file('icon');
                $upload_path = 'adminAssets/home/footer';
                $linkApp->icon = 'adminAssets/home/footer/' . $request->file('icon')->getClientOriginalName();
                $file->move($upload_path, $request->file('icon')->getClientOriginalName());
            }
            $linkApp->save();

            return redirect()->back()->with('success', 'Berhasil mengubah Link App');
        }
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

    public function sosialmediaDestroy($id)
    {
        //
        $sosialMedia = new SosialMedia();
        $sosialMedia = $sosialMedia->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus Sosial Media");
    }

    public function linkAppDestroy($id)
    {
        //
        $linkApp = new LinkApp();
        File::delete($linkApp->where('id', $id)->first()->icon);
        $linkApp = $linkApp->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus Link App");
    }
}
