<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        dd($validated);
        Role::create($validated);
        Alert::toast('Unidade Prisional cadastrada!', 'success');
        return to_route('prisional_units.index');
    }

    public function edit(PrisionalUnit $unit)
    {
        return view('prisional_units.edit',compact('unit'));
    }

    public function update(PrisionalUnitUpdate $request, PrisionalUnit $unit)
    {
        $validated = $request->validated();
        Role::find($unit->id)->update($validated);
        Alert::toast('Unidade Prisional editada!', 'success');
        return to_route('prisional_units.index');
    }

    /*
    public function confirm($id)
    {
        Alert::question('Excluir Unidade','Deseja excluir esta unidade?')
        ->showConfirmButton('<a href="/prisional_units/delete/'.$id.'" style="color:#FFF;text-decoration:none">Excluir</a>', '#BB2D3B')
        ->toHtml()
        ->showCancelButton('Cancelar', '#3085d6')->reverseButtons();
        return redirect()->back();
    }

    public function delete($id)
    {
        Role::find($id)->delete();
        Alert::toast('Unidade excluída!', 'error');
        return redirect()->back();
    }
    */

}
