@extends('layouts.base')

@section('content')

<h1>Cargo: {{$cargo->cargo}}</h1>
<h2>Relação de usuários com esse cargo</h2>

<table>
    <thead>
        <tr>
            <th>Ações</th>
            <th>Nome</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>
                <a href="#">Editar</a>
                <a href="#">Ver</a>
            </td>
            <td>
                ---
            </td>
        </tr>
    </tbody>
</table>
@endsection

@section('scripts')
@endsection
