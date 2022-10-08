@extends('layouts.base')

@section('conteudo')

    <h1>
      
        Editar de Pesssoa
         </h1>

    
   
    
    <form action="{{ route('home.update', ['id'=>$user->id_usuario] ) }}) }}" method="post">
   
        @csrf
        <div class="row">

            <div class="form-group col-md-6">
              <label for="nome" class="form-label">Nome*</label>
              <input type="text" name="nome" id="nome" class="form-control" value="{{old('nome') }}">
            </div>

            <div class="form-group col-md-6">
                <label for="email" class="form-label">E-mail*</label>
                <input type="email" name="email" id="email"  class="form-control" value="{{ old('email') }}">
            </div>

            <div class="form-group col-md-2">
                <input  class='btn btn-success form-control'  type="submit" value="Editar">
            </div>     
        </div>
    </form>

@endsection