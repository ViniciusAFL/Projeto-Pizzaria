<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('produto.index') }}">
                Todos os Produtos
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('produto.edit', ['id'=>$produto->id_produto]) }}">
            Editar
        </a>
    </li>

</ul>
