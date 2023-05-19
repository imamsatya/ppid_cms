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
            'icon' => 'required|mimes:png,jpg,jpeg|max:5120',
            'url' => 'required',
            'urutan' => 'required',
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {
            $sosialMedia = new SosialMedia();
            $sosialMedia->url = $request->url;
            $sosialMedia->urutan = $request->urutan;
            $file = $request->file('icon');
            $upload_path = 'adminAssets/home/footer/sosialmedia';
            $sosialMedia->icon = 'adminAssets/home/footer/sosialmedia/' . $request->file('icon')->getClientOriginalName();
<<<<<<< HEAD

            $fileName2 =  $request->file('icon')->getClientOriginalName();
            $path = $file->storeAs('public/adminAssets/home/footer/sosialmedia', $fileName2);

            $sosialMedia->save();

=======
            $file->move($upload_path, $request->file('icon')->getClientOriginalName());
            $sosialMedia->save();
            $sosialMedia->save();
>>>>>>> origin/main

            return redirect()->back()->with('success', 'Berhasil menyimpan Sosial Media');
        }
    }

    public function linkAppStore(Request $request)
    {
        //


        $validated = $request->validate([
            'icon' => 'required|mimes:png,jpg,jpeg|max:5120',
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {
            $linkApp = new LinkApp();

            $linkApp->url = $request->url;
            $file = $request->file('icon');

            $upload_path = 'adminAssets/home/footer/linkapps';
            $linkApp->icon = 'adminAssets/home/footer/linkapps/' . $request->file('icon')->getClientOriginalName();
<<<<<<< HEAD

            $fileName2 =  $request->file('icon')->getClientOriginalName();
            $path = $file->storeAs('public/adminAssets/home/footer/linkapps', $fileName2);

=======
            $file->move($upload_path, $request->file('icon')->getClientOriginalName());
>>>>>>> origin/main
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
            'icon' => 'required|mimes:png,jpg,jpeg|max:5120',
            'url' => 'required',
            'urutan' => 'required'
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {
            $sosialMedia = new SosialMedia();
            $sosialMedia = $sosialMedia->where('id', $id)->first();

            $sosialMedia->url = $request->url;
            $sosialMedia->urutan = $request->urutan;
            if (count($request->files) > 0) {
                $file = $request->file('icon');
                File::delete($sosialMedia->icon);
                $file = $request->file('icon');
                $upload_path = 'adminAssets/home/footer/sosialmedia';
                $sosialMedia->icon = 'adminAssets/home/footer/sosialmedia/' . $request->file('icon')->getClientOriginalName();
<<<<<<< HEAD

                $fileName2 =  $request->file('icon')->getClientOriginalName();
                $path = $file->storeAs('public/adminAssets/home/footer/sosialmedia', $fileName2);
=======
                $file->move($upload_path, $request->file('icon')->getClientOriginalName());
>>>>>>> origin/main
            }
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


            if (count($request->files) > 0) {
                $file = $request->file('icon');
                File::delete($linkApp->icon);
                $file = $request->file('icon');
                $upload_path = 'adminAssets/home/footer/linkapps';
                $linkApp->icon = 'adminAssets/home/footer/linkapps/' . $request->file('icon')->getClientOriginalName();
<<<<<<< HEAD

                $fileName2 =  $request->file('icon')->getClientOriginalName();
                $path = $file->storeAs('public/adminAssets/home/footer/linkapps', $fileName2);
=======
                $file->move($upload_path, $request->file('icon')->getClientOriginalName());
>>>>>>> origin/main
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

<<<<<<< HEAD
    public function sosialmediaDestroy(Request $request)
    {
        $sosialMedia = new SosialMedia();
        $sosialMedia = $sosialMedia->where('id', $request->id)->delete();
=======
    public function sosialmediaDestroy($id)
    {
        //
        $sosialMedia = new SosialMedia();
        $sosialMedia = $sosialMedia->where('id', $id)->delete();
>>>>>>> origin/main

        Session::flash('success', "Berhasil menghapus Sosial Media");
    }

<<<<<<< HEAD
    public function linkAppDestroy(Request $request)
    {
        $linkApp = new LinkApp();
        File::delete($linkApp->where('id', $request->id)->first()->icon);
        $linkApp = $linkApp->where('id', $request->id)->delete();
=======
    public function linkAppDestroy($id)
    {
        //
        $linkApp = new LinkApp();
        File::delete($linkApp->where('id', $id)->first()->icon);
        $linkApp = $linkApp->where('id', $id)->delete();
>>>>>>> origin/main

        Session::flash('success', "Berhasil menghapus Link App");
    }
}
