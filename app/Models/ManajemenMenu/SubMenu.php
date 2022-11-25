<?php

namespace App\Models\ManajemenMenu;

use App\Models\ManajemenMenu\MainMenu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubMenu extends Model
{
    use HasFactory;
    protected $table = 'submenus';

    public function mainmenu()
    {
        return $this->belongsTo(MainMenu::class);
    }
}
