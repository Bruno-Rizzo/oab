<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PrisionalUnitStore;
use App\Http\Requests\PrisionalUnitUpdate;
use App\Models\PrisionalUnit;
use Alert;

class PrisionalUnitController extends Controller
{
    public function index()
    {
        $units = PrisionalUnit::all();
        return view ('prisional_units.index', compact('units'));
    }

    public function create()
    {
        return view ('prisional_units.create');
    }

    public function store(PrisionalUnitStore $request)
    {
        $validated = $request->validated();
        PrisionalUnit::create($validated);
        Alert::toast('Unidade Prisional cadastrada!', 'success');
        return Redirect::route('prisionalUnits.index');
    }

    public function edit(PrisionalUnit $unit)
    {
        return view('prisional_units.edit',compact('unit'));
    }

    public function update(PrisionalUnitUpdate $request, PrisionalUnit $unit)
    {
        $validated = $request->validated();
        PrisionalUnit::find($unit->id)->update($validated);
        Alert::toast('Unidade Prisional editada!', 'success');
        return Redirect::route('prisionalUnits.index');
    }

}
