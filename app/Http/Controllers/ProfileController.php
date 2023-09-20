<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\ProfileUpdate;
use App\Http\Requests\ProfilePasswordUpdate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use Alert;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function update(ProfileUpdate $request)
    {
        $profile = $request->validated();
        $profile = $request->only('name');
        User::find(Auth::id())->update($profile);
        Alert::toast('Perfil editado com sucesso!', 'success');
        return Redirect::route('dashboard');
    }

    public function password()
    {
        return view('profile.password');
    }

    public function passwordUpdate(ProfilePasswordUpdate $request)
    {
        $validated = $request->validated();
        $validated = $request->only('password');

        if (Hash::check($request->oldPassword, Auth::user()->password)) {

            Auth::user()->password = bcrypt($validated['password']);
            Auth::user()->save();

            Alert::toast('Senha alterada!', 'success');
            return Redirect::route('dashboard');

        } else {

            Alert::toast('Senha Incorreta!', 'error');
            return Redirect::route('profile.password');
        }
    }

    // public function edit(Request $request): View
    // {
    //     return view('profile.edit', [
    //         'user' => $request->user(),
    //     ]);
    // }

    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

    // public function destroy(Request $request): RedirectResponse
    // {
    //     $request->validateWithBag('userDeletion', [
    //         'password' => ['required', 'current_password'],
    //     ]);

    //     $user = $request->user();

    //     Auth::logout();

    //     $user->delete();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return Redirect::to('/');
    // }
}
