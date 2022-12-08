<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class UserPPID extends Authenticatable implements JWTSubject
{
    use HasFactory;
    protected $table = 'ppid_pendaftar';
    use Notifiable;
    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        'jenis_pemohon',
        'jenis_identitas',
        'nomor_identitas',
        'alamat',
        'no_hp',
        'npwp',
        'pekerjaan',
        'identitas_file_path'
    ];

    protected $hidden = ['password',  'remember_token'];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
