@extends('adminlte::page')

@section('title', 'Lista de Tipos de Imóvel')

@section('content_header')
    <div class="card-primary">
        <div class="card-header">
            <h1 class="card-title">Lista de Tipos de Imóvel</h1>
            <a href="{{ route('tipos.create') }}" class="btn btn-success float-right"><h5>Novo Tipo de Imóvel</h5></a>
        </div>
    </div>
@stop

@section('content')
@include('_mensagens_sessao')

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
            @forelse($tipos as $tipo)
                <tr>
                    <th>{{ $tipo->id }}</th>
                    <td>{{ $tipo->descricao }}</td>
                    <td>
                        <a href="{{ route('tipos.edit', $tipo) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('tipos.destroy', $tipo) }}" method="post" style="display: inline">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir o registro?')">
                                Excluir
                            </button>
                        </form>
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
        {{ $tipos->links() }}
    </div>
    
</div>   

@stop