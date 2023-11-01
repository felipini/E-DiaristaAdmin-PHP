@extends('adminlte::page')

@section('title', 'Lista de Serviços')

@section('content_header')
    <div class="card-primary">
        <div class="card-header">
            <h1 class="card-title">Lista de Serviços</h1>
            <a href="{{ route('servicos.create') }}" class="btn btn-success float-right"><h5>Novo Serviço</h5></a>
        </div>
    </div>
@stop

@section('content')
<div class="card">
   <table class="table table-striped table-hover">

        <thead>
            <tr class="p-3 mb-2 bg-gradient-primary text-white">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
            @forelse($servicos as $servico)
                <tr>
                    <th>{{ $servico->id }}</th>
                    <td>{{ $servico->nome }}</td>
                    <td>
                        <a href="{{ route('servicos.edit', $servico) }}" class="btn btn-primary">Editar</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <th></th>
                    <th>Nenhum serviço encontrado!!!</th>
                    <th></th>
                </tr>
            @endforelse
        </tbody>

    </table>

    <div class="d-flex justify-content-center">
        {{ $servicos->links() }}
    </div>
    
</div>   

@stop