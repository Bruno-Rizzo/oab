@extends('layouts.app')

@section('main_content')
    <div class="page-content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                   <div class="card">

                        <div class="card-header">
                            <span style="font-size: 18px">Livro de Advogados | Registros</span>
                        </div>

                        <div class="card-body">

                            <div class="mb-4 d-flex justify-content-between">
                                <div>
                                    <a href="{{ route('books.create') }}" class="btn btn-sm btn-info">
                                        + Novo Registro
                                    </a>
                                </div>
                                {{-- <div>
                                    <form action="{{ route('books.finish') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-sm btn-warning">
                                            <i class=" ri-check-line"></i> Finalizar Livro
                                        </button>
                                    </form>
                                </div> --}}
                            </div>

                            <div class="row">

                                <div class="col-12">

                                    <div class="card">

                                        <div class="card-body">

                                            <table id="table" class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Nome do Advogado</th>
                                                        <th>Número OAB</th>
                                                        <th>Horário de Entrada</th>
                                                        <th>Horário de Saída</th>
                                                        <th class="text-center">Editar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($books as $book)
                                                        <tr>
                                                            <td>{{ $book->adv_name }}</td>
                                                            <td>{{ $book->oab_number }}</td>
                                                            <th>{{ $book->entrance }}</td>
                                                            <td>{{ $book->exit }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('books.edit', $book->id) }}"
                                                                    class="text-success">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>

                                </div> <!-- end col -->

                            </div> <!-- end row -->

                        </div>

                    </div>


                </div> <!-- end col -->

            </div>
            <!-- end row -->

        </div>

    </div>
@endsection
