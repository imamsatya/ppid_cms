<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\GeneralModel;
use App\Models\Menu;
use App\Models\Perusahaan;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
>>>>>>> origin/main

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'is_external', 'id_bumn', 'kategori_user_id', 'asal_instansi', 'activated', 'is_pejabat', 'handphone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */ 
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
=======
     * @var array<int, string>
     */

    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'jenispemohon',
        'jenisidentitas',
        'noidentitas',
        'alamat',
        'nohp',
        'npwp',
        'pekerjaan',
        'identitas_file_path'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
>>>>>>> origin/main
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD

    public function getmenuaccess()
    {
        try{
            return Menu::whereHas('roles', function($query){
                $query->whereIn('id', explode(',', $this->roles()->get()->implode('id', ',')));
            })->where('status', (bool)true)->orderBy('order')->get();
        }catch(\Exception $e){
            return collect([]);
        }
    }

    // public function perusahaan()
    // {
    //     return $this->belongsTo('App\Models\Perusahaan', 'id_bumn');
    // }

    /*public function bumns()
    {
        return $this->belongsToMany(Bumn::class,'users_bumn','id_users','id_bumns');
    }*/
=======
>>>>>>> origin/main
}
