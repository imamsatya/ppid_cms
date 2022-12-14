<?php

namespace App\Policies\Profil;

use App\Models\Profil\ProfilSingkat;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilSingkatPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //

        if ($user->can('profil singkat ppid.view')) {
            return true;
        }
        // return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProfilSingkat  $profilSingkat
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ProfilSingkat $profilSingkat)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
        if ($user->can('profil singkat ppid.create')) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProfilSingkat  $profilSingkat
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ProfilSingkat $profilSingkat)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProfilSingkat  $profilSingkat
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ProfilSingkat $profilSingkat)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProfilSingkat  $profilSingkat
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ProfilSingkat $profilSingkat)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProfilSingkat  $profilSingkat
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ProfilSingkat $profilSingkat)
    {
        //
    }
}
