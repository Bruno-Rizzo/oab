@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <form action="{{ route('users.find') }}" method="post">
                    @csrf
                    <div class="card">

                        <div class="card-header">
                            <span style="font-size: 18px">Usuários | Pesquisar</span>
                        </div>

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label">Nome</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" autofocus name="name"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-info">
                               Pesquisar
                            </button>
                        </div>

                    </div>
                </form>

            </div>

        </div>

        @isset($users)
            <div class="row">

                <div class="col-md-12 mt-2">

                    <div class="card shadow mb-4">

                        <div class="card-header">
                            <span style="font-size: 18px">Usuários | Resultado da Pesquisa</span>
                        </div>

                        <div class="card-body">

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>

                                    <tr>
                                        <th>Nome</th>
                                        <th>Usuário</th>
                                        <th>Função</th>
                                        <th class="text-center">Visualizar</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role->name }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('users.show', $user->id) }}" class="text-info"
                                                    style="text-decoration: none">
                                                    <i class="ri-admin-line" style="font-size: 21px"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>
        @endisset

    </div>

</div>

@endsection
