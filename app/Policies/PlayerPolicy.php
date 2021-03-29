<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Player;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlayerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the player can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list players');
    }

    /**
     * Determine whether the player can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Player  $model
     * @return mixed
     */
    public function view(User $user, Player $model)
    {
        return $user->hasPermissionTo('view players');
    }

    /**
     * Determine whether the player can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create players');
    }

    /**
     * Determine whether the player can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Player  $model
     * @return mixed
     */
    public function update(User $user, Player $model)
    {
        return $user->hasPermissionTo('update players');
    }

    /**
     * Determine whether the player can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Player  $model
     * @return mixed
     */
    public function delete(User $user, Player $model)
    {
        return $user->hasPermissionTo('delete players');
    }

    /**
     * Determine whether the player can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Player  $model
     * @return mixed
     */
    public function restore(User $user, Player $model)
    {
        return false;
    }

    /**
     * Determine whether the player can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Player  $model
     * @return mixed
     */
    public function forceDelete(User $user, Player $model)
    {
        return false;
    }
}
