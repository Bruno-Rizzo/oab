<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PrisionalUnitController;


Route::redirect('/', 'login');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    Route::middleware('admin')->group(function () {

        Route::controller(UserController::class)->group(function(){

            Route::get('/users',                'index'   ) ->name('users.index');
            Route::get('/users/create',         'create'  ) ->name('users.create');
            Route::post('/users/store',         'store'   ) ->name('users.store');
            Route::get('/users/{user}/edit',    'edit'    ) ->name('users.edit');
            Route::put('/users/{user}/update',  'update'  ) ->name('users.update');
            Route::get('/users/confirm/{id}',   'confirm' ) ->name('users.confirm');
            Route::get('/users/delete/{id}',    'delete'  ) ->name('users.delete');
            Route::get('/users/search',         'search'  ) ->name('users.search');
            Route::post('/users/search',        'find'    ) ->name('users.find');
            Route::get('/users/{user}/show',    'show'    ) ->name('users.show');
            Route::put('users/password/{user}', 'password') ->name('users.password');
        });

        Route::controller(RoleController::class)->group(function(){

            Route::get('/roles',                      'index' )           ->name('roles.index');
            Route::get('/roles/create',               'create')           ->name('roles.create');
            Route::post('/roles/store',               'store' )           ->name('roles.store');
            Route::get('/roles/{role}/edit',          'edit'  )           ->name('roles.edit');
            Route::put('/roles/{role}/update',        'update')           ->name('roles.update');
            Route::get('/roles/delete/{id}',          'delete')           ->name('roles.delete');
            Route::get('/roles/confirm/{id}',         'confirm')          ->name('roles.confirm');
            Route::post('/roles/{role}/permissions/', 'assignPermission') ->name('roles.permissions');
        });

        Route::controller(PrisionalUnitController::class)->group(function(){

            Route::get('/prisionalUnits',               'index' )  ->name('prisionalUnits.index');
            Route::get('/prisionalUnits/create',        'create')  ->name('prisionalUnits.create');
            Route::post('/prisionalUnits/store',        'store' )  ->name('prisionalUnits.store');
            Route::get('/prisionalUnits/{unit}/edit',   'edit'  )  ->name('prisionalUnits.edit');
            Route::put('/prisionalUnits/{unit}/update', 'update')  ->name('prisionalUnits.update');
            Route::get('/prisionalUnits/delete/{id}',   'delete')  ->name('prisionalUnits.delete');
            Route::get('/prisionalUnits/confirm/{id}',  'confirm') ->name('prisionalUnits.confirm');
        });

    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
