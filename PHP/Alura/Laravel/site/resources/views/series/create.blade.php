<x-layout title="Adicionar">
    <form method="post" action="{{route("series.store")}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome: </label>
            <input id="name" type="text" name="name" class="form-control">
        </div>

        <button type="submit" class="btn btn-outline-primary">Adicionar Série</button>
    </form>
</x-layout>
