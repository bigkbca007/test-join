@extends('layouts.app')

@section('content')

<h2 class="head-page">Produtos</h2>

<div class="style-content">
    <table class="table table-condensed teble-striped">
        <thead>
            <tr>
                <th></th>
                <th>Produto</th>
                <th>Categoria</th>
                <th>Valor</th>
                <th>Data Cadastro</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td><strong class="text-success">{{ $produto->nome_produto }}</strong></td>
                <td><strong class="text-success">{{ $produto->nome_categoria }}</strong></td>
                <td><strong class="text-success">R$ {{ number_format($produto->valor_produto, 2, ',', '.') }}</strong></td>
                <td><strong class="text-success">{{ date('d/m/Y h:i', strtotime($produto->created_at)) }}</strong></td>
                <td><span class="links-lista">
                        <a href="produtos/edit/{{ $produto->id_produto }}" class="btn btn-outline-info">Editar</a>
                        <form action="produtos/destroy/{{ $produto->id_produto }}" method="POST" class="form-inline" style="display:inline;" id="form-remover">
                            @csrf
                            @method('DELETE')
                        </form>
                        <button class="btn btn-outline-danger" id="bt-remover">Remover</button>
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

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