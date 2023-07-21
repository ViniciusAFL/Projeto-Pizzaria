@extends('layouts.base')

@section('content')

<h1>Produtos</h1>
<table class="table table-light">
    <thead>
        <tr>
            <th>Ações</th>
            <th>ID</th>
            <th>Produto</th>
            <th>Observações</th>
            <th>Qtd Tamanhos</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($produtos->get() as $produto)

        <tr>
            <td>
                <a class="btn btn-warning" href="{{ route('produto.edit', ['id'=>$produto->id_produto]) }}">Editar</a>
                <a class="btn btn-success" href="{{ route('produto.show', ['id'=>$produto->id_produto]) }}">Ver</a>
                <a class="btn btn-danger" href="{{ route('produto.destroy', ['id'=>$produto->id_produto]) }}">Excluir</a>

            </td>

            <td>{{$produto->id_produto}}</td>
            <td>{{$produto->nome}}</td>
            <td>{{nl2br($produto->observacoes)}}</td>
            <td>{{!!
                    $produto->tamanhos()->count()
                !!}}</td>

        </tr>
        @endforeach
    </tbody>

</table>
@endsection
@section('scripts')

@endsection
