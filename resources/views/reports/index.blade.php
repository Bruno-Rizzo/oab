@extends('layouts.app')

@section('main_content')
    <div class="page-content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <div class="card">

                        <div class="card-header">
                            <span style="font-size: 18px">Livro de Advogados | Relatórios</span>
                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="col-12">

                                    <div class="card">

                                        <div class="card-body">

                                            <div id="accordion" class="custom-accordion">

                                                {{-- ADVOGADOS POR UNIDADE PRISIONAL --}}

                                                <div class="card mb-1 shadow-none">

                                                    <a href="#collapseOne" class="text-dark collapsed"
                                                        data-bs-toggle="collapse" aria-expanded="false"
                                                        aria-controls="collapseOne">
                                                        <div class="card-header" id="headingOne">
                                                            <h6 class="m-0">
                                                                Advogados por Unidade Prisional
                                                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                                            </h6>
                                                        </div>
                                                    </a>

                                                    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo"
                                                         data-bs-parent="#accordion">

                                                        <div class="card-body">

                                                            <form action="{{ route('reports.lawyer_unit_prisional') }}" method="post" target="_blank">
                                                                @csrf

                                                                <div class="row mb-3">
                                                                    <label class="col-sm-2 col-form-label">Data Inicial</label>
                                                                    <div class="col-sm-5">
                                                                        <input class="form-control" type="date" name="date_initial">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label class="col-sm-2 col-form-label">Data Final</label>
                                                                    <div class="col-sm-5">
                                                                        <input class="form-control" type="date" name="date_final">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label class="col-sm-2 col-form-label">Unidade Prisional</label>
                                                                    <div class="col-sm-5">
                                                                        <select class="form-select" name="prisional_unit_id">
                                                                            <option value="">Selecione uma unidade...</option>
                                                                            @foreach ($units as $unit)
                                                                                <option value="{{ $unit->id }}">
                                                                                    {{ $unit->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label class="col-sm-2 col-form-label"></label>
                                                                    <div class="col-sm-2">
                                                                        <button type="submit" class="btn btn-sm btn-info">
                                                                            <i class="ri-printer-line me-2"></i> Gerar Relatório
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </form>

                                                        </div>

                                                    </div>

                                                </div>

                                                {{-- FIM - ADVOGADOS POR UNIDADE PRISIONAL --}}


                                                {{-- ADVOGADOS POR INTERNO --}}

                                                <div class="card mb-1 shadow-none">

                                                    <a href="#collapseTwo" class="text-dark collapsed"
                                                        data-bs-toggle="collapse" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        <div class="card-header" id="headingTwo">
                                                            <h6 class="m-0">
                                                                Advogados por Internos
                                                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                                            </h6>
                                                        </div>
                                                    </a>

                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                         data-bs-parent="#accordion">

                                                        <div class="card-body">

                                                            <form action="{{ route('reports.lawyer_prisioner') }}" method="post" target="_blank">
                                                                @csrf

                                                                <div class="row mb-3">
                                                                    <label class="col-sm-2 col-form-label">Data Inicial</label>
                                                                    <div class="col-sm-5">
                                                                        <input class="form-control" type="date" name="date_initial">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label class="col-sm-2 col-form-label">Data Final</label>
                                                                    <div class="col-sm-5">
                                                                        <input class="form-control" type="date" name="date_final">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label class="col-sm-2 col-form-label">Unidade Prisional</label>
                                                                    <div class="col-sm-5">
                                                                        <select class="form-select" name="prisional_unit_id">
                                                                            <option value="">Selecione uma unidade...</option>
                                                                            @foreach ($units as $unit)
                                                                                <option value="{{ $unit->id }}">
                                                                                    {{ $unit->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label class="col-sm-2 col-form-label">Nome do Interno</label>
                                                                    <div class="col-sm-5">
                                                                        <input class="form-control" type="text" name="prisioner">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label class="col-sm-2 col-form-label"></label>
                                                                    <div class="col-sm-2">
                                                                        <button type="submit"
                                                                            class="btn btn-sm btn-info">
                                                                            <i class="ri-printer-line me-2"></i> Gerar Relatório
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </form>

                                                        </div>

                                                    </div>

                                                </div>

                                                {{-- FIM -  ADVOGADOS POR INTERNO --}}


                                                {{-- ATENDIMENTOS DE ADVOGADO --}}

                                                <div class="card mb-1 shadow-none">

                                                    <a href="#collapseThree" class="text-dark collapsed"
                                                        data-bs-toggle="collapse" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        <div class="card-header" id="headingThree">
                                                            <h6 class="m-0">
                                                                Atendimentos de Advogado
                                                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                                            </h6>
                                                        </div>
                                                    </a>

                                                    <div id="collapseThree" class="collapse"
                                                         aria-labelledby="headingThree" data-bs-parent="#accordion">

                                                        <div class="card-body">

                                                            <form action="{{ route('reports.lawyer_service') }}" method="post" target="_blank">
                                                                @csrf

                                                                <div class="row mb-3">
                                                                    <label class="col-sm-2 col-form-label">Data Inicial</label>
                                                                    <div class="col-sm-5">
                                                                        <input class="form-control" type="date" name="date_initial">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label class="col-sm-2 col-form-label">Data Final</label>
                                                                    <div class="col-sm-5">
                                                                        <input class="form-control" type="date" name="date_final">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label class="col-sm-2 col-form-label">Nome do Advogado</label>
                                                                    <div class="col-sm-5">
                                                                        <input class="form-control" type="text" name="adv_name">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label class="col-sm-2 col-form-label">Número da OAB</label>
                                                                    <div class="col-sm-5">
                                                                        <input class="form-control" type="text" name="oab_number">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label class="col-sm-2 col-form-label"></label>
                                                                    <div class="col-sm-2">
                                                                        <button type="submit" class="btn btn-sm btn-info">
                                                                            <i class="ri-printer-line me-2"></i> Gerar Relatório
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </form>

                                                        </div>

                                                    </div>

                                                </div>

                                                {{-- FIM -  ATENDIMENTOS DE ADVOGADO --}}


                                                {{-- USUÁRIOS DO SISTEMA --}}

                                                <div class="card mb-0 shadow-none">

                                                    <a href="#collapseFour" class="text-dark collapsed"
                                                        data-bs-toggle="collapse" aria-expanded="false"
                                                        aria-controls="collapseFour">
                                                        <div class="card-header" id="headingFour">
                                                            <h6 class="m-0">
                                                                Usuários do Sistema
                                                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                                            </h6>
                                                        </div>
                                                    </a>

                                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                                         data-bs-parent="#accordion">

                                                        <div class="card-body">

                                                            <form action="{{ route('reports.show') }}" target="_blank" method="get">
                                                                @csrf

                                                                <div class="row mb-3">
                                                                    <div class="col-sm-2">
                                                                        <button type="submit"
                                                                            class="btn btn-sm btn-info">
                                                                            <i class="ri-printer-line me-2"></i> Gerar Relatório
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </form>

                                                        </div>

                                                    </div>

                                                </div>

                                                {{-- FIM - USUÁRIOS DO SISTEMA --}}

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
