@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <form action="{{route('roles.store')}}" method="post">
                    @csrf

                    <div class="card">

                        <div class="card-header">
                            <span style="font-size: 18px">Funções | Cadastro</span>
                        </div>

                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" autofocus name="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-info">
                                Cadastrar
                            </button>
                            <a href="{{ route('roles.index') }}" class="btn btn-sm btn-light">
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
