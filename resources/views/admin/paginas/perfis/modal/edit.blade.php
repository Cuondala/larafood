<form action="{{ route('perfis.update', $perfil->id) }}" method="post">
    @csrf
    @method('PUT')
        <div id="edit{{ $perfil->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="my-modal-title">{{ $perfil->id }}</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input
                                type="text"
                                name="nomePerfil"
                                id=""
                                class="form-control"
                                placeholder="Nome do Perfil"
                                value="{{$perfil->nomePerfil }}"
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
                                value="{{ $perfil->descricao }}"
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
