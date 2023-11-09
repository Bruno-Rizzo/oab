<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use Alert;

class BookController extends Controller
{

    public function index()
    {
        // //verificar a up do usuário logado
        // $unit  = Auth::user()->prisional_unit_id;
        // //verificar se exixte algum registro no banco com a data de hoje
        // $date  = Book::where('date', Now()->format('Y-m-d'))->first();
        // //buscar só os registros que estão abertos na própria unidade
        // $books = Book::where('closed',0)
        //              ->where('prisional_unit_id', $unit)->get();
        $books = Book::all();
        return view ('books.index', compact('books'));
    }

    public function create()
    {
        return view ('books.create');
    }

    public function store(Request $request)
    {
        $books = $request->all();
        $books['user_id'] = Auth::id();
        $books['prisional_unit_id'] = Auth::user()->prisional_unit_id;
        Book::create($books);

        Alert::toast('Registro cadastrado!', 'success');
        return Redirect::route('books.index');
    }

    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $books = $request->all();
        Book::find($book->id)->update($books);

        Alert::toast('Registro editado!', 'success');
        return Redirect::route('books.index');
    }

    // public function finish()
    // {
    //     $unit  = Auth::user()->prisional_unit_id;
    //     $books = Book::where('closed',0)
    //                  ->where('prisional_unit_id', $unit)
    //                  ->update(['closed' => 1]);

    //     return Redirect::route('books.index');
    // }


}
