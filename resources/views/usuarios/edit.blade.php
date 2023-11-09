@extends('adminlte::page')

@section('title', 'Alterar de Usuário')

@section('content_header')
<div class="card-primary">
    <div class="card-header">
        <h1 class="card-title">Alterar de Usuário</h1>
    </div>
</div>
@stop

@section('content')

@include('usuarios._mensagem');

<form action="{{ route('usuarios.update', $usuario) }}" method="post">
    @method('PUT')
    @include('usuarios._form');
</form>

@stop