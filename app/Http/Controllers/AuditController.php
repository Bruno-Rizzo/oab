<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AuditSearch;

class AuditController extends Controller
{
    public function index()
    {
        return view('audits.index');
    }

    public function search(AuditSearch $request)
    {
        $validated = $request->validated();
        $audits = DB::table('audits')
                    ->whereDate('created_at','>=',$validated['date_initial'])
                    ->whereDate('created_at','<=',$validated['date_final'])
                    ->get();
        return view('audits.index',compact('audits'));
    }

    public function show($id)
    {
        $audit = DB::table('audits')
                 ->where('id',$id)
                 ->get();

        if($audit->isNotEmpty()){
            $user = User::where('id',$audit[0]->user_id)->get();
            return view('audits.show',compact('audit','user'));
        }

    }

}
