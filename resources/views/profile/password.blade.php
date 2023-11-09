@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <form action="{{ route('profile.password.update')}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-header">
                            <span style="font-size: 18px">Perfil | Alterar Senha</span>
                        </div>

                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Senha Atual</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" autofocus name="oldPassword">
                                    @error('oldPassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nova Senha</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" name="password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Confirma Senha</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" name="confirmPassword">
                                    @error('confirmPassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-info">
                                Alterar Senha
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
