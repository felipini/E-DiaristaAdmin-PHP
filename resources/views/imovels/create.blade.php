@extends('adminlte::page')

@section('title', 'Cadastro de Imóvel')

@section('content_header')
<div class="card-primary">
    <div class="card-header">
        <h1 class="card-title">Cadastro de Imóvel</h1>
    </div>
</div>
@stop

@section('content')

@include('imovels._mensagem');

<form action="{{ route('imovels.store') }}" method="post">
    @include('imovels._form');
</form>

@stop