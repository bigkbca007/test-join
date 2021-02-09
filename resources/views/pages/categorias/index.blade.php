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
                <a href="categorias/edit/{{ $categoria->id_categoria_produto }}" class="btn btn-outline-info">Editar</a>
                <form action="categorias/destroy/{{ $categoria->id_categoria_produto }}" method="POST" class="form-inline" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger">Remover</button>
                </form>
            </span>
        </li>
        @endforeach
    </ul>
</div>

@endsection