<x-layout :title="'Editar Serie ' . $serie->name">
    {{-- <x-series.form action="{{ route("series.update", $serie->id) }}" name="{{ $serie->name }}"/> --}}
        <form method="post" action="{{ route("series.update", $serie->id) }}">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="name" class="form-label">Alterar o Nome: </label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control"
                    value={{$serie->name}}
            </div>       
            <button type="submit" class="btn btn-outline-primary">Atualizar Série</button>
        </form>
</x-layout>
