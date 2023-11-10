@extends('adminlte::page')

@section('title', 'Cadastro de Tipo de Imóvel')

@section('content_header')
<div class="card-primary">
    <div class="card-header">
        <h1 class="card-title">Cadastro de Tipo de Imóvel</h1>
    </div>
</div>
@stop

@section('content')

@include('tipos._mensagem');

<form action="{{ route('tipos.store') }}" method="post">
    @include('tipos._form');
</form>

@stop