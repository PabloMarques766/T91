@extends('layouts.base')

@section('conteudo')

    <h1>
        @if($user)
        Atualizar Dados da user
        @else 
        Cadastro de Pesssoa
        @endif
    </h1>

    @if ($user)
    <form action="{{ route('user.update', ['id'=>$@extends('layouts.base')

@section('conteudo')

    <h1>
        @if($user)
        Atualizar Dados da user
        @else 
        Cadastro de user
        @endif
    </h1>

    @if ($user)
    <form action="{{ route('user.update', ['id'=>$user->id]) }}" method="post">
    @else 
    <form action="{{ route('user.store') }}" method="post">
    @endif
        @csrf
        <div class="row">

            <div class="form-group col-md-6">
              <label for="nome" class="form-label">Nome*</label>
              <input type="text" name="nome" id="nome" class="form-control" value="{{ $user? $user->nome :old('user') }}">
            </div>

            <div class="form-group col-md-6">
                <label for="email" class="form-label">E-mail*</label>
                <input type="email" name="email" id="email"  class="form-control" value="{{ $user? $user->email :old('user') }}">
            </div>

            <div class="form-group col-md-2">
                <label for="btn-enviar" class="form-label">&nbsp;</label>
                <input  class='btn btn-success form-control'  type="submit" value="Cadastrar">
            </div>     
        </div>
    </form>

@endsection->id]) }}" method="post">
    @else 
    <form action="{{ route('user.store') }}" method="post">
    @endif
        @csrf
        <div class="row">

            <div class="form-group col-md-6">
              <label for="nome" class="form-label">Nome*</label>
              <input type="text" name="nome" id="nome" class="form-control" value="{{ $user? $user->nome :old('user') }}">
            </div>

            <div class="form-group col-md-6">
                <label for="email" class="form-label">E-mail*</label>
                <input type="email" name="email" id="email"  class="form-control" value="{{ $user? $user->email :old('user') }}">
            </div>

            <div class="form-group col-md-2">
                <label for="btn-enviar" class="form-label">&nbsp;</label>
                <input  class='btn btn-success form-control'  type="submit" value="Cadastrar">
            </div>     
        </div>
    </form>

@endsection