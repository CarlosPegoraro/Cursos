<x-layout title="Séries">
    <div class="container d-flex flex-column gap-4">
        <a href="{{route("series.create")}}" class="btn btn-primary">Adicionar Series</a>
        <ul class="list-group">
            @foreach ($series as $serie)
                <li class="list-group-item">{{$serie->name}}</li>
            @endforeach
        </ul>
    </div>
</x-layout>
