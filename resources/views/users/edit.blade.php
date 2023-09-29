@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <form action="{{ route('users.update',$user->id) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="card">

                        <div class="card-header">
                            <span style="font-size: 18px">Usuário | Editar</span>
                        </div>

                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="name" value="{{$user->name}}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">ID</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="identify" value="{{$user->identify}}">
                                    @error('identify')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Usuário</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="email" value="{{$user->email}}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            @can('admin')

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Lotação</label>
                                <div class="col-sm-6">
                                    <select class="form-select" name="prisional_unit_id">
                                        @foreach ($units as $unit)
                                            <option value="{{ $unit->id }}" @selected($unit->id == $user->prisional_unit_id) > {{ $unit->name }} </option>
                                        @endforeach
                                    </select>
                                    @error('prisional_unit_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Função</label>
                                <div class="col-sm-6">
                                    <select class="form-select" name="role_id">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}" @selected($role->id == $user->role_id)> {{ $role->name }} </option>
                                        @endforeach
                                    </select>
                                    @error('role_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            @endcan

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-info">
                                Editar
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
