@extends('adminlte::page')

@section('title', 'Alterar de Serviço')

@section('content_header')
<div class="card-primary">
    <div class="card-header">
        <h1 class="card-title">Alterar de Serviço</h1>
    </div>
</div>
@stop

@section('content')

<form action="{{ route('servicos.update', $servico) }}" method="post">
    @method('PUT')
    @include('servicos._form');
</form>

@stop