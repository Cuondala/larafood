<div id="show{{ $plano->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">{{ $plano->nomePlano }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <p> <strong>Nome do Plano:</strong> {{ $plano->nomePlano }}</p>
              <p> <strong>Preço:</strong> {{ $plano->preco }}</p>
              <p> <strong>Url:</strong> {{ $plano->url }}</p>
              <p> <strong>Descrição:</strong> {{ $plano->descricao }}</p>
            </div>
            <div class="modal-footer">
               <button type="reset" data-dismiss="modal" class="btn btn-outline-secondary">Voltar</button>
            </div>
        </div>
    </div>
</div>
