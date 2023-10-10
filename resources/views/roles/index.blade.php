@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                        <span style="font-size: 18px">Funções | Lista</span>
                    </div>

                    <div class="card-body">

                        <div class="mb-4">
                            <a href="{{route('roles.create')}}" class="btn btn-sm btn-info">
                                + Nova Função
                            </a>
                        </div>

                        <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Função</th>
                                    <th class="text-center">Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{$role->name}}</td>
                                    <td class="text-center">
                                        <a href="{{route('roles.edit',$role->id)}}" class="text-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
