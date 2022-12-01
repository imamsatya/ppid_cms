<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserPPID extends Authenticatable
{
    use HasFactory;
    protected $table = 'usersppid';
    use Notifiable;
    protected $fillable = ['email',  'password'];

    protected $hidden = ['password',  'remember_token'];
}
