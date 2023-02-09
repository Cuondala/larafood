<div id="show{{ $perfil->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">{{ $perfil->nomePerfil }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <p> <strong>Nome do Perfil:</strong> {{ $perfil->nomePerfil }}</p>
              <p> <strong>Descrição:</strong> {{ $perfil->descricao }}</p>
            </div>
            <div class="modal-footer">
               <button type="reset" data-dismiss="modal" class="btn btn-outline-secondary">Voltar</button>
            </div>
        </div>
    </div>
</div>
