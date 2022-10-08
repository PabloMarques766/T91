@extends('layouts.base')

@section('conteudo')

    <h1>Nome: {{$user->name}}</h1>
    <h4>E-mail: {{$user->email}}</h4>

@endsection