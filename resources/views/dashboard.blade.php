@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                       <span style="font-size: 18px">{{Auth::user()->role->name}} - {{Auth::user()->prisionalUnit->name}}</span>
                    </div>

                    <div class="card-body">

                        <h4 class="card-title">
                            Bem vindo(a) ao sistema de Controle de Advogados da Polícia Penal
                        </h4>

                    </div>

                </div>

            </div> <!-- end col -->

        </div>
        <!-- end row -->

    </div>

</div>

@endsection
