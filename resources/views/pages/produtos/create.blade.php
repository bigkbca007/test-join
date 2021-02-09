@extends('layouts.app')

@section('content')

<h2 class="head-page">{{ is_null($produto) ? 'Adicionar' : 'Editar' }} Produto</h2>

<div class="style-content">
    <form method="POST" action="{{ $action }}" class="style-form">
        @csrf

        <input type="hidden" name="id_produto" value="{{ is_null($produto) ? 0 : $produto->id_produto }}">
        <div class="mb-3">
            <label for="id_categoria_produto" class="form-label">Categoria</label>
            <select class="form-control" name="id_categoria_produto" id="id_categoria_produto">
                <option value="">Selecione</option>
                @foreach($categorias as $categoria)
                    <option {{ !is_null($produto) && ($categoria->id_categoria_produto == $produto->id_categoria_produto)? 'selected' : '' }} value="{{ $categoria->id_categoria_produto }}">{{ $categoria->nome_categoria }}</option>
                @endforeach            
            </select>
        </div>
        <div class="mb-3">
            <label for="nome_produto" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome_produto" id="nome_produto" placeholder="Nome do produto" value="{{ is_null($produto) ? '' : $produto->nome_produto }}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">R$</span>
            <input type="text" class="form-control" name="valor_produto" placeholder="Valor do Produto" value="{{ is_null($produto) ? '' : $produto->valor_produto }}">
        </div>
        <button type="submit" class="btn btn-primary">{{ is_null($produto) ? 'Adicionar' : 'Alterar' }}</button>
    </form>
</div>

@endsection