@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                        <span style="font-size: 18px">Perfil | Dados do Usuário</span>
                    </div>

                    <div class="card-body">

                        <div class="row justify-content-center">

                            <div class="col-md-12">

                                <div>

                                    <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="row mt-3 align-items-center col-md-12">

                                            <div class="col-md-2 text-center mb-3 me-3">

                                                <div class="avatar avatar-xl">

                                                    <img src="{{asset('assets/images/profile.png')}}"
                                                        class="rounded rounded-circle avatar-lg img-thumbnail">
                                                </div>
                                            </div>

                                            <div class="col-md-7">
                                                <div class="row align-items-center">

                                                        <h4 class="mb-1">{{ Auth::user()->name }}</h4>
                                                        <p class="mb-3">
                                                            <span class="badge badge-info p-2" style="font-size: 14px">{{ Auth::user()->role->name }}
                                                            </span>
                                                        </p>

                                                </div>
                                            </div>

                                        </div>

                                        <hr class="my-4">

                                        <div class="row mb-3">
                                            <label class="col-sm-1 col-form-label">Nome</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" autofocus name="name" value="{{Auth::user()->name}}">
                                                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-1 col-form-label">Usuário</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="email" value="{{Auth::user()->email}}" readonly>
                                                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-1 col-form-label">Lotação</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="email" value="{{Auth::user()->prisionalUnit->name}}" readonly>
                                                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-1 col-form-label">Função</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="email" value="{{Auth::user()->role->name}}" readonly>
                                                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <button type="submit" class="btn btn-sm btn-info">
                                           Editar Perfil
                                        </button>

                                    </form>

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
