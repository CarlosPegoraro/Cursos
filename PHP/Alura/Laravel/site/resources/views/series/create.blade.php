<x-layout title="Nova Serie">
    <form method="post" action="{{ route('series.store') }}">
        @csrf
        <div class="row mb-3">
            <div class="col-8">
                <label for="name" class="form-label">Nome da série: </label>
                <input autofocus type="text" id="name" name="name" class="form-control"
                    value="{{ old('name') }}">
            </div>
            <div class="col-2">
                <label for="seasonQty" class="form-label">Temporadas: </label>
                <input type="text" id="seasonQty" name="seasonQty" class="form-control"
                    value="{{ old('seasonQty') }}">
            </div>
            <div class="col-2">
                <label for="episodesPerSeason" class="form-label">Episódios: </label>
                <input type="text" id="episodesPerSeason" name="episodesPerSeason" class="form-control"
                    value="{{ old('episodesPerSeason') }}">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary">Adicionar Série</button>
    </form>
</x-layout>
