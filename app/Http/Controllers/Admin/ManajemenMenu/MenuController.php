<?php

namespace App\Http\Controllers\Admin\ManajemenMenu;

use App\Http\Controllers\Controller;
use App\Models\ManajemenMenu\MainMenu;
use App\Models\ManajemenMenu\SubMenu;
use Illuminate\Http\Request;
use Session;
use Svg\Tag\Rect;

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
        $menus = $menus::with('submenus')->orderBy('urutan')->get();

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
            $submenuDb = new SubMenu();
            $submenuDb = $submenuDb->where('id', (int)$submenu['idsubmenu'])->first();

            $submenuDb->main_menu_id = (int)$submenu['idmainmenu'];
            $submenuDb->urutan = (int)$submenu['urutan'];
            $submenuDb->save();
        }

        return redirect()->back()->with('success', 'Berhasil menyimpan Pengelolaan Menu');
    }

    public function addMainMenu(Request $request)
    {

        $validated = $request->validate([
            'namaMenu' => 'required',
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        $mainMenu = new MainMenu();

        if ($validated) {
            $mainMenu = new MainMenu();
            $mainMenu->nama_menu = $request->namaMenu;
            $mainMenu->routing = $request->routing;
            $mainMenu->is_active = ($request->statusMenu == 'true') ? true : false;
            $mainMenu->urutan = count($mainMenu::all()) + 1;
            $mainMenu->save();

            return redirect()->back()->with('success', 'Berhasil menyimpan Main Menu');
        }
    }

    public function deleteMainMenu(Request $request)
    {

        $mainmenu = MainMenu::find($request->id);
        $mainmenu->submenus()->delete();
        $mainmenu->delete();

        Session::flash('success', "Berhasil menghapus Main Manu");
    }

    public function updateMainMenu(Request $request, $id)
    {
        $validated = $request->validate([
            'namaMenu' => 'required',
        ]);

        if ($validated) {
            $mainMenu = new MainMenu();
            $mainMenu = $mainMenu->where('id', $id)->first();
            $mainMenu->nama_menu = $request->namaMenu;
            $mainMenu->routing = $request->routing;
            $mainMenu->is_active = ($request->statusMenu == 'true') ? true : false;

            $mainMenu->save();

            return redirect()->back()->with('success', 'Berhasil mengubah Main Menu');
        }
    }

    public function addSubMenu(Request $request, $mainMenuId)
    {

        $validated = $request->validate([
            'namaSubMenu' => 'required',
            'routing' => 'required',
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        $subMenu = new SubMenu();

        if ($validated) {
            $subMenu = new SubMenu();
            $subMenu->nama_menu = $request->namaSubMenu;
            $subMenu->routing = $request->routing;
            $subMenu->is_active = ($request->statusMenu == 'true') ? true : false;
            $subMenu->main_menu_id = $mainMenuId;
            $subMenu->urutan = count($subMenu::where('main_menu_id', $mainMenuId)->get()) + 1;
            $subMenu->save();

            return redirect()->back()->with('success', 'Berhasil menambah Sub Menu');
        }
    }

    public function updateSubMenu(Request $request, $id)
    {
        $validated = $request->validate([
            'namaMenu' => 'required',
            'routing' => 'required',
        ]);

        if ($validated) {
            $subMenu = new SubMenu();
            $subMenu = $subMenu->where('id', $id)->first();
            $subMenu->nama_menu = $request->namaMenu;
            $subMenu->routing = $request->routing;
            $subMenu->is_active = ($request->statusMenu == 'true') ? true : false;

            $subMenu->save();

            return redirect()->back()->with('success', 'Berhasil mengubah Sub Menu');
        }
    }

    public function deleteSubMenu(Request $request)
    {


        $subMenu = SubMenu::find($request->id);
        $subMenu->delete();

        Session::flash('success', "Berhasil menghapus Sub Manu");
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
