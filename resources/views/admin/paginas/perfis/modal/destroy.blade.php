<form action="{{ route('perfis.destroy', $perfil->id) }}" method="post">
    @csrf
    @method('DELETE')
        <div id="destroy{{ $perfil->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="my-modal-title">{{ $perfil->nomePerfil }}</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Tem certezaque prentende eliminar o perfil !</p>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
</form>
