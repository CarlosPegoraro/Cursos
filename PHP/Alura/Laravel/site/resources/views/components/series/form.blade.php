<form method="post" action="{{ $action }}">
    @csrf
    @isset($name)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="name" class="form-label">Alterar o Nome: </label>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control"
            @isset($name) value="{{ $name }}" @endisset>
    </div>

    <button type="submit" class="btn btn-outline-primary">Atualizar Série</button>
</form>
