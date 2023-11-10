@extends('adminlte::page')

@section('title', 'Lista de Imóveis')

@section('content_header')
    <div class="card-primary">
        <div class="card-header">
            <h1 class="card-title">Lista de Imóveis</h1>
            <a href="{{ route('imovels.create') }}" class="btn btn-success float-right"><h5>Novo Imóvel</h5></a>
        </div>
    </div>
@stop

@section('content')
@include('_mensagens_sessao')

<div class="card table-responsive">
   <table class="table table-striped table-hover">

        <thead>
            <tr class="p-3 mb-2 bg-gradient-primary text-white">
                <th scope="col">ID</th>
                <th scope="col">Outorgado</th>
                <th scope="col">Outorgante</th>
                <th scope="col">Livro</th>
                <th scope="col">Folha</th>
                <th scope="col">Data Venda</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>

        <tbody>
            @forelse($imovels as $imovel)
                <tr>
                    <th>{{ $imovel->id }}</th>
                    <td>{{ $imovel->outorgado }}</td>
                    <td>{{ $imovel->outorgante }}</td>
                    <td>{{ $imovel->livro }}</td>
                    <td>{{ $imovel->folha }}</td>
                    <td>{{ $imovel->data_venda }}</td>
                    <td>
                        <a href="{{ route('imovels.edit', $imovel) }}" class="btn btn-primary">Editar</a>
                        
                    </td>
                    <td>
                        <form action="{{ route('imovels.destroy', $imovel) }}" method="post" style="display: inline">
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
        {{ $imovels->links() }}
    </div>
    
</div>   

@stop