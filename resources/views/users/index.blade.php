@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                       <span style="font-size: 18px">Usuários | Lista</span>
                    </div>

                    <div class="card-body">

                        <div class="mb-4">
                            <a href="{{ route('users.create') }}" class="btn btn-sm btn-info">
                                + Novo Usuário
                            </a>
                        </div>

                        <div class="row">

                            <div class="col-12">

                                <div class="card">

                                    <div class="card-body">

                                        <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Usuário</th>
                                                <th>Data de Cadastro</th>
                                                <th>Função</th>
                                                <th>Lotação</th>
                                                <th class="text-center">Editar</th>
                                                <th class="text-center">Excluir</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <th>{{$user->email}}</td>
                                                <td>{{$user->created_at->format('d/m/Y')}}</td>
                                                <td>{{$user->role->name}}</td>
                                                <td>{{$user->prisionalUnit->acronym}}</td>
                                                <td class="text-center">
                                                    <a href="{{route('users.edit', $user->id)}}" class="text-success">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{route('users.confirm', $user->id)}}" class="text-danger">
                                                        <i class="fa fa-trash"></i>
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
