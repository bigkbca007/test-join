@extends('layouts.app')

@section('content')

<h2 class="head-page">Categorias</h2>

<div class="style-content">
    <ul class="list-group">
        @foreach($categorias as $categoria)
        <li class="list-group-item">
            {{ $loop->index + 1 }}
            <strong class="list-item text-primary">
                {{ $categoria->nome_categoria }}
            </strong>
            <span class="links-lista">
                <a href="categorias/editar/{{ $categoria->id_categoria_produto }}" class="btn text-info">Editar</a>
                <a href="categorias/remover/{{ $categoria->id_categoria_produto }}" class="btn text-danger">Remover</a>
            </span>
        </li>
        @endforeach
    </ul>
</div>

@endsection