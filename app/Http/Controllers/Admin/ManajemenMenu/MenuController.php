<?php

namespace App\Http\Controllers\Admin\ManajemenMenu;

use App\Http\Controllers\Controller;
use App\Models\ManajemenMenu\MainMenu;
use App\Models\ManajemenMenu\SubMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus = new MainMenu();
        $menus = $menus::with('submenus')->get();

        return view('admin.manajemen_menu.manajemen_menu', compact('menus'));
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

        $menus = ($request->data['newMainMenu']);
        $subMenus = ($request->data['newSubMenu']);
        // dd($subMenus);

        foreach ($menus as $key => $menu) {
            // dd($menu['id_menu']);
            $mainMenu = new MainMenu();
            $mainMenu = $mainMenu->where('id', $menu['id_menu'])->first();
            $mainMenu->urutan = $menu['urutan'];
            $mainMenu->save();
        }

        foreach ($subMenus as $key => $submenu) {
            // dd($menu['id_menu']);
            // dd((int)$submenu['idsubmenu']);
            $submenu_row = new SubMenu();
            $submenu_row = $submenu_row->where('id', (int)$submenu['idsubmenu'])->first();

            $submenu_row->main_menu_id = (int)$submenu['idmainmenu'];
            $submenu_row->urutan = (int)$submenu['urutan'];
            $submenu_row->save();
        }

        return redirect()->back()->with('success', 'Berhasil menyimpan Pengelolaan Menu');
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
