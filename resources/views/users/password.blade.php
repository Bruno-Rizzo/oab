@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <form action="{{route('users.password',$user->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card">

                        <div class="card-header">
                            <span style="font-size: 18px">Usuário | Alterar Senha</span>
                        </div>

                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" value="{{$user->name}}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Usuário</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" value="{{$user->email}}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Função</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" value="{{$user->role->name}}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Nova Senha</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="password" autofocus name="password">
                                    @error('password') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-info">
                                Alterar
                            </button>
                            <a href="{{ route('users.index') }}" class="btn btn-sm btn-light">
                                <i class="fa fa-redo ms-2"></i> Voltar
                            </a>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection
