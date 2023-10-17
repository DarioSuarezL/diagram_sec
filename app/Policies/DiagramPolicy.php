<?php

namespace App\Policies;

use App\Models\Diagram;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class DiagramPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Diagram $diagram)
    {
        return $user->id === $diagram->host_id || $diagram->guests->contains($user)
            ? Response::allow()
            : Response::deny('No estás invitado a este diagrama.');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Diagram $diagram)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Diagram $diagram)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Diagram $diagram)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Diagram $diagram)
    {
        //
    }
}
