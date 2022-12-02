<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserPPID extends Authenticatable
{
    use HasFactory;
    protected $table = 'ppid_pendaftar';
    use Notifiable;
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

    protected $hidden = ['password',  'remember_token'];
}
