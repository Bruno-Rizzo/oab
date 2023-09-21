@extends('layouts.app')

@section('main_content')

    <div class="page-content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <form action="{{ route('audits.search') }}" method="post">
                        @csrf
                        <div class="card">

                            <div class="card-header">
                                <span style="font-size: 18px">Auditoria | Pesquisar</span>
                            </div>

                            <div class="card-body">

                                <div class="form-group row">

                                    <div class="row">

                                        <div class="col-md-5">

                                            <div class="mb-3 position-relative">
                                                <label class="form-label">Data Inicial</label>
                                                <input type="date" class="form-control" name="date_initial">
                                                @error('date_initial')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="col-md-5">

                                            <div class="mb-3 position-relative">
                                                <label class="form-label">Data Final</label>
                                                <input type="date" class="form-control" name="date_final">
                                                @error('date_final')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-info">
                                    Pesquisar
                                </button>
                            </div>

                        </div>

                </div>

                </form>

            </div>

            @isset($audits)
                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-header">
                                <span style="font-size: 18px">Auditoria | Resultado da Pesquisa</span>
                            </div>

                            <div class="card-body">

                                <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Classe</th>
                                            <th class="text-center">Evento</th>
                                            <th>Data do Evento</th>
                                            <th class="text-center">Visualizar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($audits as $audit)
                                            <tr>
                                                <td class="text-center">{{ $audit->id }}</td>
                                                <td>{{ $audit->auditable_type }}</td>
                                                <td class="text-center">{{ $audit->event }}</td>
                                                <td>{{ $audit->created_at }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('audits.show', $audit->id) }}" target="_blank"
                                                        class="text-info" style="text-decoration: none">
                                                        <i class="ri-folder-shield-line" style="font-size: 21px"></i>
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

</div>

@endsection
