@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <form action="{{ route('books.store') }}" method="post">
                    @csrf

                    <div class="card">

                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <strong>Usuário: {{Auth::user()->name}}</strong>
                            </div>
                            <div>
                                <strong>ID Funcional: {{Auth::user()->identify}}</strong>
                            </div>
                            <div>
                                <strong>Lotação: {{Auth::user()->prisionalUnit->name}}</strong>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nome do(a) Advogado(a)</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" autofocus name="adv_name" value="{{old('adv_name')}}">
                                    @error('adv_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Número da OAB</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" autofocus name="oab_number" value="{{old('oab_number')}}">
                                    @error('oab_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Horário de Entrada</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" autofocus name="entrance" value="{{old('entrance')}}">
                                    @error('entrance')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Horário de Saída</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" autofocus name="exit" value="{{old('exit')}}">
                                    @error('exit')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <hr>

                            <livewire:prisioner />

                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-info">
                                 Cadastrar
                            </button>
                            <a href="{{ route('books.index') }}" class="btn btn-sm btn-light">
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
