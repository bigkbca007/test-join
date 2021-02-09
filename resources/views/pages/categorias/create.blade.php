@extends('layouts.app')

@section('content')

<h2 class="head-page">Adicionar Categoria</h2>

<form method="POST" action="/categorias/store" class="style-form">
    @csrf
    <div class="mb-3">
        <label for="nome_categoria" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome_categoria" id="nome_categoria" placeholder="Nomde da categoria">
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>

@endsection