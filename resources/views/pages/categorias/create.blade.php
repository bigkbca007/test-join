@extends('layouts.app')

@section('content')

<h2 class="head-page">{{ is_null($categoria) ? 'Adicionar' : 'Editar' }} Categoria</h2>

<div class="style-content">
    <form method="POST" action="{{ $action }}" class="style-form">
        @csrf

        <input type="hidden" name="id_categoria_produto" value="{{ is_null($categoria) ? 0 : $categoria->id_categoria_produto }}">
        <div class="mb-3">
            <label for="nome_categoria" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome_categoria" id="nome_categoria" placeholder="Nome da categoria"  value="{{ is_null($categoria) ? '' : $categoria->nome_categoria }}">
        </div>
        <button type="submit" class="btn btn-primary">{{ is_null($categoria) ? 'Adicionar' : 'Alterar' }}</button>
    </form>
</div>

@endsection