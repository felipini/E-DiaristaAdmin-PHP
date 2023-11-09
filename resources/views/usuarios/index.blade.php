@extends('adminlte::page')

@section('title', 'Lista de Usuários')

@section('content_header')
    <div class="card-primary">
        <div class="card-header">
            <h1 class="card-title">Lista de Usuários</h1>
            <a href="{{ route('usuarios.create') }}" class="btn btn-success float-right"><h5>Novo Usuário</h5></a>
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
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
            @forelse($usuarios as $usuario)
                <tr>
                    <th>{{ $usuario->id }}</th>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>
                        <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('usuarios.destroy', $usuario) }}" method="post" style="display: inline">
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
        {{ $usuarios->links() }}
    </div>
    
</div>   

@stop