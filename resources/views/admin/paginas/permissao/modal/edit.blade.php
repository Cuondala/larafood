<form action="{{ route('permissoes.update', $permissao->id) }}" method="post">
    @csrf
    @method('PUT')
        <div id="edit{{ $permissao->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="my-modal-title">{{ $permissao->id }}</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input
                                type="text"
                                name="nomePermissao"
                                id=""
                                class="form-control"
                                placeholder="Nome do Perfil"
                                value="{{$permissao->nomePermissao }}"
                            >
                        </div>



                        <div class="form-group">
                            <textarea
                                name="descricao"
                                id=""
                                cols="5"
                                rows="5"
                                class="form-control"
                                placeholder="descrição"
                                value="{{ $permissao->descricao }}"
                            ></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" data-dismiss="modal" class="btn btn-secondary">Cancelar</button>
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
</form>
