@extends('layouts.base')

@section('conteudo')

    <h1>Cadastrar users - 
        <a class="btn btn-dark" href="{{ route('user.create',)}}">Novo <i class="bi bi-plus"></i></a>  
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
            @foreach ($user->get() as $user) 
            <tr>
                <td> 
                    <a class="btn btn-primary" href="{{ route('user.show',['id'=>$user->id]) }}"><i class="bi bi-eye-fill"></i></a>
                    <a class="btn btn-warning" href="{{ route('user.edit',['id'=>$user->id]) }}">
                        <i class="bi bi-pencil-square"></i> 
                    </a> 
                    <a class="btn btn-danger" href="{{ route('user.destroy',['id'=>$user->id]) }}">
                        <i class="bi bi-trash3-fill"></i>
                    </a>

                </td>
                <td>{{$user->id}}</td>
                <td>{{$user->nome}}</td>
                <td>{{$user->sobrenome}}</td>
                <td>{{$user->email}}</td>

            </tr>
             @endforeach 
        </tbody>
    </table>


@endsection