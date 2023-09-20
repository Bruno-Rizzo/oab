<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(): bool
    {
        return Auth::user()->role->hasPermission('usuario-visualizar');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(): bool
    {
        return Auth::user()->role->hasPermission('usuario-cadastrar');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(): bool
    {
        return Auth::user()->role->hasPermission('usuario-editar');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(): bool
    {
        return Auth::user()->role->hasPermission('usuario-excluir');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool
    {
        //
    }
}
