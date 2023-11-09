@extends('adminlte::page')

@section('title', 'Cadastro de Usuário')

@section('content_header')
<div class="card-primary">
    <div class="card-header">
        <h1 class="card-title">Cadastro de Usuário</h1>
    </div>
</div>
@stop

@section('content')

@include('usuarios._mensagem');

<form action="{{ route('usuarios.store') }}" method="post">
    @include('usuarios._form');
</form>

@stop