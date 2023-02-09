<div id="show{{ $detalhe->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">{{ $detalhe->nomeDetalhe }}</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <p> <strong>Nome do Plano:</strong> {{ $detalhe->nomeDetalhe }}</p>
              <p> <strong>Descrição:</strong> {{ $detalhe->descricao }}</p>

            </div>
            <div class="modal-footer">
                <button type="reset" data-dismiss="modal" class="btn btn-outline-secondary">Voltar</button>
            </div>
        </div>
    </div>
</div>
