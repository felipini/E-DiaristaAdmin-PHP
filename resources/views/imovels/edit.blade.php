@extends('adminlte::page')

@section('title', 'Alterar de Tipo de Imóvel')

@section('content_header')
<div class="card-primary">
    <div class="card-header">
        <h1 class="card-title">Alterar de Tipo de Imóvel</h1>
    </div>
</div>
@stop

@section('content')

@include('tipos._mensagem');

<form action="{{ route('tipos.update', $tipo) }}" method="post">
    @method('PUT')
    @include('tipos._form');
</form>

@stop