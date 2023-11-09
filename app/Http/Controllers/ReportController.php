<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\PrisionalUnit;
use PDF;

class ReportController extends Controller
{

    public function index()
    {
        $units = PrisionalUnit::orderBy('name')->get();
        return view('reports.index', compact('units'));
    }

    public function show()
    {
        $users = User::all();
        $pdf = PDF::loadView('reports.show_users',compact('users'))->setPaper('a4','portrait');
        return $pdf->stream('lista_de_usuarios.pdf');
    }

    public function lawyer_unit_prisional(Request $request)
    {
        $data = Book::
            whereBetween('date',[$request->date_initial,$request->date_final])
            ->where('prisional_unit_id',$request->prisional_unit_id)
            ->get();

            $pdf = PDF::loadView('reports.lawyer_unit_prisional',compact('data'))->setPaper('a4','portrait');
            return $pdf->stream('advogados_por_unidade_prisional.pdf');
    }

    public function lawyer_prisioner(Request $request)
    {
        $data = Book::
            whereBetween('date',[$request->date_initial,$request->date_final])
            ->where('prisional_unit_id',$request->prisional_unit_id)
            ->where('prisioner','LIKE',"%{$request->prisioner}%")
            ->get();

            $pdf = PDF::loadView('reports.lawyer_unit_prisional',compact('data'))->setPaper('a4','portrait');
            return $pdf->stream('advogados_por_unidade_prisional.pdf');
    }

    public function lawyer_service(Request $request)
    {
        $data = Book::
            whereBetween('date',[$request->date_initial,$request->date_final])
            ->where('adv_name','LIKE',"%{$request->adv_name}%")
            ->orWhere('oab_number',$request->oab_number)
            ->get();

            $pdf = PDF::loadView('reports.lawyer_service',compact('data'))->setPaper('a4','portrait');
            return $pdf->stream('atendimentos_de_advogado.pdf');
    }
}
