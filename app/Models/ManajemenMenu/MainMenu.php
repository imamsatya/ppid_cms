<?php

namespace App\Models\ManajemenMenu;

use App\Models\ManajemenMenu\SubMenu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MainMenu extends Model
{
    use HasFactory;
    protected $table = 'mainmenus';

    public function submenus()
    {
        return $this->hasMany(SubMenu::class);
    }
}
