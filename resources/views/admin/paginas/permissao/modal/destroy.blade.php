<form action="{{ route('permissoes.destroy', $permissao->id) }}" method="post">
    @csrf
    @method('DELETE')
        <div id="destroy{{ $permissao->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="my-modal-title">{{ $permissao->nomePermissao }}</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Tem certezaque prentende eliminar o permissao !</p>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
</form>
