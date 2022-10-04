@extends('layouts.base')

@section('conteudo')

    <h1> 
        <i class="bi bi-basket-fill"></i>
        Lista de usuarios
        - 
        <a href="{{ route('usario.create') }}" class="btn btn-dark">
            Novo usuario
        </a>
    </h1>

    <table class="table table-striped table-border">
        <thead>
            <tr>
                <th>Nomes</th>
                <th>ID</th>
                <th>E-mail</th>
                <th>Senhas</th>
            </tr>
        </thead>
       
    </table>

    
@endsection