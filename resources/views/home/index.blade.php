@extends('layouts.base')

@section('conteudo')

    <h1>Cadastrar users - 
        <a class="btn btn-dark" href="{{ route('home.create')}}">Novo <i class="bi bi-plus"></i></a>  
    </h1>

    <table class="table table-striped table-border">
        <thead>
            <tr>
                <th>Ações</th>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $user) 
            <tr>
                <td> 
                    <a class="btn btn-primary" href="{{ route('home.show',['id'=>$user->id_usuario]) }}"><i class="bi bi-eye-fill"></i></a>
                    <a class="btn btn-warning" href="{{ route('home.edit',['id'=>$user->id_usuario]) }}">
                        <i class="bi bi-pencil-square"></i> 
                    </a> 
                    <a class="btn btn-danger" href="{{ route('home.destroy',['id'=>$user->id_usuario]) }}">
                        <i class="bi bi-trash3-fill"></i>
                    </a>

                </td>
                <td>{{$user->id}}</td>
                <td>{{$user->nome}}</td>
                <td>{{$user->email}}</td>

            </tr>
             @endforeach 
        </tbody>
    </table>


@endsection