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
                <form action="categorias/destroy/{{ $categoria->id_categoria_produto }}" method="POST" class="form-inline" style="display:inline;" id="form-remover">
                    @csrf
                    @method('DELETE')
                </form>
                <button class="btn btn-outline-danger" id="bt-remover">Remover</button>
            </span>
        </li>
        @endforeach
    </ul>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-msg" tabindex="-1" aria-labelledby="head-modal-msg" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="head-modal-msg"><span class="text-danger">Atenção!</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja remover este item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-outline-primary" onclick="$('#form-remover').submit();">Remover</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#bt-remover').click(function(e) {
        $('#modal-msg').modal('show');
    });
</script>
@endsection