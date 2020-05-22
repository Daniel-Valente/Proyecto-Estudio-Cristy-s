<?php

namespace App\Policies;

use App\Orden;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrdenPolicy
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
        return $user->id == \Auth::user()->id;
    }

    public function editar(User $user, Orden $orden)
    {
        return $orden->cita->nombre_Cita != "Cancelada";
    }

    public function completada(User $user, Orden $orden)
    {
        return $orden->fecha_Entrega == null;
    }

    public function pagado(User $user, Orden $orden)
    {
        return $orden->estatus != "Pagado";
    }


    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Orden  $orden
     * @return mixed
     */
    public function view(User $user, Orden $orden)
    {
        return $orden->user_id == $user->id;
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
     * @param  \App\Orden  $orden
     * @return mixed
     */
    public function update(User $user, Orden $orden)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Orden  $orden
     * @return mixed
     */
    public function delete(User $user, Orden $orden)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Orden  $orden
     * @return mixed
     */
    public function restore(User $user, Orden $orden)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Orden  $orden
     * @return mixed
     */
    public function forceDelete(User $user, Orden $orden)
    {
        //
    }
}
