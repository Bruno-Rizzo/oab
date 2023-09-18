<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserStore;
use App\Http\Requests\UserUpdate;
use App\Http\Requests\UserFind;
use App\Models\User;
use App\Models\Role;
use App\Models\PrisionalUnit;
use Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));

    }

    public function create()
    {
        $roles = Role::orderBy('name')->get();
        $units = PrisionalUnit::orderBy('name')->get();
        return view('users.create', compact('roles','units'));
    }

    public function store(UserStore $request)
    {
        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);
        Alert::toast('Usuário cadastrado!', 'success');
        return to_route('users.index');

    }

    public function edit(User $user)
    {
        $roles = Role::all();
        $units = PrisionalUnit::all();
        return view('users.edit', compact('user','roles','units'));
    }

    public function update(UserUpdate $request, User $user)
    {
        $validated = $request->validated();
        User::find($user->id)->update($validated);
        Alert::toast('Usuário editado!', 'success');
        return to_route('users.index');
    }

    public function confirm($id)
    {
        Alert::question('Excluir Usuário','Deseja excluir este usuário?')
        ->showConfirmButton('<a href="/users/delete/'.$id.'" style="color:#FFF;text-decoration:none">Excluir</a>', '#BB2D3B')
        ->toHtml()
        ->showCancelButton('Cancelar', '#3085d6')->reverseButtons();
        return redirect()->back();
    }

    public function delete($id)
    {
        User::find($id)->delete();
        Alert::toast('Usuário excluído!', 'error');
        return redirect()->back();
    }

    public function search()
    {
        return view('users.search');
    }

    public function find(Request $request)
    {
        $request->validate(['name' => 'required']);
        $users = User::where('name','like', '%'.$request->name.'%')->get();

        return view('users.search',compact('users'));

    }

    public function show(User $user)
    {
        return view('users.password',compact('user'));
    }

    public function password(Request $request , User $user)
    {
        $validated = $request->validate([
            'password' => ['required','min:8']
        ]);

        $validated['password'] = bcrypt($request->password);

        User::find($user->id)->update($validated);
        Alert::toast('Senha alterada!', 'success');
        return to_route('users.index');

    }

}
