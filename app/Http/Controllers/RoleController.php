<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return to_route('roles.index');
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
        return to_route('roles.index');
    }

    /*
    public function confirm($id)
    {
        Alert::question('Excluir Função','Deseja excluir esta função?')
        ->showConfirmButton('<a href="/roles/delete/'.$id.'" style="color:#FFF;text-decoration:none">Excluir</a>', '#BB2D3B')
        ->toHtml()
        ->showCancelButton('Cancelar', '#3085d6')->reverseButtons();
        return redirect()->back();
    }

    public function delete($id)
    {
        Role::find($id)->delete();
        Alert::toast('Função excluída!', 'error');
        return redirect()->back();
    }
    */

    public function assignPermission(Request $request, Role $role)
    {
        $role->permissions()->sync($request->permissions);
        Alert::toast('Permissões associadas!', 'success');
        return to_route('roles.index');

    }

}
