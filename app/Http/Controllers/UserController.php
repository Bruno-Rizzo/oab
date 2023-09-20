<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UserStore;
use App\Http\Requests\UserUpdate;
use App\Http\Requests\UserFind;
use App\Http\Requests\UserPassword;
use App\Models\User;
use App\Models\Role;
use App\Models\PrisionalUnit;
use Illuminate\Support\Facades\Auth;
use Alert;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize('view', App\Models\User::class);

        $user = Auth::user();

        if(Auth::id() == 1){
            $users = User::all();
        }else{
            $users = User::where('prisional_unit_id', $user->prisional_unit_id)->get();
        }

        return view('users.index', compact('users'));

    }

    public function create()
    {
        $this->authorize('create', App\Models\User::class);
        $roles = Role::orderBy('name')->get();
        $units = PrisionalUnit::orderBy('name')->get();
        return view('users.create', compact('roles','units'));
    }

    public function store(UserStore $request)
    {
        $this->authorize('create', App\Models\User::class);

        $user = Auth::user();

        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);

        if(Auth::id() == 1){
            User::create($validated);
        }else{
            $validated['prisional_unit_id'] = $user->prisional_unit_id;
            $validated['role_id']           = 5;
            User::create($validated);
        }

        Alert::toast('Usuário cadastrado!', 'success');
        return Redirect::route('users.index');

    }

    public function edit(User $user)
    {
        $this->authorize('update', App\Models\User::class);
        $roles = Role::all();
        $units = PrisionalUnit::all();
        return view('users.edit', compact('user','roles','units'));
    }

    public function update(UserUpdate $request, User $user)
    {
        $this->authorize('update', App\Models\User::class);
        $validated = $request->validated();
        User::find($user->id)->update($validated);
        Alert::toast('Usuário editado!', 'success');
        return Redirect::route('users.index');
    }

    public function confirm($id)
    {
        $this->authorize('delete', App\Models\User::class);
        Alert::question('Excluir Usuário','Deseja excluir este usuário?')
        ->showConfirmButton('<a href="/users/delete/'.$id.'" style="color:#FFF;text-decoration:none">Excluir</a>', '#BB2D3B')
        ->toHtml()
        ->showCancelButton('Cancelar', '#3085d6')->reverseButtons();
        return redirect()->back();
    }

    public function delete($id)
    {
        $this->authorize('delete', App\Models\User::class);
        User::find($id)->delete();
        Alert::toast('Usuário excluído!', 'error');
        return redirect()->back();
    }

    public function search()
    {
        return view('users.search');
    }

    public function find(UserFind $request)
    {
        $validated = $request->validated();
        $users = User::where('name','like', '%'.$validated['name'].'%')->get();
        return view('users.search',compact('users'));

    }

    public function show(User $user)
    {
        return view('users.password',compact('user'));
    }

    public function password(UserPassword $request , User $user)
    {
        $validated = $request->validated();
        $validated['password'] = bcrypt($request->password);
        User::find($user->id)->update($validated);
        Alert::toast('Senha alterada!', 'success');
        return Redirect::route('users.index');

    }

}
