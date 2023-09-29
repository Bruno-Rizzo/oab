<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RoleStore;
use App\Http\Requests\RoleUpdate;
use App\Models\Permission;
use App\Models\Role;
use Alert;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view ('roles.index', compact('roles'));
    }

    public function create()
    {
        return view ('roles.create');
    }

    public function store(RoleStore $request)
    {
        $validated = $request->validated();
        Role::create($validated);
        Alert::toast('Função cadastrada!', 'success');
        return Redirect::route('roles.index');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('roles.edit',compact('role','permissions'));
    }

    public function update(RoleUpdate $request, Role $role)
    {
        $validated = $request->validated();
        Role::find($role->id)->update($validated);
        Alert::toast('Função editada!', 'success');
        return Redirect::route('roles.index');
    }

    public function assignPermission(Request $request, Role $role)
    {
        $role->permissions()->sync($request->permissions);
        Alert::toast('Permissões associadas!', 'success');
        return to_route('roles.index');

    }

}
