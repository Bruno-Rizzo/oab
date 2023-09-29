@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <form action="{{route('prisionalUnits.update',$unit->id)}}" method="post">
                    @csrf
                    @method('put')

                    <div class="card">

                        <div class="card-header">
                            <span style="font-size: 18px">Unidade Prisional | Editar</span>
                        </div>

                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="name" value="{{$unit->name}}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Sigla</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="acronym" value="{{$unit->acronym}}">
                                    @error('acronym')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-info">
                                Editar
                            </button>
                            <a href="{{route('prisionalUnits.index')}}" class="btn btn-sm btn-light">
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
