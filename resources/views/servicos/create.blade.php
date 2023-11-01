@extends('adminlte::page')

@section('title', 'Cadastro de Serviço')

@section('content_header')
<div class="card-primary">
    <div class="card-header">
        <h1 class="card-title">Cadastro de Serviço</h1>
    </div>
</div>
@stop

@section('content')

<form action="{{ route('servicos.store') }}" method="post">
    @include('servicos._form');
</form>

@stop