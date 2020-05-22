<?php

namespace App\Policies;

use App\Galeria;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GaleriaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Galeria  $galeria
     * @return mixed
     */
    public function view(User $user, Galeria $galeria)
    {
        return $galeria->user_id == $user->id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Galeria  $galeria
     * @return mixed
     */
    public function update(User $user, Galeria $galeria)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Galeria  $galeria
     * @return mixed
     */
    public function delete(User $user, Galeria $galeria)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Galeria  $galeria
     * @return mixed
     */
    public function restore(User $user, Galeria $galeria)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Galeria  $galeria
     * @return mixed
     */
    public function forceDelete(User $user, Galeria $galeria)
    {
        //
    }
}
