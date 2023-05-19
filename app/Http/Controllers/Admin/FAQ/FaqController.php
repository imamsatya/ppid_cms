<?php

namespace App\Http\Controllers\Admin\FAQ;

use App\Http\Controllers\Controller;
use App\Models\FAQ\Faq;
use App\Models\FAQ\FaqBanner;
use Illuminate\Http\Request;
use Session;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faqBanner = new FaqBanner();
        $faqBanner = $faqBanner->first();

        $faq = new Faq();
        $faq = $faq::all();
        return view('admin.faq.faq', compact('faqBanner', 'faq'));
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
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {
            $faq = new Faq();
            $faq->pertanyaan = $request->pertanyaan;
            $faq->jawaban = $request->jawaban;
            $faq->save();

            return redirect()->back()->with('success', 'Berhasil menyimpan FAQ');
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
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        if ($validated) {
            $faq = new Faq();
            $faq = $faq->where('id', $id)->first();
            $faq->pertanyaan = $request->pertanyaan;
            $faq->jawaban = $request->jawaban;
            $faq->save();

            return redirect()->back()->with('success', 'Berhasil mengubah FAQ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function destroy(Request $request)
    {
        $faq = new Faq();
        $faq = $faq->where('id', $request->id)->delete();
=======
    public function destroy($id)
    {
        //
        $faq = new Faq();
        $faq = $faq->where('id', $id)->delete();
>>>>>>> origin/main

        Session::flash('success', "Berhasil menghapus FAQ");
    }
}
