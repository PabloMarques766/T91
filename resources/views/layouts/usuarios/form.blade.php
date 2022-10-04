@extends('layouts.base')
@section('conteudo')
    <h1>
        @if($usuario)
            Atualizar usuario
        @else
            Novo usuario
        @endif
    </h1>
    @if ($tipo)        
        <form action="{{ route('usuario.update', ['id'=>$tipo->id_tipo]) }}" method="post">        
    @else
        <form action="{{ route('usuario.store') }}" method="post">        
    @endif
        @csrf
       <div class="row">
            <div class="form-group col-md-6">
                <label for="usuario" class="form-label">usuario*</label>
                <input type="text" name="usuario" id="usuario"
                    value="{{ $usuario ? $usuario->usuario : old('usuario') }}" required
                class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="btn-enviar" class="form-label">&nbsp;</label>
                <input type="submit" value="{{ $usuario ? 'Atualizar' : 'Cadastrar' }}" 
                 id="btn-enviar"  class="btn btn-primary form-control">
            </div>
       </div>
    </form>
@endsection