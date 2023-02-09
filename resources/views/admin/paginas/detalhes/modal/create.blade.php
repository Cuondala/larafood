<form action="{{ route('detalhes.store', $planos->id) }}" method="post">
    @csrf
        <div id="create{{ $planos->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="my-modal-title">Novo Detalhe</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text"
                                   name="nomeDetalhe"
                                   id=""
                                   class="form-control
                                   @error('nomeDetalhe') is-invalid @enderror
                                   "
                                   placeholder="Nome do detalhe"
                                   value="{{ old('nomeDetalhe') }}">
                        </div>

                        <div class="form-group">
                          <textarea name="descricao"
                                    id=""
                                    cols="5"
                                    rows="5"
                                    placeholder="Descrição"
                                    class="form-control
                                    @error('descricao') is-invalid @enderror
                                    "
                                    value="{{ old('descricao') }}"
                            ></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" data-dismiss="modal" class="btn btn-secondary">Cancelar</button>
                        <button type="submit" class="btn btn-success">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
</form>
