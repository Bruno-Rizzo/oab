@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <form action="{{route('prisionalUnits.store')}}" method="post">
                    @csrf

                    <div class="card">

                        <div class="card-header">
                            <span style="font-size: 18px">Unidade Prisional | Cadastro</span>
                        </div>

                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" placeholder="Nome" name="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Sigla</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" placeholder="Sigla" name="acronym">
                                    @error('acronym')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-info">
                                <i class="fa fa-save me-1"></i> Cadastrar
                            </button>
                            <a href="{{ route('prisionalUnits.index') }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-redo me-1"></i> Voltar
                            </a>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection
