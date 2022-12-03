<?php

namespace App\View\Components\Frontend;

use Illuminate\View\Component;
use App\Models\ManajemenHome\LinkApp;
use App\Models\ManajemenMenu\MainMenu;
use App\Models\ManajemenHome\SosialMedia;

class Layout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $sosialMedia = new SosialMedia();
        $sosialMedia = $sosialMedia::all();

        $linkApp = new LinkApp();
        $linkApp = $linkApp::all();

        $menus = new MainMenu();
        $menus = $menus::with('submenus')->orderBy('urutan', 'asc')->get();
        return view('components.frontend.layout', compact('sosialMedia', 'linkApp', 'menus'));
    }
}
