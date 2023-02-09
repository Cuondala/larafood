<div class="form-group">
    <input
        type="text"
        name="nomePlano"
        id=""
        class="form-control
        @error('nomePlano') is-invalid @enderror
        "
        placeholder="Nome do Plano"
        value="{{old('nomePlano') }}"
    >
</div>


<div class="form-group">
    <input
        type="number"
        name="preco"
        id=""
        class="form-control
        @error('preco') is-invalid @enderror
        "
        placeholder="Preço"
        value="{{old('preco') }}"
    >
</div>

<div class="form-group">
    <textarea
        name="descricao"
        id=""
        cols="5"
        rows="5"
        class="form-control
        @error('descricao') is-invalid @enderror
        "
        placeholder="descrição"
        value="{{ old('descricao') }}"
    ></textarea>
</div>
