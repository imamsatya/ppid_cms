<?php

namespace App\Policies\Profil;

use App\Models\User;
use App\Models\Profil\VisiMisi;
use Illuminate\Auth\Access\HandlesAuthorization;

class VisiMisiPolicy
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
        if ($user->can('visi dan misi.view')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VisiMisi  $visiMisi
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, VisiMisi $visiMisi)
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
        if ($user->can('visi dan misi.create')) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VisiMisi  $visiMisi
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, VisiMisi $visiMisi)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VisiMisi  $visiMisi
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, VisiMisi $visiMisi)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VisiMisi  $visiMisi
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, VisiMisi $visiMisi)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VisiMisi  $visiMisi
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, VisiMisi $visiMisi)
    {
        //
    }
}
